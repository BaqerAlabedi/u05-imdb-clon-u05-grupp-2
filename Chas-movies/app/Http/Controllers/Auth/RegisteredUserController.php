<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Show;
use App\Models\Film;
use App\Models\Comment;
use App\Models\Watchlist;

class RegisteredUserController extends Controller
{

    public function createMovie(Request $request)
    {
        $listing = new Film;
        $listing->title = $request->title;
        $listing->genre = $request->genre;
        $listing->director = $request->director;
        $listing->maincast = $request->maincast;
        $listing->imgurl = $request->imgurl;
        $listing->save();
        return redirect()->route('movie')->with('status', 'New post added successfully!');
    }



    public function createShow(Request $request)
    {
        $listing = new Show();
        $listing->title = $request->title;
        $listing->genre = $request->genre;
        $listing->director = $request->director;
        $listing->maincast = $request->maincast;
        $listing->seasons = $request->seasons;
        $listing->episodes = $request->episodes;
        $listing->imgurl = $request->imgurl;
        $listing->save();
        return redirect()->route('show')->with('status', 'New post added successfully!');
    }

    /**
     * Display all Movies.
     */
    public function readAllMovies()
    {
        $films = Film::get();
        return view('movie', ['films' => $films]);
    }

    /**
     * Display all Shows.
     */
    public function readAllShows()
    {
        $shows = Show::get();
        return view('show', ['shows' => $shows]);
    }
    /**
     * Delete stuff.
     */

    public function deleteMovies($id)
    {
        $films = Film::find($id);
        $films->delete();
        return redirect()->route('movie')->with('status', 'Movie deleted added successfully!');
    }

    public function deleteShows($id)
    {
        $shows = Show::find($id);
        $shows->delete();
        return redirect()->route('show')->with('status', 'Show deletedadded successfully!');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
    }

    public function watchlist($id) {
        
        $films = Film::all($id);
        $shows = Show::all($id);
        $watchlists = Watchlist::get();
        return redirect()->route('watchlist');
        // return view('watchlist', ['films' => $films, 'shows' => $shows]);
    }

    public function viewWatchlist()
    {
        $films = Film::all();
        $shows = Show::all();
        $watchlists = Watchlist::get();
        return view('film-view', ['shows' => $shows, 'films' => $films, 'watchlists' => $watchlists]);
    }

    // public function showFilm($id)
    // {
    //     $film = Film::findOrFail($id);
    //     return view('film', ['film' => $film, 'id' => $id]);
    // }

    // public function addWatchlist(Request $request, $id) {
        
    //     $films = Film::find($request->id);
    //     $shows = Show::find($request->id);
    //     $films->save();
    //     $shows->save();
    //     return view('watchlist', ['film' => $films,'shows' => $shows, 'id' => $id]);

        // return redirect()->route('watchlist');

        // $films = Film::where('id', $id)->first();
        // $shows = Show::where('id', $id)->first();
        // $films->save();
        // $shows->save();
        // return redirect()->route('watchlist');

        // $films = Film::where($request->id);
        // $shows = Show::where($request->id);
        // $films->save();
        // $shows->save();
        // $watchlists = Watchlist::get();
        // return redirect()->route('watchlist');
        // return view('watchlist', ['shows' => $shows, 'films' => $films, 'watchlists' => $watchlists]);
    // }

    /**
     * Delete stuff.
     */
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 1,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
