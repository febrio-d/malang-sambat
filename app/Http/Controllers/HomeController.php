<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Response;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', ['title' => 'Home']);
    }

    public function reportstore(Request $r)
    {
        $validatedData = $r->validate([
            'desc' => 'required',
            'image' => 'image|file|max:16384'
        ]);


        if ($r->file('image')) {
            $validatedData['image'] = $r->file('image')->store('img');
        }
        $validatedData['created_at'] = now();
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status'] = '0';

        Report::create($validatedData);

        return redirect('/reports')->with('success', 'Your report has been added!');
    }

    public function reports()
    {
        return view('home.reports', [
            'title' => 'Reports',
            'reports' => Report::where(['user_id' => auth()->user()->id])->get()
        ]);
    }

    public function response(Report $report)
    {
        return view('home.response', [
            'title' => 'Response',
            'r' => $report,
            'resp' => Response::query()->where('report_id', $report->id)->first()
        ]);
    }

    public function profile()
    {
        return view('home.profile', ['title' => 'Profile']);
    }
}
