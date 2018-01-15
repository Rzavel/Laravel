<div id="app">

<nav class="navbar has-shadow">

    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
        <img src="{{ asset('images/LaravelMaster-logo.png') }}" alt="LaravelMaster Logo" />
      </a>
      <button class="button navbar-burger" data-target="navMenu">
      <span></span>
      <span></span>
      <span></span>

      </button>


      </div>

      <div class="navbar-menu">
        <div class="navbar-start">
          <a href="#" class="navbar-item is-tab">Main</a>
          <a href="#" class="navbar-item is-tab">Blog</a>
          <a href="#" class="navbar-item is-tab">Upload</a>
        </div>
        <div class="navbar-end">
          @if (Auth::guest())
    <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
    <a href="{{route('register')}}" class="navbar-item is-tab">Signup</a>
          @else
    <div class="navbar-item has-dropdown is-tab is-hoverable ">
      <a class="navbar-link">Hey {{ Auth::user()->name }}</a>
      <div class="navbar-dropdown" >
            <a class="navbar-item">
              <span class="icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>

              Profile</a>

            <a href="#" class="navbar-item">
              <span class="icon"><i class="fa fa-bell" aria-hidden="true"></i></span>

              Notification</a>

            <a href="{{route('manage.dashboard')}}" class="navbar-item">
              <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
              Settings</a>

            <div class="navbar-divider"></div>

            <a href="{{ route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
              <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
              Logout</a><form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
      </div>
    </div>
          @endif
        </div>

    </div>








</nav>
