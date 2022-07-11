@extends('m-admin.dashboard')
@section('title','Septi Beauty Center')
@section('content')

<div class="section-body">
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Laporan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Product</div>
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
                  {{-- <h4>Laporan</h4> --}}
                  <form action="{{ route('pdfReport') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="date" name="start_date" placeholder="Start Date"> To
                        <input type="date" name="end_date" placeholder="End Date">
                        <div class="px-3">
                            <select name="category">
                                <option value="">-- Select Category --</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Cetak PDF">
                </form>
                    <div class="card-header-action">

                    </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-bordered mb-5">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">#</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Pelanggan</th>
                                <th scope="col">No Invoice</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Diskon</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $report)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $report->Products->name }}</td>
                                <td>{{ $report->Customer->name }}</td>
                                <td>{{ $report->no_invoice }}</td>
                                <td>{{ $report->created_at}}</td>
                                <td>{{ $report->qty }}</td>
                                <td>{{ $report->Products->discount }}</td>
                                <td>{{ $report->subtotal }}</td>
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

