<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Profile $profile)
    {
        // $profiles = Profile::all();
        // return view('profile/index', compact('profiles'));
        $seeker_id = auth()->user()->seeker_id;

        if($seeker_id === $profile->user_id){
            $profile = Profile::where('user_id', $seeker_id)->first();
            return view('profile/index', compact('profile'));
        }else{
            abort(403);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $seeker_id = auth()->user()->seeker_id;
        $profile = Profile::where('user_id', $seeker_id)->first();
        if($profile){
            return redirect()->route('profile.show', ['profile' => $profile]);
        }
        return view('profile/create', compact('seeker_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $profile = new Profile();
        $profile->company = $request->company;
        $profile->job_title = $request->job_title;
        $profile->graduation_date = $request->graduation_date;
        $profile->degree = $request->degree;
        $profile->major = $request->major;
        $profile->start_date = $request->start_date;
        $profile->end_date = $request->end_date;
        $profile->summary = $request->summary;
        $profile->project_name = $request->project_name;
        $profile->project_description = $request->project_description;
        $profile->skills = $request->skills;
        $profile->user_id = $request->seeker_id;
        // $profile->end_date = $request->end_date;
        // return $request->all();
        $profile->save();
        return redirect()->route('profile.show',$profile->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        // $profile = Profile::where('user_id', $profile)->first();
        // return view('profile/index');

         // $profiles = Profile::all();
        // return view('profile/index', compact('profiles'));
        $seeker_id = auth()->user()->seeker_id;

        if($seeker_id === $profile->user_id){
            // $profile = Profile::where('user_id', $seeker_id)->first();
            return view('profile/show', compact('profile', 'seeker_id'));
        }else{
            abort(403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {

        $seeker_id = auth()->user()->seeker_id;
        $profile = Profile::where('user_id', $seeker_id)->first();
        return view('profile/edit', compact('profile', 'seeker_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $profile)
    {
        $seeker_id = auth()->user()->seeker_id;
        $profile = Profile::where('user_id', $seeker_id)->first();
        $profile->company = $request->company;
        $profile->job_title = $request->job_title;
        $profile->graduation_date = $request->graduation_date;
        $profile->degree = $request->degree;
        $profile->major = $request->major;
        $profile->start_date = $request->start_date;
        $profile->end_date = $request->end_date;
        $profile->summary = $request->summary;
        $profile->project_name = $request->project_name;
        $profile->project_description = $request->project_description;
        $profile->skills = $request->skills;
        $profile->user_id = $request->seeker_id;
        $profile->save();
        return redirect()->route('profile.show', compact('profile'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
