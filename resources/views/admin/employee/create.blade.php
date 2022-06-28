{{-- @extends('m-admin.dashboard')
@section('title','Septi Beauty Center')
@section('content')

<div class="section-body">
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Karyawan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumd-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumd-item"><a href="#"> Karyawan</a></div>
              <div class="breadcrumd-item"><a href="#"> Form</a></div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>Karyawan</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('employee.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <div class="form-group">
                  <label for="inputName">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" placeholder="Nama" value="{{ old('name') }}">

                  @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                  <label for="inputAddress">Alamat</label>
                  <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputAddress" name="address" placeholder="Alamat" value="{{ old('address') }}">

                  @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                  <label for="inputPhone">Telepon</label>
                  <input type="text" class="form-control @error('phone') is-invalid @enderror" id="inputPhone" name="phone" placeholder="Telepon" value="{{ old('phone') }}">

                  @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                  <label for="inputDateOfBirth">Tanggal Lahir</label>
                  <input type="date" class="form-control @error('dateOfBirth') is-invalid @enderror" id="inputDateOfBirth" name="dateOfBirth" placeholder="Tanggal Lahir" value="{{ old('dateOfBirth') }}">

                  @error('dateOfBirth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                  <select class="form-control @error('gender') is-invalid @enderror" for="InputGender" name="gender" id="InputGender" required>
                    <option value="">Gender</option>
                        <option value="laki-laki" @selected(old('gender') == 'laki-laki')>Laki-laki</option>
                        <option value="perempuan" @selected(old('gender') == 'perempuan')>Perempuan</option>
                </select>
                @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="inputImage">Image</label>
                  <input type="file" class="form-control @error('picture') is-invalid @enderror" id="inputImage" name="picture" placeholder="Image" value="{{ old('picture') }}">

                  @error('picture')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

                </div>
                <div class="form-group">
                  <select class="form-control @error('position_id') is-invalid @enderror" name="position_id" id="select_position_id" required >
                    <option value="">position</option>
                    @foreach($position as $item)
                        <option value="{{$item->id}}" @selected(old('position_id') == $item->id)>{{$item->name}}</option>
                    @endforeach
                </select>
                @error('position_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

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

JS Libraies

Template JS File
<script src="{{ asset('vendor/admin/assets/js/scripts.js') }}"></script>
<script src="{{ asset('vendor/admin/assets/js/custom.js') }}"></script>

@endpush
     --}}

     @extends('m-admin.dashboard')
     @section('title','Septi Beauty Center')
     @section('content')
        <div class="main-content">
        <section class="section">
            <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('employee.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Karyawan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                {{-- <div class="breadcrumb-item"><a href="#">Posts</a></div> --}}
                <div class="breadcrumb-item"><a href="{{ route('employee.index') }}">Karyawan</a></div>
                <div class="breadcrumb-item">Tambah Karyawan</div>
            </div>
            </div>
            <div class="section-body">
            <h2 class="section-title">Karyawan</h2>
            <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Tambah Karyawan</h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                        <input  class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" placeholder="Nama" >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="inputAddress" name="address" placeholder="Alamat">
                            @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telepon</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="inputPhone" name="phone" placeholder="Telepon">
                        @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control @error('dateOfBirth') is-invalid @enderror" id="inputdateOfBirth" name="dateOfBirth" placeholder="dateOfBirth">
                        @error('dateOfBirth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                        <div class="col-sm-12 col-md-4">
                        <select class="form-control @error('gender') is-invalid @enderror" for="InputGender" name="gender" id="InputGender" required>
                            <option value="">Gender</option>
                                <option value="laki-laki" @selected(old('gender') == 'laki-laki')>Laki-laki</option>
                                <option value="perempuan" @selected(old('gender') == 'perempuan')>Perempuan</option>
                        </select>
                        @error('gender')
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
                            <input type="file" class="form-control @error('picture') is-invalid @enderror" id="inputImage" name="picture" placeholder="Image">
                            @error('picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
                        <div class="col-sm-12 col-md-4">
                        <select class="form-control @error('position_id') is-invalid @enderror" name="position_id" id="select_position_id" required >
                          <option value="">position</option>
                          @foreach($position as $item)
                              <option value="{{$item->id}}" @selected(old('position_id') == $item->id)>{{$item->name}}</option>
                          @endforeach
                      </select>
                      @error('position_id')
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


