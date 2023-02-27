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
use League\CommonMark\Extension\Table\Table;

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

    // public function createWatchlist()
    // {
    //     $films = Film::all();
    //     $shows = Show::all();
    //     $watchlists = Watchlist::get();
    //     return view('watchlist', ['shows' => $shows, 'films' => $films, 'watchlists' => $watchlists]);
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

    /////////////////////////////////////////////////////////////

    public function filmView($id) {
        $films = Film::find($id);
        $shows = Show::find($id);
        return view('film-view', ['films' => $films, 'shows' => $shows, 'id' => $id]);
    }

    public function readAllWatchlist($id) {        

        $users = Watchlist::find($id);
        $films = Watchlist::where('film_id');
        return view('watchlist', ['id' => $id, 'films' => $films, 'users' => $users]);

        // $user->id = $request->userId;
        // $films = Watchlist::where('film_id');
        // return to_route('watchlist', ['id' => $request->userId, 'films' => $films, 'users' => $user]);

    }

    public function storeWatchlist(Request $request) {
        
        $listing = new Watchlist;
        $listing->film_id= $request->filmId;
        $listing->user_id = Auth::user()->id;
        $listing->save();
        return to_route('film-view', ['id' => $request->filmId])->with('status', 'New movie added successfully!');
    }
    
    public function destroyWatchlist($id) { //  Fixa route till watchlist/{id}?

        $listing = Watchlist::where('id', $id);
        $listing->delete();
        return to_route('watchlist')->with('status', 'Movie deleted successfully!');
    }
}