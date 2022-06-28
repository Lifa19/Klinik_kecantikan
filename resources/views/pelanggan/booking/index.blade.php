@extends('sb-user/app')
 @section('content')
   <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Pemesanan</h3>
              <p>
                Pemesanan
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li class="active"><a href="#general-template" class="btn btn-color">Pesanan Saya </a></li>
        </ul>
      </div>
      <div class="span9">
        <!-- Download
        ================================================== -->
        <section id="general-template" class="doc">
          <div class="page-header">
            <h3>Pesanan Saya</h3>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                {{-- <h3>HOME</h3> --}}
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Qty</th>
                        <th>Total Bayar</th>
                        <th>Invoce</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <form action="" method="POST">
                            @csrf
                        @foreach ( $bookings as $booking )
                        <tr>
                        <td>{{ $booking->Customer->name}}</td>
                            {{-- <td>{!! DNS2D::getBarcodeHTML($booking->Customer->name, 'QRCODE') !!}</td> --}}
                        <input type="hidden" name="customer_id" class="form-control form-sm" value="{{ $booking->customer_id }}">
                        <td>{{ $booking->date }}</td>
                        <td>{{ $booking->qty }}</td>
                        <td>{{ $booking->subtotal }}</td>
                        <td>{{ $booking->no_invoice }}</td>
                        <td>
                            <form action="" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-danger">Belum Bayar</i></button>
                                @method('DELETE')
                                @csrf
                                {{-- <a href="" class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </a> --}}
                            </form>
                        </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
                </div>
                {{-- <div id="menu1" class="container tab-pane fade"><br>
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div> --}}
            </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Footer
 ================================================== -->


 @endsection
