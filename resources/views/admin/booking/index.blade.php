@extends('m-admin.dashboard')
@section('title','Septi Beauty Center')
@section('content')

<div class="section-body">
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pemesanan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Pemesanan</div>
              </div>
          </div>
          @if (session('success'))
              <div class="col-sm-12">
                  <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> {{session('success')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
          @endif

          @if (session('error'))
                <div class="col-sm-12">
                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-danger">Error !</span> {{session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Pemesanan</h4>
                  <div class="card-header-action">

                    {{-- <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form> --}}
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Qty</th>
                            <th>Total Bayar</th>
                            <th>Invoce</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking )
                            <tr>
                                <td>{{ $booking->Customer->name}}</td>
                                {{-- <td>{!! DNS2D::getBarcodeHTML($booking->Customer->name, 'QRCODE') !!}</td> --}}
                                <input type="hidden" name="customer_id" class="form-control form-sm" value="{{ $booking->customer_id }}">
                                <td>{{ $booking->date }}</td>
                                <td>{{ $booking->qty }}</td>
                                <td>{{ $booking->subtotal }}</td>
                                <td>{{ $booking->no_invoice }}</td>
                                <td>
                                {{-- <form action="" method="POST">
                                    @csrf --}}
                                        {{-- <form id="exampleModal"action="" method="POST" class="d-inline"> --}}
                                <!-- Button trigger modal -->
                                    @if ($booking->bookingDetail->payment_status != 'LUNAS')
                                    <form action="{{ route('verifyPembayaran', $booking->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <input type="submit" value="Verifikasi Pembayaran" class="btn btn-primary">
                                    </form>
                                    @endif
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
              </div>
            </div>
          </div>
        </section>
    </div>
</div>

  @endsection

@push('page-scripts')

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('vendor/admin/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset ('vendor/admin/node_modules/jquery-ui-dist/jquery-ui.min.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset ('vendor/admin/assets/js/scripts.js') }}"></script>
  <script src="{{ asset ('vendor/admin/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset ('vendor/admin/assets/js/page/components-table.js') }}"></script>
@endpush
