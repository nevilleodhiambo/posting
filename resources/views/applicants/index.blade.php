@extends('dashlayout/main')

@section('content')

    @foreach ($jobs as $job)
        {{$job->title }} <br>
              @if ($job->application)
        @foreach ($job->application as $application)
            {{$application->resume }} <br>
            <img src="{{$application->resume }}" alt="" srcset="">
            {{$application?->seeker->fname }} <br>
            
        @endforeach
        @endif
    @endforeach
@endsection