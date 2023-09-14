<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobListingController extends Controller
{

public function index()
{
    $jobListings = Job::latest()->paginate(10);
    // return $jobListings;
    return view('job-listings.index', compact('jobListings'));
}

}
