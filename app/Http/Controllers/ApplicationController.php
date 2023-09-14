<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use App\Models\seeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($job_id)
    {

        // incase of an employe

        $user = auth()->user();
        $employer_id = $user->employer_id;

        // $jobs = Job::with('application.seeker')->where('emp_id',$employer_id)->get();

        // return $jobs;       
       $seeker_id = auth()->user()->seeker_id;
        return view('application/create', compact('job_id', 'seeker_id' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, seeker $seeker, Job $job)
    {

             $validator = Validator::make($request->all(), [
            'resume' => 'required|mimes:pdf',
            'cover_letter' => 'required|mimes:pdf',

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
       
        
        // return $request->all();
        if ($request->hasFile('resume')) {
            // getting file name with extension
            $fileNamewithext = $request->file('resume')->getClientOriginalName();
            //getting the file

            $fileName = pathInfo($fileNamewithext, PATHINFO_FILENAME);
            //getting the extension
            $extension = $request->file('resume')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('resume')->move(public_path("app/public"), $fileNameToStore);
            $fileNameToStore = $path;


        }


        if ($request->hasFile('cover_letter')) {
            // getting file name with extension
            $fileNamewithext = $request->file('cover_letter')->getClientOriginalName();
            //getting the file
            $fileName = pathInfo($fileNamewithext, PATHINFO_FILENAME);
            //getting the extension
            $extension = $request->file('cover_letter')->getClientOriginalExtension();
            // file name to store
            $CLtoStore = $fileName . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('cover_letter')->move(public_path("app/public"), $CLtoStore);
            $CLtoStore = $path;
        }
        
        Application::create([
            'job_id' => $request->input('job_id'),
            'seeker_id' => $request->input('seeker_id'),
            'resume' => $fileNameToStore,
            'cover_letter' => $CLtoStore,
           
        ]);
        return redirect()->route('alljobs');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job = Job::where('id', $id)->get();
        $seeker = seeker::where('id', $id)->get();
        $application = Application::where('id', $id)->first();
        return view('application/edit', compact('application','job', 'seeker'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
    }
    // public function apply($joblisting_id){
        
        
    //     $job = Job::where('id', $joblisting_id)->get();
    //     $user = auth()->user();
        
    //     $application = Application::where('job_id', $joblisting_id)->where('seeker_id', $joblisting_id)->get();

    //     return view('application/create', compact('seeker_id', 'application'));
    // }
}
