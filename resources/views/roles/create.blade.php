@extends('dashlayout/main')

@section('content')

<div class="justify-content-center">
    
<form method="post" action="{{route('roles.store')}}">
    @csrf
    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Job Title</label>
      <input type="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Role Name" name="name">
    </div>

    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Permissions</label><br>
      @foreach ($permissions as $permission)
      <label id="{{$permission->id}}">{{$permission->name}}</label>
          <input type="checkbox" name="permission_ids[]" value="{{$permission->id}}"><br>
      @endforeach
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    

</div>
@endsection