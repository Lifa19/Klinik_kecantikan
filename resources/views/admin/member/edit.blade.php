@extends('m-admin.dashboard')
@section('title','Septi Beauty Center')
@section('content')

<div class="section-body">
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Member</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumd-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumd-item"><a href="#"> Member</a></div>
              <div class="breadcrumd-item"><a href="#"> Form</a></div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header">
              <h4>Edit Member</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('member.update', [$member->id]) }}">
                @method('PUT')
                @csrf
  
              <div class="form-group">
                <div class="form-group">
                  <label for="inputEmail4">Nama</label>
                  <input type="text"class="form-control @error('name') is-invalid @enderror" id="inputNama4" name="name" value="{{$product->name}}" placeholder="Nama">

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
                <div class="form-group">
                  <label for="inputRegisterDate">Tanggal Register</label>
                  <input type="date" class="form-control @error('register_date') is-invalid @enderror" id="inputRegisterDate" name="register_date" value="{{$member->register_date}}" placeholder="Tanggal Register">
                
                  @error('register_date')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
                <div class="form-group">
                  <select class="form-control @error('customer_id') is-invalid @enderror" name="customer_id" id="select_customer_id" required>
                    <option value="">Pelanggan</option>
                    @foreach($customer as $item)
                        <option value="{{$item->id}}" @selected($member->customer_id == $item->id)>{{$item->id}}</option>
                    @endforeach
                </select>
                </div>
               
              </div>
            <div class="card-footer">
              <button class="btn btn-primary">Selesai</button>
            </div>
          </form>
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

<!-- Template JS File -->
<script src="{{ asset('vendor/admin/assets/js/scripts.js') }}"></script>
<script src="{{ asset('vendor/admin/assets/js/custom.js') }}"></script>

@endpush
    
