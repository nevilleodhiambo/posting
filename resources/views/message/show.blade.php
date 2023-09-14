
@extends('dashlayout/main')

@section('content')
    <h1>Conversation between {{ $conversations->job->coinfo }} and {{ auth()->user()->name }}</h1>

    <form method="POST" action="{{ route('messages.store', $conversations->id) }}">
        @csrf
        <input type="hidden" name="emp_id" value="{{ $conversations->emp_id }}">

        <div class="form-group col-md-5">
            <label>Post</label>
            <textarea class="form-control" placeholder="Type your message here" required name="content" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
    </form>
    
    <div class="messages">
        @foreach ($messages as $message)
            <p><strong>{{ $message->user->name }}:</strong> {{ $message->content }}</p>
        @endforeach
    </div>

   
@endsection

