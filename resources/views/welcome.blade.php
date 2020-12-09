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

        header {
            min-height: 66vh;
            position: relative;
        }

        header img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(8px) multiply(1px);
        }

        .title {
            font-family: "Arial", 'Poppins'Lato, "Source Sans Pro";
            text-shadow: 0 1px 10px rgba(0, 0, 0, 0.65),
                1px 5px 18px rgba(0, 0, 0, 0.234),
                5px 13px 28px rgba(0, 0, 0, 0.134);
        }

        .categories {
            padding: 10rem 0 !important;
        }

        .choose img {
            height: 50rem;
            object-fit: cover;
        }

        @media screen and (min-width: 678px) {
            .title {
                font-size: 6rem;
            }
        }

    </style>
</head>

<body>

    <header class="d-flex flex-column justify-content-center py-5">
        <img src="{{ asset('images/yellow-wall.jpg') }}" alt="background photo">
        <div class="container">
            <div class="row my-lg-5">
                <div class="col-md-6 col-lg-8 header-content text-white text-center text-lg-left">
                    <h1 class="title text-white">Learning from anywhere</h1>
                    <p class="lead">Pick just the right course of interest and start today</p>
                    <a href="{{ route('register') }}" class="btn btn-lg btn-light shadow-sm px-5 py-3">Signup Today</a>
                </div>

                <div class="col-md-6 col-lg-4 mt-5 mt-lg-0">
                    <div class="shadow px-5 py-5 rounded card border-0">
                        <h3 class="text-uppercase text-center font-weight-bold">Sign Up</h3>
                        <p class="text-center text-secondary">Create your account now</p>
                        <form action="{{ route('register') }}" method="POST" class="form my-2">
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
                                <label for="email">Email address</label>
                                @error('email')
                                    <small class="text-danger d-block">{{ $message }}</small>
                                @enderror
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{ old('email') }}" autocomplete="email">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                @error('password')
                                    <small class="text-danger d-block">{{ $message }}</small>
                                @enderror
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password" autocomplete="current-password">
                            </div>

                            <button type="submit" class="btn btn-warning btn-block my-3">Signup</button>
                        </form>
                        <p class="mb-0 mt-2 text-center text-muted ">Already have an account? <span class="ml-2"><a
                                    href="/login">Login</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </header>


    {{-- categories --}}
    <div class="py-5 bg-white categories">
        <div class="container row mx-auto my-auto">
            <div class="col-md-3">
                <div class="card align-items-center justify-content-center bg-primary">
                    <div class="card-body py-4">
                        <h5 class="text-white mb-0">Business</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card align-items-center justify-content-center bg-success">
                    <div class="card-body py-4">
                        <h5 class="text-white mb-0">Technology</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card align-items-center justify-content-center bg-info">
                    <div class="card-body py-4">
                        <h5 class="text-white mb-0">Agriculture</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card align-items-center justify-content-center bg-danger">
                    <div class="card-body py-4">
                        <h5 class="text-white mb-0">Mathematics</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card align-items-center justify-content-center bg-warning">
                    <div class="card-body py-4">
                        <h5 class="text-white mb-0">Health</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card align-items-center justify-content-center bg-dark">
                    <div class="card-body py-4">
                        <h5 class="text-white mb-0">Programming</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card align-items-center justify-content-center bg-primary">
                    <div class="card-body py-4">
                        <h5 class="text-white mb-0">Business</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card align-items-center justify-content-center bg-secondary">
                    <div class="card-body py-4">
                        <h5 class="text-white mb-0">And more</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- recent courses --}}
    <div class="container py-5 my-lg-5">
        <h3 class="mb-5 text-center">Recent courses</h3>
        <div class="row align-items-stretch">
            {{-- card --}}
            <div class="col-md-3">
                <div class="card course-card">
                    <img src="{{ asset('images/red.jpg') }}" alt="red" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold text-danger">Learning to write effectively</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolorem aperiam impedit asperiores
                        neque? Explicabo praesentium dolorem in quia deserunt?...
                    </div>
                </div>
            </div>

            {{-- card --}}
            <div class="col-md-3">
                <div class="card course-card">
                    <img src="{{ asset('images/mate-book.jpg') }}" alt="red" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold text-danger">Learning to write effectively</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolorem aperiam impedit asperiores
                        neque? Explicabo praesentium dolorem in quia deserunt?...
                    </div>
                </div>
            </div>

            {{-- card --}}
            <div class="col-md-3">
                <div class="card course-card">
                    <img src="{{ asset('images/microscope.jpg') }}" alt="red" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold text-danger">social media marketting</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolorem aperiam impedit asperiores
                        neque? Explicabo praesentium dolorem in quia deserunt?...
                    </div>
                </div>
            </div>

            {{-- card --}}
            <div class="col-md-3">
                <div class="card course-card">
                    <img src="{{ asset('images/fluid.jpg') }}" alt="red" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold text-danger">computer graphics</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolorem aperiam impedit asperiores
                        neque? Explicabo praesentium dolorem in quia deserunt?...
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 my-lg-5">
        <div class="row choose">
            <div class="col-md-4 ml-auto">
                <img src="{{ asset('images/laptop.jpg') }}" alt="latptop with a small board with text on it"
                    class="img-fluid img-thumbnail" style="height: 20rem">
            </div>

            <div class="col-md-4 mr-lg-auto align-self-center">
                <h1>Join thousands of learners</h1>
                <p class="lead">Thousands and thousands of learners are growing their skills every day with our currated
                    courses. It's
                    time for you to take action now.</p>
                <a href="{{ route('login') }}" class="btn btn-lg px-5 py-3 btn-warning">Login now</a>
            </div>
        </div>
    </div>

</body>

</html>
