<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Emily</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial 'Poppins', sans-serif;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-4 shadow">
        <a class="navbar-brand bg-primary" href="/">Claz</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">courses</a>
                </li>
                <li class="nav-item dropdown dropdown-right">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <form class="form" id="logout-form" method="POST" action="{{ route('logout') }}">@csrf</form>

    <main>
        <div class="container">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        @yield('content')
    </main>


    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $('#navId a').click(e => {
            e.preventDefault();
            $(this).tab('show');
        });

    </script>
</body>

</html>
