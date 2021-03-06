<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index', [
            'title' => 'Sign In'
        ]);
    }

    public function signin(Request $r)
    {
        $credentials = $r->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->with('error', 'Sorry, your email or password was incorrect.');
    }

    public function signup()
    {
        return view('auth.signup', [
            'title' => 'Sign Up'
        ]);
    }

    public function store(Request $r)
    {
        $validatedData = $r->validate([
            'id' => 'required|max:16|unique:users',
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            'phone' => 'required|max:15|min:7'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('success', 'Registration successful! Please Sign In.');
    }

    public function signout(Request $r)
    {
        Auth::logout();

        $r->session()->invalidate();

        $r->session()->regenerateToken();

        return redirect('/');
    }
}
