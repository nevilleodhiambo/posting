<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conversations = Conversation::with('messages')->where('emp_id', auth()->user()->id)->first();
       
        return view('message.index', compact('conversations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Job $employer)
    {
        $conversations = new Conversation();
        $conversations->seeker_id = auth()->user()->seeker_id;
        $conversations->employer_id = $employer->emp_id;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $seeker_id = auth()->user()->seeker_id;
        $employer = Job::where('emp_id', $id)->first();
        $conversations = Conversation::with('messages')->where('seeker_id', $seeker_id)->where('emp_id', $employer->emp_id)->first();

        $messages = collect([]);
        if($conversations){
            $messages = Message::where('conversation_id', $seeker_id)->get();
        }else{
            $conversations = new Conversation();
            $conversations->seeker_id = auth()->user()->seeker_id;
            $conversations->emp_id = $employer->emp_id;
            $conversations->save();            
        }
        return view('message.show', compact('conversations', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conversation $conversation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conversation $conversation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conversation $conversation)
    {
        //
    }
}
