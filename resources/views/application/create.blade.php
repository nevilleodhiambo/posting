@extends('dashlayout/main')

@section('content')

<div class="justify-content-center">
    
<form method="post" action="{{route('application.store')}}" enctype="multipart/form-data">
    @csrf

     <input type="hidden" name="job_id"  value="{{ $job_id }}">
    <input type="hidden" name="seeker_id"  value="{{ $seeker_id }}"> 


    <div class="form-group">
      <label for="exampleInputEmail1">Resume</label>
      <input type="file" class="form-control" id="exampleInputEmail1"  name="resume">
    </div>

    <div>
        <label for="exampleInputEmail1">Cover Letter</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="cover_letter">
      </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
     

</div>
@endsection