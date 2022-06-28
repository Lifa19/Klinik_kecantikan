@extends('m-admin.dashboard')
@section('title','Septi Beauty Center')
@section('content')



<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{ route('academy.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Academy</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        {{-- <div class="breadcrumb-item"><a href="#">Posts</a></div> --}}
        {{-- <div class="breadcrumb-item"><a href="#">Academy</a></div> --}}
        <div class="breadcrumb-item">Edit Academy</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Academy</h2>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Academy</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('academy.update', [$product->id]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                <div class="col-sm-12 col-md-7">
                  <input  class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" value="{{$product->name}}" placeholder="Nama" >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category_product</label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-control @error('category_product_id') is-invalid @enderror" name="category_product_id" id="select_category_product_id" required>
                        <option value="">Kategory</option>
                        @foreach($categoryproduct as $item)
                            <option value="{{$item->id}}" @selected($product->category_product_id == $item->id)>{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('description') is-invalid @enderror" id="inputDescription" name="description" value="{{$product->description}}" placeholder="Deskripsi">
                      @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('price') is-invalid @enderror" id="inputPrice" name="price" value="{{$product->price}}" placeholder="Harga">
                  @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('stock') is-invalid @enderror" id="inputStock" name="stock" value="{{$product->stock}}" placeholder="Stok">
                  @error('stock')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                  @enderror
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                <div class="col-sm-12 col-md-7">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <td type="file" class="form-control @error('picture') is-invalid @enderror" id="inputImage" name="picture" placeholder="Image">
                        <img src="{{ Storage::url('public/images/').$product->picture }}" alt="Image">
                      </td>
                      @error('picture')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button type="submit" class="btn btn-primary">Selesai</button>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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

<!-- Template JS File -->
<script src="{{ asset('vendor/admin/assets/js/scripts.js') }}"></script>
<script src="{{ asset('vendor/admin/assets/js/custom.js') }}"></script>

@endpush





















