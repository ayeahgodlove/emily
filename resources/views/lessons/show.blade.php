@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset($course->image) }}" alt="course image" class="card-img-top img-fluid">
                <button class="btn btn-sm btn-info mt-3" onclick="history.back();">back</button>
                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-success mt-3">edit</a>
                <a href="{{ route('videos.create', $course->id) }}" class="btn btn-sm btn-success mt-3">edit</a>
            </div>
            <div class="col-md-8">
                <div class="card mt-3 mt-lg-0">
                    <div class="card-header">
                        <h4 class="card-title">{{ $course->title }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h5>Instructor</h5>
                                <img src="https://picsum.photos/40" class="rounded rounded-circle mr-1" alt="">
                                {{ $course->user->name }}
                            </li>
                            <li class="list-group-item">
                                <h5>Difficulty</h5>
                                {{ $course->level }}
                            </li>
                            <li class="list-group-item">
                                <h5>Course details</h5>
                                {{ $course->description }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
