<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Conversation;
use App\Models\Job;
use App\Models\Message;
use App\Models\User;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Conversation $conversation)
    {
        // $sender = auth()->user()->employer_id;
        // $recipient = auth()->user()->seeker_id;

        // $auth = auth()->user()->employer_id;
        // return $auth;
        // $messages = $conversation->messages;

        $users = DB::table('users')->select('*')->get(); //retrieving all records from a table
        $users1 = DB::table('applications') ->select('cover_letter','resume','seeker_id')->get();
        $application = DB::table('applications')->count();
        // return $users1;
        $id = DB::table('users')->where('id', '>', 1)->get();
        // $table = DB::table('users')->get();
        $table = DB::table('users')->where('id', 2)->exists(); //boolean expresiion to determine if a row exists or not

        $select = DB::table('users')->select('name')->get();

        $raw = DB::table('users')->where('id', '>=', 2)->get();
        //or where clause
        $or = DB::table('users')->where('id',2)->orWhere('employer_id', null)->get();
        
        // $or1 = DB::table('users')->select('*')->get();
        // $or1 = DB::table('users')->where('employer_id', 3)->orwhere(function (Builder $query){
        //     $query('id', 1);
        //     })->get();

            //between
            $between = DB::table('users')->whereBetween('id', [1, 3])->get();

            //Not Null
             $null = DB::table('users')->whereNull('employer_id')->first();

             //ordernig records by ascending or descending using asc or desc
             $ordering = DB::table('users')->orderBy('name', 'asc')->get();
             //ordering columns using latest and oldest 
             $latest = DB::table('users')->latest()->get();
             $application = Application::find(1);
            //  foreach($applications as $application){
                return $application->job;
            //  }
        // return $application;


        $m = Message::with('conversation')->where('conversation_id', auth()->user()->id)->first();
                return $m;
        return view('message/index', compact('conversation', 'messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $conversation)
    {
        $seeker_id = auth()->user()->seeker_id;

        $convsersation = Conversation::where('seeker_id',$seeker_id)->where('emp_id',$request->emp_id)->first();

        if(!$convsersation){

            $convsersation = new Conversation();
            $convsersation->seeker_id = $seeker_id;
            $convsersation->emp_id = $request->emp_id;
            $convsersation->save();

        }

        $message = new Message();
        $message->conversation_id = $conversation;
        $message->user_id = auth()->user()->id;
        $message->content = $request->input('content');
        // $message->emp_id = $conversation;
        // return $request->all();
        // $conversation->messages()->save($message);
        $message->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($userId)
    {
        
        // $recipient = User::findOrFail($userId);

        // $messages = Message::where(function ($query) use ($userId) {
        //     $query->where('sender_id', Auth::id())
        //         ->where('recipient_id', $userId);
        // })->orWhere(function ($query) use ($userId) {
        //     $query->where('sender_id', $userId)
        //         ->where('recipient_id', Auth::id());
        // })->orderBy('created_at', 'asc')->get();

        // return view('message/show', compact('recipient', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message = Message::where('id', $id)->first();
        $message->delete();
        return redirect()->back();
    }
}
