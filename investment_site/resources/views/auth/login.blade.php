


<!doctype html>
<html class="no-js" lang="">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Primestocktradefx.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.html">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- jquery-->
    <script src="js/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="../sweetalert2/dist/sweetalert2.min.css">
</head>
<style>
    /* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}


.main{
    justify-content: center;
    align-items: center;
    display: flex;
    margin-top: 5%;


}
/* Add some content at the bottom of the video/page */
.content {
  position: relative;
  height: 30rem;

  max-width: 80%;
  /* margin-top: auto; */
  /* margin-left: 10%; */
  background: linear-gradient(45deg, #081a38e6 100%, #012c6ae6 100%);
  color: #f1f1f1;
  width: 80rem;

  justify-content: space-evenly;
  display: flex;
  flex-direction: row;
  align-items: center;
  display: flex;
  justify-content: center;

}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

input[type="text"]
{
    background: rgba(0, 0, 0, 0);
    /* border: none;
    outline: none; */
}
input[type="password"]
{
    background: rgba(0, 0, 0, 0);
    color: white
    /* border: none;
    outline: none; */
}
.form-control::placeholder {
        color: white;

      }

input{height:3rem;}
.carrier{
    border: 1px solid red;
    display: flex;
    width: ;

}

input[type="text"]:focus
{
         background: rgba(0, 0, 0, 0);
         border: none;
         outline-width: 0;
         color: white
}

</style>

<body>
    <video autoplay muted loop id="myVideo">
        <source src=" https://player.vimeo.com/external/539040004.sd.mp4?s=4f6e2a1a2165fadaac5946d0b4562aadce3edc5b&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
      </video>

    <div class="main"> <!-- Optional: some overlay text to describe the video -->
      <div class="content w-300 p-3">


        <div class="col-sm-4">
        <a href="/" class="fxt-logo"><img style="height: 100px;
            object-fit: contain;" src="https://media.istockphoto.com/id/1369738799/photo/blue-round-clock-on-white-background.jpg?b=1&s=170667a&w=0&k=20&c=aBwVsg0PbTUoBIeYAX7M7uhT47cEihCbfml1q-YWyls=" alt="Logo"></a>
          </div>

          <div class = "vertical"></div>




<div class=""><br>
                        <div class=""><br>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <h2 style="font-size: 27px; margin-bottom: 25px; text-transform: uppercase">Log into your
                                account</h2>

            <div class="col-sm-10">

                <input type="text" placeholder="Email" class="form-control w-85 p-3"  id="staticEmail" value="">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


            </div>
          </div>

          <div class="mb-3 row">
            <br>
            <div class="col-sm-10"> <br>
              <input type="password" placeholder="Password" class="form-control w-85 p-3" id="inputPassword" >
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

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>



                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-0">
                <button type="submit" class="btn btn-primary bg-dark">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
        <p class="mb-5 pb-lg-2" style="color: white;">Don't have an account? <a href="{{ route('register') }}"
            style="color: green; text-decoration: none;">Register here</a></p>
        <a href="#!" class="small text-muted" style="color: white">Terms of use.</a>
        <a href="#!" class="small text-muted" style="color: white">Privacy policy</a>
    </form>
      </div>
    </div>
    </div>

</div>
      <script>
        // Get the video
        var video = document.getElementById("myVideo");

        // Get the button
        var btn = document.getElementById("myBtn");

        // Pause and play the video, and change the button text
        function myFunction() {
          if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
          } else {
            video.pause();
            btn.innerHTML = "Play";
          }
        }
        </script>

 </body>
 </html>

