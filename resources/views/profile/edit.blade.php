@extends('dashlayout/main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Job Seeker Profile</div>
                <div class="card-body">
                    <form action="{{ route('profile.update', $profile->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Professional Summary -->
                  <input type="hidden" name="seeker_id"  value="{{ $seeker_id }}"> 

                        <div class="form-group">
                            <label for="professional_summary">Summary</label>
                            <textarea class="form-control" name="summary" rows="4">{{$profile->summary}}</textarea>
                        </div>

                        <!-- Work Experience -->
                        <div class="form-group">
                            <label for="work_experience">Work Experience</label>
                            <input type="text" class="form-control" placeholder="Job Title" name="job_title" value="{{$profile->job_title}}">
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <div class="form-group">
                            <label for="work_experience">Company</label>
                            <input type="text" class="form-control" namejobs="" placeholder="Job Title" name="company" value="{{$profile->company}}">
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <div class="form-group">
                            <label for="work_experience">Start date</label>
                            <input type="date" class="form-control"  placeholder="Job Title" name="start_date" value="{{$profile->start_date}}">
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <div class="form-group">
                            <label for="work_experience">End Date</label>
                            <input type="date" class="form-control" namejobs="" name="end_date" placeholder="Job Title" value="{{$profile->end_date}}">
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <!-- Education -->
                        <div class="form-group">
                            <label for="education">Qualification</label>
                            <input type="text" class="form-control" name="degree" placeholder="Qualification" value="{{$profile->degree}}">

                        </div>

                        <div class="form-group">
                            <label for="education">Major</label>
                            <input type="text" class="form-control" name="major" placeholder="Major" value="{{$profile->major}}">

                        </div>

                        <div class="form-group">
                            <label for="work_experience">Graduation Date</label>
                            <input type="date" class="form-control" namejobs="" name="graduation_date" placeholder="Job Title" value="{{$profile->graduation_date}}">
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <!-- Skills -->
                        <div class="form-group">
                            <label for="skills">Skills</label>
                            <!-- Allow job seekers to enter comma-separated skills -->
                            <input type="text" class="form-control" name="skills" placeholder="Skill 1, Skill 2, ..." value="{{$profile->skills}}">
                        </div>

                        <!-- Projects -->
                        <div class="form-group">
                            <label for="projects">Projects</label>
                            <input type="text" class="form-control" name="project_name" placeholder="Project Title" value="{{$profile->project_name}}">
                            
                        </div>

                        <div class="form-group">
                            <label for="projects">Projects Description</label>
                            <input type="text" class="form-control" name="project_description" placeholder="Projects Descriptions" value="{{$profile->project_description}}">
                            
                        </div>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection