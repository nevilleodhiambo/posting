<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function approveJobListing($id){
        $jobListing = Job::findOrFail($id);
        $jobListing->update(['is_approved' => true]);
     return redirect()->back();
    }

    public function rejectJobListing($id)
{
    $jobListing = Job::findOrFail($id);
    $jobListing->update(['is_approved' => false]);
    return redirect()->back();

}
}
