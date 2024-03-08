<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\User;
use Illuminate\Http\Request;

class OverviewsController extends Controller
{
    public function index(Request $request)
    {
        $userData = User::where('role', 'User')->count();
        $scoreData = Score::count();

        return view('admin.pages.overviews', compact('userData', 'scoreData'));
    }
}
