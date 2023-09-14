<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\seeker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //this is job seeker's login logic
    public function seekerlogin(){
        return view('account/login');
    }
    public function sklogin(Request $request){

        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('alljobs');
        // }
 
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
    

        $credentials = $request->only('email', 'password');
        $seeker = User::where('email', $credentials['email'])->first();
        if($seeker && Hash::check($credentials['password'], $seeker->password)){
            Auth::login($seeker);
            return redirect()->route('alljobs');
        }
        return redirect()->back()->with('fail', 'email and password do not match');
    } //end of job seeker's login logic

//this is an employer login logic
    public function employerlogin(){
        return view('account/emplogin');
    }
    public function emplogin(Request $request){

        $validator = Validator::make($request->all(), [
            'wemail' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $logins = $request->only('wemail','password');
        $employer = User::where('email', $logins['wemail'])->first();
        if($employer && Hash::check($logins['password'], $employer->password)){
            Auth::login($employer);
    
            return redirect()->route('alljobs');
            // dd($logins['wemail'], $employer->wemail);
        }
        return redirect()->route('employer')->with('error', 'Invalid Login Credentials');
    }
    // public function logout(){
    //     return redirect()->route('alljobs');
    // }
}
