@extends('dashlayout/main')

@section('content')

<table class="table">
    <thead>
        
      <tr>
        <th scope="col">#</th>
        <th scope="col">Employer Name</th>
        <th scope="col">Company</th>
        <th scope="col">Status</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($employers as $employer)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$employer->fname}}</td>
        <td>{{$employer->cname}}</td>
       <td>{{$employer->is_status ?  'Enable' : 'Disable'}}</td>
        <td>
          @if (!$employer->is_status)
          <form method="POST" action="{{route('admin.company.enable', $employer->id)}}">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-small btn-primary">Enable</button>
          </form>
          <form  method="POST" action="{{route('admin.company.disable', $employer->id)}}">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-small btn-warning">Disable</button>
            
          </form>
              
          @endif
        </td>
      </tr>
        @endforeach
       

    </tbody>
  </table>

    
@endsection