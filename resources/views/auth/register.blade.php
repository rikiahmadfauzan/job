<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        job vacancy
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="{{ asset('landing') }}/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/aos.css" />
    <link rel="stylesheet" href="{{ asset('landing') }}/css/style.css" />


</head>

<body>
    <div class="container-scroller py-5">
        <div class="row w-100 mx-0 py-5">
            <div class="col-lg-4 mx-auto shadow">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <div class="brand-logo">
                        {{-- <img src="{{ asset('dashboard') }}/images/logo.svg" alt="logo"> --}}
                    </div>
                    <h4>Hello! let's get started</h4>
                    <h6 class="font-weight-light">Siup in to continue.</h6>
                    @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                    <form class="pt-3" action="/create" method="post">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" name="name"
                                class="form-control form-control-lg" id="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" name="nik"
                                class="form-control form-control-lg" id="nik" placeholder="Nik">
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" name="email"
                                class="form-control form-control-lg" id="email" placeholder="Email">
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" name="password"
                                class="form-control form-control-lg" id="password" placeholder="Password">
                        </div>
                        {{-- <div class="form-group mt-3">
                            <input type="password" name="confirm_password" class="form-control form-control-lg" id="confirm_password"
                                placeholder="Confirm Password">
                        </div> --}}
                        <div class="mt-3">
                            <button type="submit" class="btn btn-sm mb-3 btn-primary col col-12">SIGN
                                UP</button>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                            Ready account? <a href="/login">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="{{ asset('landing') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing') }}/js/tiny-slider.js"></script>
    <script src="{{ asset('landing') }}/js/aos.js"></script>
    <script src="{{ asset('landing') }}/js/navbar.js"></script>
    <script src="{{ asset('landing') }}/js/counter.js"></script>
    <script src="{{ asset('landing') }}/js/custom.js"></script>

</body>

</html>
