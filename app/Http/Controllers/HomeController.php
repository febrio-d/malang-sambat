<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', ['title' => 'Home']);
    }

    public function reports()
    {
        return view('home.reports', ['title' => 'Reports']);
    }

    public function profile()
    {
        return view('home.profile', ['title' => 'Profile']);
    }

    public function editprofile()
    {
        return view('home.editprofile', ['title' => 'Edit Profile']);
    }
}
