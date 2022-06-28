<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Septi Beauty Center</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html"></a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="{{ route('adminHome') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Menu</li>
          <li class="nav-item dropdown">
            {{-- <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Perawatan</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('wajah.index') }}">Treatment Wajah</a></li>
              <li><a class="nav-link" href="{{ route('tubuh.index') }}">Treatment Tubuh</a></li>
              <li><a class="nav-link" href="{{ route('women.index') }}">Treatment For Women</a></li>
              <li><a class="nav-link" href="{{ route('hifu.index') }}">Hifu Traetment</a></li>
              <li><a class="nav-link" href="{{ route('sulamab.index') }}">Sulam Alis & Bibir</a></li>
              <li><a class="nav-link" href="{{ route('plasma.index') }}">Plasma Fibroblas Therapy</a></li>
              <li><a class="nav-link" href="{{ route('whitening.index') }}">Whitening</a></li>
            </ul> --}}
            <li class=""><a class="nav-link" href="{{ route('treatment.index') }}"><i class="fas fa-columns"></i></i> <span>Treatment</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('product.index') }}"><i class="far fa-square"></i><span>Produk</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('academy.index') }}"><i class="fas fa-th"></i><span>Academy</span></a></li>
          </li>
          {{-- <li class=""><a class="nav-link" href="{{ route('product.index') }}"><i class="fas fa-columns"></i> <span>Treatment</span></a></li>
          <li class=""><a class="nav-link" href="{{ route('product.index') }}"><i class="far fa-square"></i> <span>Produk</span></a></li>
          <li class=""><a class="nav-link" href="{{ route('product.index') }}"><i class="far fa-square"></i> <span>Academy</span></a></li> --}}
          {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Academy</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('privateclass.index') }}">Private Class</a></li>
              <li><a class="nav-link" href="{{ route('workshop.index') }}">Workshop</a></li>
              <li><a class="nav-link" href="{{ route('seminar.index') }}">Seminar</a></li>
            </ul>
          </li> --}}
          <li class="menu-header">Data</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Data User</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('employee.index') }}">Karyawan</a></li>
              <li><a class="nav-link beep beep-sidebar" href="{{ route('customer.index') }}">Pelanggan</a></li>
              <li><a class="nav-link" href="{{ route('member.index') }}">Member</a></li>
            </ul>
          </li>
           <li class="nav-item dropdown">
            <a href="" class="nav-link"><i class="far fa-file-alt"></i> <span>Laporan</span></a>
          </li>
          <li class="menu-header">Promo</li>
          <li class="nav-item dropdown">
            <a href="{{ route('discount.index') }}" class="nav-link"><i class="fas fa-plug"></i> <span>Promo</span></a>
          </li>
          <li class="menu-header">Konfirmasi</li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link"><i class="fas fa-plug"></i> <span>pesanan</span></a>
          </li>
    </aside>
  </div>
