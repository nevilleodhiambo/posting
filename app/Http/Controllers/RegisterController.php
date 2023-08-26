<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Personal;
use App\Models\qualification;
use App\Models\seeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function employer(){
        return view('account/employer');
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
        // $request->validate([
        //     'fname' => 'required|string|max:255',
        //     'lname' => 'required|string|max:255',
        //     'email' => 'required|email|unique:personal,email',
        //     'password' => 'required|string|min:8',
        //     'day' =>  'required',
        //     'month' => 'required',
        //     'year' => 'required',
        //     'gender' => 'required',
        //     'nationality' => 'required',
        //     'location' => 'required',
        //     'number' => 'required|min:10',
        // ]);

        // $personal = Personal::create([
        //     'fname' =>  $request->fname,
        //     'lname' => $request->lname,
        //     'email' => $request->email,
        //     'day' => $request->day,
        //     'month' => $request->month,
        //     'year' => $request->year,
        //    'gender' => $request->gender,
        //     'nationality' => $request->nationality,
        //     'location' => $request->location,
        //     'number' => $request->number,
        //     'password' => Hash::make($request->password),
            
        // ]);
        $personal = new Seeker();
        $personal->fname = $request->fname;
        $personal->lname = $request->lname;
        $personal->email = $request->email;
        $personal->day = $request->day;
        $personal->month = $request->month;
        $personal->year = $request->year;
        $personal->gender = $request->gender;
        $personal->nationality = $request->nationality;
        $personal->location = $request->location;
        $personal->number = $request->number;
        $personal->password = Hash::make($request->password);
        $personal->qualification = $request->qualification;
        $personal->job = $request->job;
        $personal->availability = $request->availability;
        $personal->experience = $request->experience;
        $personal->save();
        return redirect()->back();
    }
    // public function storequalification(Request $request){
    //     $qualification = new qualification();
           
    //     $qualification->save();
    //     return to_route('index');
    // }
    // public function stremployer(){
    //         return view('')
    // }
    public function stremployer(Request $request){
        $employer = new Employer();
        // return $request->all();
        $employer->fname = $request->fname;
        $employer->lname = $request->lname;
        $employer->email = $request->email;
        $employer->position = $request->position;
        $employer->phone = $request->phone;
        $employer->cname = $request->cname;
        $employer->industry = $request->industry;
        $employer->employeescount = $request->employeescount;
        $employer->hear = $request->hear;
        $employer->contact = $request->contact;
        $employer->wemail = $request->wemail;
        $employer->website = $request->website;
        $employer->password = Hash::make($request->fname);
        $employer->save();
        return redirect()->back();
    }
}
