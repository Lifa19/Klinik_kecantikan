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
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li class="active"><a href="#general-template" class="btn btn-color">Pesanan Saya </a></li>
        </ul>
      </div>
      <div class="span9">
        <section id="general-template" class="doc">
          <div class="page-header">
            <h3>Pesanan Saya</h3>
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
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
                            {{-- <form id="exampleModal"action="" method="POST" class="d-inline"> --}}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-color" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Bayar
                            </button>
                                {{-- @method('DELETE')
                                @csrf --}}
                                {{-- <a href="" class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </a> --}}
                            {{-- </form> --}}
                        </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Footer
 ================================================== -->


 @endsection
