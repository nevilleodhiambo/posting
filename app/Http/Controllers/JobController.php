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
        $jobs = Job::all();
        return view('jobs/index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs/create');
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
        $job->save();
        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
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
