<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Employer;
use App\Models\Job;
use App\Models\seeker;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function seeker(){
       
        $seeker = Seeker::find(session('id'));
        return view('dashboard/seeker', compact('seeker'));
    }
    public function employer(){
        $companies = Employer::count();
        $seekers = seeker::count();
        $jobs = Job::count();
        $applications = Application::count();
        return view('dashboard/employer', compact('companies', 'seekers', 'jobs', 'applications'));
    }

    public function approveJobListing($id){
        
        $job = Job::findOrFail($id);
        $job->update(['approved' => true]);
        // return $job;
     return redirect()->back();
    }

    public function rejectJobListing($id)
{
    $job = Job::findOrFail($id);
    $job->update(['approved' => false]);
//    return $job->update(['approved' => false]);
    return redirect()->back();

}
}
