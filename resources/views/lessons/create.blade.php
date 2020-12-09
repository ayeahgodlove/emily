@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create new lesson</h4>
            </div>
            <form action="{{ route('lessons.store') }}" method="POST" enctype="multipart/form-data" class="card-body">

                @csrf

                @include('lessons.form')
                <button class="btn btn-secondary" onclick="history.back()">cancel</button>
                <button type="submit" class="btn btn-primary px-4 py-2">save</button>
            </form>
        </div>
    </div>
@endsection
