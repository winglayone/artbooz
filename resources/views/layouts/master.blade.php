<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ArtBooz</title>
    <link href="{{ asset('img/Icon.png') }}" rel='shortcut icon'>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Texturina:wght@100&display=swap" rel="stylesheet">
</head>
<body>
  <div id="app">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#"><img class="logogambar" src="../img/Logo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" style="color:white;" href="#"><img class="iconnav" src="../img/Profile.png">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="iconnav" src="../img/Museum.png">Museum
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Music Art</a>
                  <a class="dropdown-item" href="#">Fine Arts</a>
                  <a class="dropdown-item" href="#">Dance</a>
                  <a class="dropdown-item" href="#">Literary Arts</a>
                  <a class="dropdown-item" href="#">Theatrical Art</a>
                </div>
              </li>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a style="color:white;" class="nav-link" href="{{ route('login') }}"><img class="iconnav" src="../img/Login.png">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a style="color:white;" class="nav-link" href="{{ route('register') }}"><img class="iconnav" src="../img/Register.png">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
          </div>
        </nav>
        <div class="row">
            @yield('content')
        </div>
      </div>
  </div>
  </div>
</div>
<footer class=" text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div style="border-right:1px solid black;" class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 style="margin-top:20px;" class="text-uppercase"><img class="logogambar" src="../img/Logo.png"></h5>

        <p class="text-justify">
          Artbooz merupakan aplikasi yang dipakai para seniman
          untuk menyalurkan seni kreativitasnya, baik itu musik, seni rupa,
           seni teater, seni tari. Namun bukan hanya seniman saja orang awam pun
           dapat ikut berpartisipasi, dijamin bakal BOOZ in mood kamu.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div style="border-right:1px solid black;" class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="h5footer text-uppercase" style="margin-top:20px;">Social Media</h5>

        <ul class="linka text-left list-unstyled mb-0">
          <li>
            <a href="#!" style="padding:10px;" class="linka text-dark"><img class="iconnavigate" src="../img/Instagram.png">Instagram</a>
          </li>
          <li>
            <a href="#!" style="padding:10px;" class="linka text-dark"><img class="iconnavigate" src="../img/Facebook.png">Facebook</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="h5footer text-uppercase" style="margin-top:20px;">Documentation</h5>

        <ul class="text-left list-styled mb-0">
          <li>
            <a href="#!" style="padding:10px;" class="linka text-dark">FAQ</a>
          </li>
          <li>
            <a href="#!" style="padding:10px;" class="linka text-dark">GUIDE</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2)">
    &copyArtBooz Projek Company <script>document.write(new Date().getFullYear())</script>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
