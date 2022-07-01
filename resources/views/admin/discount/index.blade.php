@extends('m-admin.dashboard')
@section('title','Septi Beauty Center')
@section('content')

<div class="section-body">
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Promo</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Promo</div>
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
                  <h4>Promo</h4>
                  <div class="card-header-action">
                  <a href="{{ route('discount.create') }}"> <button class="btn btn-primary" >Tambah</button></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped" id="sortable-table">
                      <thead>
                        <tr>
                          <th class="text-center">
                            <i class="fas fa-th"></i>
                          </th>
                          <th>Produk</th>
                          <th>Potongan</th>
                          <th>Deskripsi</th>
                          <th>Stok</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($discounts as $discount)
                        <tr>
                          <td>
                            <div class="sort-handler">
                              <i class="fas fa-th"></i>
                            </div>
                          </td>
                          {{-- <td>{{ $discount->product->id }}</td> --}}
                          <td>{{ $discount->description }}</td>
                          <td>{{ $discount->price }}</td>
                          <td>{{ $discount->stock }}</td>
                          {{-- <td> --}}
                            {{-- <a href="{{ route('product.edit', $product->id) }}" class="btn btn-secondary">Edit</a> --}}
                            <td>
                                <a href="{{ route('discount.edit', $discount->id) }}" class="btn btn-secondary">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <form action="{{ route('discount.destroy', $discount->id) }}" method="POST" class="d-inline">
                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-trash"></i></button>
                                    @method('DELETE')
                                    @csrf
                                </form>
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








