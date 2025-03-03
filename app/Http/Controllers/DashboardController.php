<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminHome()
    {
        return view('dashboard.adminDashboard');
    }

    public function userHome()
    {
        return view('dashboard.userDashboard');
    }
}