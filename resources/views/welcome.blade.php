<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BTRH Task</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="antialiased">

    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container justify-content-end">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ route('profile.show', ['id'=>Auth::user()]) }}"
                                        class="nav-link text-decoration-none float-md-end float-lg-end float-xl-end float-xxl-end">
                                        {{__('Profile')}}
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}"
                                        class="nav-link text-decoration-none float-md-end float-lg-end float-xl-end float-xxl-end">
                                        Login
                                    </a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}"
                                            class="nav-link text-decoration-none float-md-end float-lg-end float-xl-end float-xxl-end">
                                            Register
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        @endif

                    </ul>
                </div>
            </div>
        </nav>

    </section>

    <section>
        <div class="row m-0 justify-content-center">
            <div class="col-4 m-4">
                <a href="/" style=" cursor: pointer;">
                    <img src="{{ asset('assets/img/logo.jpg') }}" alt="logo" class="logo w-100" id="logo" />
                </a>
            </div>
            <div class="col-12 text-center pt-3 pb-3">
                <h1>
                    BTRH Engineer Selections Task
                </h1>
            </div>
        </div>

    </section>

</body>

</html>
