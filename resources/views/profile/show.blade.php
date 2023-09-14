@extends('dashlayout/main')

@section('content')
<div class="container">
    <a href="{{route('alljobs')}}" class="btn btn-success">Jobs</a>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ $jobSeeker->user->name }}'s Profile</div> --}}
                <div class="card-body">
                    @if ($seeker_id === $profile->user_id)
                    <div class="d-flex justify-content-end">
                        
                        <a href="{{route('profile.edit', $profile->id)}}" class="btn btn-success">Edit Your Profile</a>

                    </div>
                    @endif

                    <div class="professional-summary">
                        <h3>Professional Summary</h3>
                        {{-- @foreach ($profiles as $item) --}}
                        <p>{{ $profile->summary }}</p>
                    </div>
                        {{-- @endforeach --}}
                        

                    <div class="work-experience">
                        <h3>Work Experience</h3>
                        {{-- @foreach ($profiles as $profile) --}}
                            <h4>{{ $profile->job_title }} - {{ $profile->company }}</h4>
                            <p>{{ $profile->start_date }} - {{ $profile->end_date }}</p>
                            <p>{{ $profile->description }}</p>
                        {{-- @endforeach --}}
                    </div>

                    <div class="education">
                        <h3>Education</h3>
                        {{-- @foreach ($profiles as $profile) --}}
                            <h4>{{ $profile->degree }} in {{ $profile->major }}</h4>
                            {{-- <p>{{ $profile->institution }}</p> --}}
                            {{-- <p>{{ $profile->graduation_date }}</p> --}}
                        {{-- @endforeach --}}
                    </div>

                    <div class="skills">
                        <h3>Skills</h3>
                        <ul>
                            {{-- @foreach ($profiles as $skill) --}}
                                <li>{{ $profile->skills }}</li>
                            {{-- @endforeach --}}
                        </ul>
                    </div>

                    <div class="projects">
                        <h3>Projects and Portfolios</h3>
                        {{-- @foreach ($profiles as $project) --}}
                            <h4>{{ $profile->project_name }}</h4>
                            <p>{{ $profile->description_name }}</p>
                        {{-- @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
