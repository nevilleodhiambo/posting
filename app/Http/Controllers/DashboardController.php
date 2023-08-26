<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function seeker(){
        return view('dashboard/seeker');
    }
    public function employer(){
        return view('dashboard/employer');
    }
}
