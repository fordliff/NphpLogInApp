<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LogInPro') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
li.right{ text-align: right;}
</style>
</head>
<body>

    <div id="app">
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('home')}}">LogIn Pro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <i class="fa fa-home"></i>
                Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-envelope-o">
                  <span class="badge badge-danger">11</span>
                </i>
                Link
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">
                <i class="fa fa-envelope-o">
                  <span class="badge badge-warning">11</span>
                </i>
                Disabled
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope-o">
                  <span class="badge badge-primary">11</span>
                </i>
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
         <!-- <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-bell">
                  <span class="badge badge-info">11</span>
                </i>
                Test
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-globe">
                  <span class="badge badge-success">11</span>
                </i>
                Test
              </a>
            </li>
            <li></li>
            <li></li>
          </ul> -->
          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <ul>
            <li></li>
            <li></li>
          </ul> 
          <ul class="navbar-nav ">
             <!-- Authentication Links -->
             @guest
             @if (Route::has('login'))
                 <li  style=" text-align: right;" class="nav-item">
                     <a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
             @endif

             @if (Route::has('register'))
                 <li class="nav-item">
                     <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
                 <li>.</li>
             @endif
         @else
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }}
                 </a>

                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
      <br>
      <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>
</html>
