<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Report;
use App\Models\Response;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
            'reports' => Report::with('user')->where(['status' => 'processed'])->orWhere(['status' => 'done'])->get()
        ]);
    }

    public function response(Report $report)
    {
        return view('dashboard.response', [
            'title' => 'Response',
            'r' => $report
        ]);
    }

    public function responsed(Report $report)
    {
        return view('dashboard.responsed', [
            'title' => 'Response',
            'r' => $report,
            'responses' => Response::find($report->id)
        ]);
    }

    public function responsestore(Request $r)
    {
        $validatedData = $r->validate([
            'response' => 'required',
            'report_id' => 'required'
        ]);

        $validatedData['updated_at'] = now();
        $validatedData['employee_id'] = Auth::guard('employee')->user()->id;

        Response::create($validatedData);

        $reportUpdate['status'] = 'processed';
        Report::where('id', $validatedData['report_id'])->update($reportUpdate);

        return redirect('/dashboard/responded');
    }

    public function closed(Request $r)
    {
        $validatedData = $r->validate([
            'report_id' => 'required'
        ]);

        $reportUpdate['status'] = 'done';
        Report::where('id', $validatedData['report_id'])->update($reportUpdate);
        return redirect('/dashboard/responded');
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
