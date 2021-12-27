{{-- @extends('layouts.frontend')
@section('content') --}}
<!--Navbar -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title') | Fabcart
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container">

          <!-- Brand -->
          <a class="navbar-brand waves-effect" href="http://127.0.0.1:8000/" >
            {{-- target="_blank" --}}
            <strong class="blue-text">FabCart</strong>
          </a>

          <!-- Collapse -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link waves-effect" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">About Fab cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">Offer Item</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free shipping</a>
              </li>
            </ul>


            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
              <li class="nav-item">
                <a class="nav-link waves-effect">
                  <span class="badge red z-depth-1 mr-1"> 1 </span>
                  <i class="fas fa-shopping-cart"></i>
                  <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                </a>
              {{-- </li>
              <li class="nav-item">
                <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"
                  target="_blank">
                  <i class="fab fa-github mr-2"></i>MDB GitHub
                </a>
              </li> --}}
            </li>
            {{-- Authentication --}}
            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>

        @endguest
            </ul>

          </div>

        </div>
      </nav>

</body>
</html>
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="https://cdn.dribbble.com/users/224512/screenshots/2995705/eshop-logo.jpg" width="50" height="45"  class="d-inline-block align-top" alt="">
        Fabcart
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </nav> --}}


  <!--/.Navbar -->

{{-- @endsection --}}
