@extends('dashlayout/main')

@section('content')

<table class="table">
    <thead>
        <div class="d-flex justify-content-end">
            <a href="{{route('roles.create')}}" class="btn btn-primary">Add A Role</a>
        </div>
        
      <tr>
        <th scope="col">#</th>
        <th scope="col">Role Name</th>
        <th scope="col">Roles</th>
        <th scope="col">Status</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($roles as $role)
        <th scope="row">{{$loop->iteration}}</th>
            <td>{{$role->name}}</td>
            <td>
                <ul>
                    @foreach ($role->permissions as $permission)
                    <li>{{$permission->name}}</li>
                    @endforeach   
                </ul>
            </td>
               
        <td>
          <a href="{{route('role.edit', $role->id)}}" class="btn btn-small btn-success">Edit</a>
          <form method="POST" action="{{route('role.destroy', $role->id)}}">
            @csrf 
            @method("delete")
            <input type="submit" class="btn btn-small btn-danger" value="Delete">
            </form>
        </td>
      </tr>
        @endforeach
       

    </tbody>
  </table>

    
@endsection