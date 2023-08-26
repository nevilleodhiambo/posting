<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('login/home');
    }

    public function about(){
        return view('login/about');
    }
    public function do(){
        return view('login/do');
    }
    public function contact(){
        return view('login/contact');
    }
    public function portofolio(){
        return view('login/portofolio');
    }
}
