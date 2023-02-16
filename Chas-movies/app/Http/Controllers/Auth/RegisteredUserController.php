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

class RegisteredUserController extends Controller
{

    public function createMovie(Request $request){
        $listing = new Film;
        $listing->title = $request->title;
        $listing->genre = $request->genre;
        $listing->director = $request->director;
        $listing->maincast = $request->maincast;
        $listing->save();
        return redirect()->route('dashboard')->with('status', 'New post added successfully!');
    }




public function createShow(Request $request){
        $listing = new Show();
        $listing->title = $request->title;
        $listing->genre = $request->genre;
        $listing->director = $request->director;
        $listing->maincast = $request->maincast;
        $listing->seasons = $request->seasons;
        $listing->episodes = $request->episodes;
        $listing->save();
        return redirect('?')->with('status', 'New listing added successfully!');
    }

    /**
     * Display all users.
     */
    public function readAll()
    {
        
    }
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
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
