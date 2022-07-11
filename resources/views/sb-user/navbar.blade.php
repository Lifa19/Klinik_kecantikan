<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          {{-- <a class="brand logo" href="index.html"><img src="{{ asset('vendor/client/assets/img/logo.png') }}" alt="" /></a> --}}
          <a class="brand logo" href="index.html"><img src="{{ asset('vendor/client/assets/img/log2.png') }}"  width="300px" alt="" /></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav ">
                <li class="dropdown">
                  <a href="{{ route('userHome') }}">Home</a>
                </li>
                {{-- <li class="dropdown">
                  <a href="#">Treatment</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('wajahh') }}">Treatment Wajah</a></li>
                    <li><a href="{{ route('tubuhh') }}">Treatment Tubuh</a></li>
                    <li><a href="{{ route('womenn') }}">Treatment For Women Only</a></li>
                    <li><a href="{{ route('hifuu') }}">Hifu Treatment</a></li>
                    <li><a href="{{ route('sulamm') }}">Sulam Alis & Bibir</a></li>
                    <li><a href="{{ route('plasmaa') }}">Plasma Fibrobplas Therapy</a></li>
                    <li><a href="{{ route('whiteningg') }}">Whitening</a>
                    </li>
                  </ul>
                </li> --}}
                <li class="dropdown {{ request()->routeIs('treatment.*') ? 'active' : '' }} ">
                    <a href="{{ route('treatmentt') }}">Treatment</a>
                  </li>
                <li class="dropdown">
                  <a href="{{ route('producttt') }}">Produk</a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('academyy') }}">Academy</a>
                  </li>
                {{-- <li class="dropdown">
                  <a href="#">Academy</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('privateclasss') }}">Private Class</a></li>
                    <li><a href="{{ route('workshopp') }}">Workshop</a></li>
                    <li><a href="{{ route('seminarr') }}">Seminar</a></li>
                  </ul>
                </li> --}}
                <li class="dropdown">
                    <a href="{{ route('booking.index') }}">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </a>
                  </li>
                  <li class="dropdown">
                    <a href="{{ route('cart.index') }}">
                        <i class="fa-solid fa-cart-plus"></i>
                    </a>
                  </li>
                <li class="dropdown">
                    <a href="{{ route('profilePelanggan') }}">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                  ><i class="fas fa-sign-out-alt"></i>
                    {{-- <i class="fas fa-sign-out-alt"></i> --}}

                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    @method('POST')
                  </form>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
</header>
