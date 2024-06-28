<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function voting()
    {
        return view('dashboard.voting');
    }
    public function hubungikami()
    {
        return view('bantuan.hubungikami');
    }
}
