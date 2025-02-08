<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request) {
        //validate
        $attributes = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        //create user
        $user = User::create($attributes);
        //sign in user
        Auth::login($user);
        //redirect to home
        return redirect('/jobs');
    }

    
}
