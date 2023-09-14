<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class EmployerController extends Controller
{
    public function index(){
        $employers = Employer::all();
        return view('company/index' ,compact('employers'));
    }

    public function enablecompany($id){
        $employer = Employer::findorFail($id);
        $employer->update(['status' => true]);
        // return $employer;
        // return $employer->update(['status' => true]);
        return redirect()->back();
    }
    public function disablecompany($id){
        $employer = Employer::findorFail($id);
        $employer->update(['status' => false]);
        // return $employer->update(['status' => false]);
        // return $employer;
        return redirect()->back();
    }

    // public function status($emp){
    //     $employer = Employer::find($emp);
    //     return $employer;
    //     if($employer){
    //         if($employer->status){
    //             $employer->status = 0;
    //         }else {
    //             $employer->status = 1;
    //         }
    //         $employer->save();
    //     }
    //     return back();
    // }


}
