@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1>Hey..! Welcome to the course area</h1>
            <p class="lead">Feel free to start learning whatever you want</p>
            <a href="{{ route('course.create') }}" class="btn btn-primary px-3 py-2">+ create new course</a>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="row justify-content-center">
            @foreach ($courses as $course)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset($course->image) }}" alt="course image" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h4 class="card-title">{{ $course->title }}</h4>
                            <p class="card-text">{{ Str::words($course->description, 20) }}</p>
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-success">see more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
