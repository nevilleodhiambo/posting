@extends('dashlayout/main')

@section('content')
<a href="{{route('profile.create')}}" class="btn btn-success">Create Profile</a>

<div class="container">
    <div class="row">
        @foreach($jobListings as $jobListing)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <h5 class="card-title" style="color: #3504bb">
                            {{ $jobListing->employer?->cname }} is Hiring - {{$jobListing->applicationCount()}}
                        </h5>
                    </div>
                                        <br>
                    <h5 class="card-title" style="color: #3504bb">{{ $jobListing->title }}</h5>
                    <p class="card-text">{{ $jobListing->description }}</p>
                    <h6 class="card-subtitle text-muted"><p><b>Skills Needed :</b></p>{{ $jobListing->skills }}</h6>

                    {{-- <a href="{{ route('job-listings.show', $jobListing->id) }}" class="btn btn-primary">View Details</a> --}}
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('application.apply', [$jobListing->id])}}" style="background: rgb(36, 130, 173); color:white;">Click To Apply</a>
                </div>
                {{-- <div class="d-flex justify-content-end"> --}}
                    <a href="{{route('conversations.show', $jobListing->employer->id)}}"><i class="fas fa-comment"> Chat With {{$jobListing->employer?->cname}}</i></a>
                {{-- </div> --}}
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $jobListings->links() }}
    </div>
</div>
@endsection
