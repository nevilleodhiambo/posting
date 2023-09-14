@extends('dashlayout/main')

@section('content')

<table class="table">
    <thead>
        <div class="d-flex justify-content-end">
            <a href="{{route('jobs.create')}}" class="btn btn-success">Add Job Posting</a>
        </div>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Qualification</th>
        <th scope="col">Skills</th>
        <th scope="col">Company Info</th>
        <th scope="col">Salary</th>
        <th scope="col">Application</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($jobs as $job)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$job->title}}</td>
        <td>{{$job->description}}</td>
        <td>{{$job->qualification}}</td>
        <td>{{$job->skills}}</td>
        <td>{{$job->coinfo}}</td>
        <td>{{$job->salary}}</td>
        <td>{{$job->app_count}}</td>

        <td>{{ $job->is_approved ? 'Approved' : 'Pending' }}</td>
        <td>
            @if (!$job->is_approved)
                <form action="{{ route('admin.job-listings.approve', $job->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-small btn-success">Approve</button>
                </form>
                <form action="{{ route('admin.job-listings.reject', $job->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-small btn-warning">Reject</button>
                </form>
            @endif
        </td>

        <td>
            <a href="{{route('jobs.edit', $job->id)}}" class="btn btn-small btn-success">Edit</a>
            <form method="POST" action="{{route('jobs.destroy', $job->id)}}">
                @csrf
                @method('delete')
                    <input type="submit" class="btn btn-small btn-danger" value="Delete">
            </form>
        </td>
      </tr>
        @endforeach
       

    </tbody>
  </table>

    
@endsection