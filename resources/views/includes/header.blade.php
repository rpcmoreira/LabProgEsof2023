<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ url('/') }}">Sell.Me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"><span
      class="navbar-toggler-icon"></span></button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav me-auto">
      <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search">
        <button class="btn btn-light my-sm-0" type="submit">Search</button>
      </form>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Account
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
          
          <li><a class="dropdown-item" href="{{ url('/login') }}">
              {{ __('Login') }}</a></li>
          <li><a class="dropdown-item" href="{{ url('/register') }}">
              {{ __('Register') }}</a></li>
        </ul>
      </li>
    </ul>
  </div>


</nav>