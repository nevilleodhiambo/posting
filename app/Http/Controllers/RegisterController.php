<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Personal;
use App\Models\qualification;
use App\Models\seeker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    public function employer(){
        $roles = Role::all();
        return view('account/employer', compact('roles'));
    }
    public function company(){
        return view('account/company');
    }

    public function seeker(){
        return view('account/seeker');
    }

    public function work(){
        return view('account/work');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'fname' => 'required|min: 3| max:10',
            'lname' => 'required|min :3| max:10',
            'email' => 'required|email|unique:seekers',
            'location' => 'required|',
            'password' => 'required|min:8',
            'number' => 'required|min:10',
            // 'date' =>  'required',
            'gender' => 'required',
            'nationality' => 'required',
            'qualification' => 'required',
            'job' => 'required',
            'availability' => 'required',
            'experience' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $seeker = seeker::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'location' => $request->input('location'),
            'number' => $request->input('number'),
            // 'date' => $request->input('date'),
            'password' => bcrypt($request->input('password')),
            'gender' => $request->input('gender'),
            'nationality' => $request->input('nationality'),
            'qualification' => $request->input('qualification'),
            'job' => $request->input('job'),
            'availability' => $request->input('availability'),
            'experience' => $request->input('experience'),
        ]);
        $user = new User();
        $user->seeker_id = $seeker->id;
        $user->email = $seeker->email;
        $user->name = $seeker->fname.' '.$seeker->lname;
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $user->assignRole('Seeker');
        Auth::login($user);
        return redirect()->route('alljobs')->with('success', 'Data Stored Successfully');
        
    }
 
    public function stremployer(Request $request){

        $validator = Validator::make($request->all(), [
            'fname' => 'required|min: 3',
            'lname' => 'required|min: 3',
            'email' => 'required|email|unique:employers',
            'position' => 'required',
            'phone' => 'required|min:10|unique:employers',
            'cname' => 'required|unique:employers',
            'industry' => 'required',
            'employeescount' => 'required',
            'hear' => 'required',
            'contact' => 'required|min:10|unique:employers',
            'wemail' => 'required|email|unique:employers',
            // 'website' => 'required',
            'password' => 'required|min:8'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $employer = Employer::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'position' => $request->input('position'),
            'phone' => $request->input('phone'),
            'cname' => $request->input('cname'),
            'industry' => $request->input('industry'),
            'employeescount' => $request->input('employeescount'),
            'hear' => $request->input('hear'),
            'contact' => $request->input('contact'),
            'wemail' => $request->input('wemail'),
            // 'website' => $request->input('website'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user = new User();
        $user->name = $employer->fname.' '.$employer->lname;
        $user->employer_id = $employer->id;
        $user->email = $employer->email;
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $user->assignRole('Employer');
        Auth::login($user);
        return redirect()->route('alljobs')->with('success', 'Successfully Created');
    }
    public function display(){
        $seekers = seeker::all();
        return view('account/seekerindex', compact('seekers'));
    }
}
