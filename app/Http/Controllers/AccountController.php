<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class AccountController extends Controller
{
    public function choose(){
        return view('account/index');
    }
    public function seeker(){
        return view('account/seeker');
    }
    public function employer(){
        return view('account/employer');
    }

    public function signseeker(){
        return view('account/seeker');
    }

    public function loginchoose(){
        return view('account/loginchoose');
    }
}
