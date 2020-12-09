<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Emily</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial 'Poppins', sans-serif;

        }

        main {
            min-height: 100vh;
        }

    </style>
</head>

<body>

    <main class="d-flex flex-column align-items-center justify-content-center bg-primary">
        <div class="content shadow px-5 py-5 rounded card border-0 col-md-3">


            <h3 class="text-uppercase text-center font-weight-bold">SignIn</h3>
            <p class="text-center text-secondary">Go to the classroom area</p>

            <form action="{{ route('login') }}" method="POST" class="form my-2">
                @csrf

                <div class="form-group">
                    <label for="username">Username</label>
                    @error('name')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="username" value="{{ old('name') }}" autocomplete="username">
                </div>

                <div class="form-group">
                    <label for="password">password</label>
                    @error('password')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="password" autocomplete="current-password">
                </div>

                <button type="submit" class="btn btn-warning btn-block my-3">Signin</button>
            </form>
            <p class="mb-0 mt-2 text-center text-muted ">Don't have an account? <span class="ml-2"><a
                        href="/">signup</a></span></p>
        </div>
    </main>

</body>

</html>
