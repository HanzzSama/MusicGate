<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class DashboardController extends Controller
{
    public function adminHome()
    {
        $event = Event::get();

        return view('dashboard.adminDashboard', compact('event'));
    }

    public function userHome()
    {
        return view('dashboard.userDashboard');
    }
}