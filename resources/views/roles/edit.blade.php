@extends('dashlayout/main')

@section('content')

<div class="justify-content-center">
    
<form method="post" action="{{route('roles.update', $role->id)}}">
    @csrf
    @method('put')
    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Job Title</label>
      <input type="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Role Name" name="name" value="{{$role->name}}">
    </div>

    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Permissions</label><br>
      @foreach ($permissions as $permission)
      <label for="{{$permission->id}}">{{$permission->name}}</label>
      <input type="checkbox" name="permission_ids[]" value="{{$permission->id}}" id="{{$permission->id}}">
          <br>
      @endforeach
    </div>
   
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
    

</div>
@endsection