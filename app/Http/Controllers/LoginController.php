<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\seeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //this is job seeker's login logic
    public function seekerlogin(){
        return view('account/login');
    }
    public function sklogin(Request $request){
        // dd($request->all());
        $credentials = $request->only('email', 'password');
        $seeker = Seeker::where('email', $credentials['email'])->first();
        // return $seeker;

        if($seeker && Hash::check($credentials['password'], $seeker->password) ){
            return redirect('dashboard/seeker');
        }
        return redirect()->route('seeklogin')->with('error', 'Invalid login credentials');
    } //end of job seeker's login logic

//this is an employer login logic
    public function employerlogin(){
        return view('account/emplogin');
    }
    public function emplogin(Request $request){
        $logins = $request->only('wemail','password');
        $employer = Employer::where('wemail', $logins['wemail'])->first();
        // return $employer;
        if($employer && Hash::check($logins['password'], $employer->password)){
            return redirect('dashboard/employer');
        }
        return redirect()->route('employer')->with('error', 'Invalid Login Credentials');
    }
}
