@extends('dashlayout/main')

@section('content')

<div class="justify-content-center">
    
<form method="post" action="{{route('jobs.store')}}">
    @csrf

   {{-- <div class="d-flex justify-content-end">
      <a href="{{route('jobs.show', $jobs->id)}}" class="btn btn-success">Go To Jobs</a>
   </div> --}}
    <input type="hidden" name="emp_id" value="{{ $emp_id }}">

    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Job Title</label>
      <input type="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Job Title" name="title">
    </div>
    <div class="form-group col-md-6">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description">
    </div>

    <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Qualification</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Qualifications needed for this Job" name="qualification">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Skills</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Skills needed for this Job" name="skills">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Company Info</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Information About Your COmpany" name="coinfo">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Salary</label>
        <input type="integer" class="form-control" id="exampleInputPassword1" placeholder="Salary" name="salary">
      </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    

</div>
@endsection