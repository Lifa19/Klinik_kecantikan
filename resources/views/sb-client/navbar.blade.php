<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="index.html"><img src="{{ asset('vendor/client/assets/img/logo.png') }}" alt="" /></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown">
                  <a href="#">Home</a>
                </li>
                <li class="dropdown">
                  <a href="{{ route('treatment') }}">Treatment</a>
                </li>
                <li class="dropdown">
                  <a href="{{ route('product') }}">Produk</a>
                </li>
                <li class="dropdown">
                  <a href="{{ route('academy') }}">Academy</a>
                </li>
                @auth
                @php
                    if(auth()->user()->hasRole('admin')){
                      $route = route('adminHome');
                    }elseif (auth()->user()->hasRole('pelanggan')) {
                      $route = route('userHome');
                    }
                @endphp
                {{-- <a href="{{ $route }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
            @else
            <li>
                @if (Route::has('login'))
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                @endif
              </li>
              {{-- <li>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
              </li> --}}
            @endauth
          </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
