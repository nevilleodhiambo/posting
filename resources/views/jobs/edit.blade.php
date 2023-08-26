@extends('dashlayout/main')

@section('content')

<div class="justify-content-center">
    
<form method="POST" action="{{route('jobs.update', $job->id)}}">
    @csrf
    @method('put')
    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Job Title</label>
      <input type="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Job Title" name="title" value="{{$job->title}}">
    </div>
    <div class="form-group col-md-6">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description" value="{{$job->description}}">
    </div>

    <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Qualification</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Qualifications needed for this Job" name="qualification" value="{{$job->qualification}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Skills</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Skills needed for this Job" name="skills" value="{{$job->skills}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Company Info</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Information About Your COmpany" name="coinfo" value="{{$job->coinfo}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Salary</label>
        <input type="integer" class="form-control" id="exampleInputPassword1" placeholder="Salary" name="salary" value="{{$job->salary}}">
      </div>
   
    <button type="Update" class="btn btn-primary">Submit</button>
  </form>
    

</div>
@endsection