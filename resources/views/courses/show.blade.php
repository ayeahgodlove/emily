@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('download', Storage::url($course->image)) }}" class="btn btn-sm btn-outline-danger"
                    download>download
                    image</a>
                <img src="{{ asset($course->image) }}" alt="course image" class="card-img-top img-fluid">
                <button class="btn btn-sm btn-info mt-3" onclick="history.back();">back</button>
                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-success mt-3">edit</a>
                <a href="{{ route('lessons.create', ['course' => $course->id]) }}"
                    class="btn btn-sm btn-warning mt-3">upload lesson</a>
                <a href="{{ route('lessons.index', ['course' => $course->id]) }}" class="btn btn-sm btn-info mt-3">manage
                    lesson</a>
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

                <div class="card mt-3">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Course lessons</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($course->lesson as $lesson)
                                <li class="list-group-item">
                                    <span>+ {{ $lesson->title }}</span><br>
                                    <video src="{{ $lesson->url }}" controls></video><br>
                                    <a href="{{ Storage::url($lesson->url) }}" class="btn btn-sm btn-outline-danger"
                                        download>download</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
