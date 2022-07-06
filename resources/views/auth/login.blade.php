{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href={{asset("assets/images/favicon.png")}} type="image/x-icon">

    <title>S-Park</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/bootstrap.css")}} />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- nice selecy -->
    <link rel="stylesheet" href={{asset("assets/css/nice-select.min.css")}}>

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css")}} />

    <!-- font awesome style -->
    <link href={{asset("assets/css/font-awesome.min.css")}} rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href={{asset("assets/css/style.css")}} rel="stylesheet" />
    <!-- responsive style -->
    <link href={{asset("assets/css/responsive.css")}} rel="stylesheet" />

</head>

<body>

<div class="hero_area">
    <div class="bg-box">
        <img src={{asset("assets/images/slider-bg.jpg")}} alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
            <span>
              S-Park
            </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <ul class="navbar-nav  ">--}}
{{--                        <li class="nav-item active">--}}
{{--                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="about.html"> About</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="pricing.html">Pricing</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="why.html">Why Us</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="testimonial.html">Testimonial</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <form class="form-inline">--}}
{{--                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">--}}
{{--                            <i class="fa fa-search" aria-hidden="true"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
        <div class="container">
            <div class="detail-box col-md-9 mx-auto px-0">
                <h1>
                    Finding Parking Lots Made Easy
                </h1>
{{--                <p>--}}
{{--                    Necessitatibus non ducimus hic dolor? Maiores itaque vitae sit blanditiis porro, a expedita ex. Totam vel sed obcaecati. Placeat maxime asperiores deleniti tenetur officiis laboriosam laborum a nihil quisquam quis!--}}
{{--                </p>--}}
            </div>
            <div class="find_form_container">
                <form method="POST" action={{ route('login') }}>
                    @csrf
                    <div class="form-row">
                        <div class="offset-md-2 col-md-4 px-0">
                            <div class="form-group ">
                                <label for="">Email</label>
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-0">
                            <div class="form-group">
                                <label for="">Password</label>
                                <div class="input-group ">

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="">
                            <span> Login </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end slider section -->
</div>

<!-- jQery -->
<script src={{asset("assets/js/jquery-3.4.1.min.js")}}></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
</script>
<!-- nice select -->
<script src={{asset("assets/js/jquery.nice-select.min.js")}}></script>
<!-- bootstrap js -->
<script src={{asset("assets/js/bootstrap.js")}}></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- custom js -->
<script src={{asset("assets/js/custom.js")}}></script>

</body>

</html>

