
@extends('dashlayout/main')

@section('content')
    <h1>Conversations</h1>

    

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Messages</th>
            <th scope="col">Content</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($conversations->messages as $message)
            <th scope="row">1</th>
            <td>{{ $message->content }}  <span style="color:blue">from, {{$conversations->seeker->fname}}</span> <br></td>
            </tr>
            @endforeach
         
        </tbody>
      </table>
@endsection 
