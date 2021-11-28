<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('auth.admin_signin', ['title' => 'Employee Sign In']);
    }

    public function signin(Request $r)
    {
        $credentials = $r->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('employee')->attempt($credentials)) {
            $r->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('error', 'Sorry, your username or password was incorrect.');
    }

    public function signout(Request $r)
    {
        Auth::guard('employee')->logout();

        $r->session()->invalidate();

        $r->session()->regenerateToken();

        return redirect('/');
    }
}
