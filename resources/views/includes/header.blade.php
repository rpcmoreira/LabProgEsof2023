<nav class="navbar navbar-dark navbar-expand-md" style="background-color: #7A89C2;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}"> <!-- Comentarios em Laravel sao com as chavetas e tracos -->
                  <h2>NOME</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">Home</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('about')}}" class="nav-link">about</a>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </div>   
            </div>   
        </nav>