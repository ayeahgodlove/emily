@extends('layouts.app')

@section('content')
    <main class="d-flex flex-column align-items-center justify-content-center bg-primary">
        <div class="content shadow px-5 py-5 rounded card border-0 col-md-3">
            <h3 class="text-uppercase text-center font-weight-bold">Sign Up</h3>
            <p class="text-center text-secondary">Create your account now</p>
            <form action="{{ route('register') }}" method="POST" class="form my-2">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    @error('name')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="username"
                        value="{{ old('name') }}" autocomplete="username">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    @error('email')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                        value="{{ old('email') }}" autocomplete="email">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    @error('password')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="password" autocomplete="current-password">
                </div>

                <button type="submit" class="btn btn-warning btn-block my-3">Signup</button>
            </form>
            <p class="mb-0 mt-2 text-center text-muted ">Already have an account? <span class="ml-2"><a
                        href="/login">Login</a></span></p>
        </div>
    </main>
@endsection
