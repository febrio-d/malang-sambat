<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'status' => 'Unresponded',
            'reports' => Report::with('user')->where(['status' => '0'])->get()
        ]);
    }

    public function responded()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'status' => 'Responded',
            'reports' => Report::with('user')->where(['status' => ['processed', 'done']])->get()
        ]);
    }

    public function employees()
    {
        return view('dashboard.employees', [
            'title' => 'Employees',
            'employees' => Admin::where(['role' => 'employee'])->get()
        ]);
    }

    public function register()
    {
        return view('dashboard.register', [
            'title' => 'Register'
        ]);
    }

    public function employeestore(Request $r)
    {
        $validatedData = $r->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            'phone' => 'required|max:15|min:7'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'employee';

        Admin::create($validatedData);

        return redirect('/dashboard/employees')->with('success', 'Registration successful!');
    }
}
