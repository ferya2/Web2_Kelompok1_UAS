<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paslon;
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
    public function detailpaslon()
    {
        $paslons = Paslon::all();
        return view('dashboard.detailpaslon', compact('paslons'));
    }
    public function showFaqVoting()
    {
        return view('bantuan.faq');
    }
}
