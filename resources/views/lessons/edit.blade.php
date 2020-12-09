@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create new lesson</h4>
            </div>
            <form action="{{ route('lessons.update', $lesson->id) }}" method="POST" enctype="multipart/form-data"
                class="card-body">

                @csrf
                @method('PATCH')

                @include('lessons.form')

                <button class="btn btn-secondary px-4 py-2" onclick="history.back()">back</button>
                <button type="submit" class="btn btn-success px-4 py-2">update</button>
            </form>
        </div>
    </div>
@endsection
