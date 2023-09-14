
@extends('dashlayout/main')

@section('content')
    <h1>Conversation with {{ $employer_id->title }}</h1>

    <div class="messages">
        @foreach ($messages as $message)
            <p><strong>{{ $message->sender->name }}:</strong> {{ $message->content }}</p>
        @endforeach
    </div>

    <form method="POST" action="{{ route('messages.send', $recipient->id) }}">
        @csrf
        <textarea name="content" placeholder="Type your message here" required></textarea>
        <button type="submit">Send</button>
    </form>
@endsection
