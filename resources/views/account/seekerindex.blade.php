@extends('dashlayout/main')

@section('content')

<table class="table">
    <thead>
        
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Qualification</th>
        <th scope="col">Field of Application</th>
        <th scope="col">Mobile</th>
        <th scope="col">Email</th>
        <th scope="col">Gender</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($seekers as $seeker)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$seeker->fname}}</td>
        <td>{{$seeker->lname}}</td>
        <td>{{$seeker->qualification}}</td>
        <td>{{$seeker->job}}</td>
        <td>{{$seeker->number}}</td>
        <td>{{$seeker->email}}</td>
        <td>{{$seeker->gender}}</td>
       
      </tr>
        @endforeach
       

    </tbody>
  </table>

    
@endsection