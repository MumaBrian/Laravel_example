<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }   

    public function store() {
        $attributes = request()->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        if (Auth::attempt($attributes)) {
            request()->session()->regenerate();
            return redirect('/jobs');
        }
        return back()->withErrors(['email' => 'Your provided credentials could not be verified']);
    }

    public function destroy() {
        Auth::logout();
        return redirect('/');
    }
}
