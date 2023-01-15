<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ url('/') }}">Sell.Me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
  data-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav me-auto">
      <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">{{ __('Products') }}</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('support') }}">Support</a></li>
    </ul>

    <ul class="navbar-nav ml-auto">

      @guest
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button"
      data-toggle="dropdown" aria-expanded="false">Account</a>
        <ul class="dropdown-menu dropdown-menu-right">
        @if (Route::has('login'))
        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
        @endif
        @if (Route::has('register'))
        <a class="dropdown-item" href="{{ route('register') }}">
          {{ __('Register') }}
        </a>
        </ul>
      </li>
      @endif
      
      @else
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button"
      data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
      <ul class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="{{ route('home') }}">{{ __('Home') }}</a>
        <a class="dropdown-item" href="{{ route('create') }}">{{ __('Create Listing') }}</a>
        <a class="dropdown-item" href="{{ route('edit_profile') }}">{{ __('Edit Profile') }}</a>
        <a class="dropdown-item" href="{{ route('password.request') }}">{{ __('Edit your Credentials') }}</a>
        <a class="dropdown-item" href="{{ route('delete') }}">{{ __('Delete Profile') }}</a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </ul>
      </li>
      @endguest
    </ul>
  </div>

</nav>