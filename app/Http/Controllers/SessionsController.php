<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{

    public function create() {
        return view('sessions.create');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (! auth()->attempt($attributes)) {
            return back()
            ->withInput()
            ->withErrors([
                'password' => 'Your email or password is incorrect - please try again',
            ]);
        }

        session()->regenerate();
        
        return redirect('/')->with('success', 'Welcome back');
    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'See you soon!');
    }
}
