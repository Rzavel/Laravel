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
      <button class="button navbar-burger">
      <spsan><a href="#">Main</a></spsan>
      <spsan><a href="#">Blog</a></spsan>
      <spsan><a href="#">Upload</a></spsan>

      </button>


      </div>

      <div class="navbar-menu">
        <div class="navbar-start">
          <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Main</a>
          <a href="#" class="navbar-item is-tab is-hidden-mobile">Blog</a>
          <a href="#" class="navbar-item is-tab is-hidden-mobile">Upload</a>
        </div>
        <div class="navbar-end">
          @if (Auth::guest())
    <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
    <a href="{{route('register')}}" class="navbar-item is-tab">Signup</a>
          @else
    <div class="navbar-item has-dropdown is-tab">
      <a class="navbar-link">Hey Reza</a>
    <div class="navbar-dropdown">
            <a href="#" class="navbar-item">
              <span class="icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>

              Profile</a>
            <a href="#" class="navbar-item">
              <span class="icon"><i class="fa fa-bell" aria-hidden="true"></i></span>

              Notification</a>
            <a href="#" class="navbar-item">
              <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
              Settings</a>
            <div class="navbar-divider"></div>
            <a href="#" class="navbar-item">
              <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
Logout</a>
    </div>
  </div>
          @endif
        </div>

    </div>







  </div>
</nav>


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
