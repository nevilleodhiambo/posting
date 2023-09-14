@extends('dashlayout/main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Job Seeker Profile</div>
                <div class="card-body">
                    <form action="{{ route('profile.store') }}" method="POST">
                        @csrf

                        <!-- Professional Summary -->
                  <input type="hidden" name="seeker_id"  value="{{ $seeker_id }}"> 

                        <div class="form-group">
                            <label for="professional_summary">Professional Summary</label>
                            <textarea class="form-control" name="summary" rows="4"></textarea>
                        </div>

                        <!-- Work Experience -->
                        <div class="form-group">
                            <label for="work_experience">Work Experience</label>
                            <input type="text" class="form-control" placeholder="Job Title" name="job_title">
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <div class="form-group">
                            <label for="work_experience">Company</label>
                            <input type="text" class="form-control" namejobs="" placeholder="Job Title" name="company">
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <div class="form-group">
                            <label for="work_experience">Start date</label>
                            <input type="date" class="form-control"  placeholder="Job Title" name="start_date">
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <div class="form-group">
                            <label for="work_experience">End Date</label>
                            <input type="date" class="form-control" namejobs="" name="end_date" placeholder="Job Title" >
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <!-- Education -->
                        <div class="form-group">
                            <label for="education">Degree</label>
                            <input type="text" class="form-control" name="degree" placeholder="Job Title" >

                        </div>

                        <div class="form-group">
                            <label for="education">Major</label>
                            <input type="text" class="form-control" name="major" placeholder="Job Title" >

                        </div>

                        <div class="form-group">
                            <label for="work_experience">Graduation Date</label>
                            <input type="date" class="form-control" namejobs="" name="graduation_date" placeholder="Job Title" >
                            <!-- Repeat this field for company, start_date, end_date, description, etc. -->
                        </div>

                        <!-- Skills -->
                        <div class="form-group">
                            <label for="skills">Skills</label>
                            <!-- Allow job seekers to enter comma-separated skills -->
                            <input type="text" class="form-control" name="skills" placeholder="Skill 1, Skill 2, ...">
                        </div>

                        <!-- Projects -->
                        <div class="form-group">
                            <label for="projects">Projects</label>
                            <input type="text" class="form-control" name="project_name" placeholder="Project Title">
                            
                        </div>

                        <div class="form-group">
                            <label for="projects">Projects Description</label>
                            <input type="text" class="form-control" name="project_description" placeholder="Project Title">
                            
                        </div>

                        <button type="submit" class="btn btn-primary">Create Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection