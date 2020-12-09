@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset($course->image) }}" alt="course image" class="card-img-top img-fluid">
                <button class="btn btn-sm btn-info mt-3" onclick="history.back();">back</button>
                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-success mt-3">edit</a>
                <a href="{{ route('lessons.create', ['course' => $course->id]) }}"
                    class="btn btn-sm btn-warning mt-3">upload lesson</a>
                <a href="{{ route('lessons.index', ['course' => $course->id]) }}" class="btn btn-sm btn-info mt-3">manage
                    lesson</a>
            </div>
            <div class="col-md-8">
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
                                    <a href="{{ route('lessons.destroy', $lesson->id) }}"
                                        class="btn btn-sm btn-danger">delete</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
