@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Primewaretrades.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.html">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- jquery-->
    <script src="js/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="../sweetalert2/dist/sweetalert2.min.css">
</head>
<style>
    .kiksksk992mmw {
        background: #01123c !important;
        color: #fff !important;
    }
    input[type="email"]
{
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid white;
    outline: none;
    color: white;
}
input[type="email"]:focus{
    background-color: transparent;
    border: 2px solid white;
    color: white
}

input[type="password"]
{
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid white;
    outline: none;
    color: white;
}
input[type="password"]:focus{
    background-color: transparent;
    border: 2px solid white;
    color: white;
}

::placeholder {
  color: yellow;
  opacity: 1; /* Firefox */
}


</style>

<body style="justify-content: center; align-items:center;">
    <video style="position: absolute; z-index: 0; width: 100%; height: 100vh; top: 0px; left: 0px; overflow: hidden; opacity: 1;         user-select: none; display:block !important; object-fit: cover !important" autoplay muted loop playsinlines src="https://dm0qx8t0i9gc9.cloudfront.net/watermarks/video/4ZrVLdVKeijzurndz/videoblocks-business-augmented-reality-and-financial-technology-concept-businessman-with-vr-headset-and-virtual-screen-mining-cryptocurrency-at-office_sbuwsftgm__41b9383fd80bda7e004bdb63a57440c4__P360.mp4" poster="h4-slider-1-background-img.jpg"></video>

    <section class="" style="position: relative; margin-top:4%; max-width:100%;">
        <!-- data-bg-image="site-images/h4-slider-1-background-img.jpg" -->
        <div class="overlay" style="position: absolute; z-index: 0; width: 100%; height: 100%; top: 0px; left: 0px; overflow: hidden; opacity: 1; background: #00000063;">
        </div>

        <!-- linear-gradient(45deg, #528BC9 0%, #54ceff 100%);  -->

        <!-- Video Area Start Here -->
        <div class="container" style="width: auto; max-width: 80%; border:2px solid white !important">

            <div class="row " style="background: linear-gradient(45deg, #012c6ae6 100%, #012c6ae6 100%); justify-content:center; align-items:center; height:30rem; padding-top: 30px; width:100%; padding-bottom: 30px; display:flex;  ">



<div class="container" style=" height:90%;">

    <div class="row justify-content-center" style="height:90%;">
        <div class="col-lg-3">
            <div class="fxt-header" style="border: 2px solid white;">
                <a href="/" class="fxt-logo"><img style="height: 250px;
    object-fit: contain;" src="{{ asset('/storage/images/63Om7c9wvaZtut6izJvgS9hjW9NM3e6wBTkwYgO3.jpg') }}" alt="Logo"></a>
            </div>
        </div>



        <div class="col-md-5" style="border-left: 1px solid white;">
            <div class="card" style=" width:100%; height:100%;; justify-self:center; background-color:transparent;">
                <div class="card-header">
                    <h2 style="font-size: 27px; margin-bottom: 25px;color:white; text-transform: uppercase">Log into your
                        account</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">


                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">


                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Imagesloaded js -->
<script src="js/imagesloaded.pkgd.min.js"></script>
<!-- Validator js -->
<script src="js/validator.min.js"></script>
<!-- Custom Js -->
<script src="js/main.js"></script>


<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!-- Validator js -->

<script src="js/ui-alerts.min.js"></script>
<script src="../sweetalert2/dist/sweetalert2.min.js"></script>
</body>



@endsection
