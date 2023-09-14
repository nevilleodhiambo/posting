<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $emp_id = auth()->user()->employer_id;
        $jobs = Job::all();
        return view('jobs/index', compact('jobs'));

    }
    public function listing(){
        $jobListings = Job::where('approved', 1)->latest()->paginate(10);

        return view('job-listings.index', compact('jobListings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $emp_id = auth()->user()->employer_id;
        return view('jobs/create', compact('emp_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = new Job();
        $job->title = $request->title;
        $job->description = $request->description;
        $job->skills = $request->skills;
        $job->coinfo = $request->coinfo;
        $job->qualification = $request->qualification;
        $job->salary = $request->salary;
        $job->emp_id = $request->emp_id;
        // return $request->all();
        $job->save();
        return redirect()->route('jobs.show', compact('job'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $jobs)
    {
        $employer_id = auth()->user()->employer_id;
        $jobs = Job::where('emp_id', $employer_id)->get();
        // return $jobs;
        
        // $jobs = Job::where('emp_id', $emp_id)->first();
        // if($employer_id === $jobs->emp_id){

            // dd($jobs->emp_id);
            return view('jobs/show', compact('jobs', 'employer_id'));
            //   }else{
               
                // abort(403);
            // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job = Job::where('id', $id)->first();
        return view('jobs/edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $job = Job::where('id', $id)->first();
        $job->title = $request->title;
        $job->description = $request->description;
        $job->skills = $request->skills;
        $job->coinfo = $request->coinfo;
        $job->qualification = $request->qualification;
        $job->salary = $request->salary;
        $job->save();
        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $job = Job::where('id', $id)->first();
        $job->delete();
        return redirect()->route('jobs.index');

    }
}
