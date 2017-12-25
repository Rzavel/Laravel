<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
        <img src="{{ asset('images/LaravelMaster-logo.png') }}" alt="LaravelMaster Logo" />
      </a>


      </div>

      <div class="navbar-menu">
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Main</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Blog</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile">Upload</a>
    </div>





    <div class="navbar-menu">
      @if (Auth::guest())
<a href="#" class="navbar-item is-tab">Login</a>
<a href="#" class="navbar-item is-tab">Signup</a>
      @else
<button class="dropdown navbar-item is-tab">Hey Reza <span class='icon'><i class="fa fa-caret-down"></i></span>
<ul class="dropdown-menu">
        <li><a href="#">Profile</a></li>
        <li><a href="#">Notification</a></li>
        <li><a href="#">Settings</a></li>
        <li class="seperator"></li>
        <li><a href="#">Logout</a></li>
</ul>
</button>
      @endif
    </div>

  </div>
</nav>


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
