@extends('sb-user/app')
 @section('content')
    <section id="subintro">
        <div class="jumbotron subhead" id="overview">
        <div class="container">
            <div class="row">
            <div class="span12">
                <div class="centered">
                <h3>Profile</h3>
                <p>
                    Profile
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>


        {{-- <section id="maincontent"> --}}
            <div class="container">
            {{-- <div class="row"> --}}
                <div class="span12">
                <!-- Download
                ================================================== -->
                {{-- <section id="general-template" class="doc"> --}}
                    <div class="page-header">
                        <h3>Edit Profil </h3>
                            <div class="row-fluid" style="width: 120px;">
                               <div class="card-body p-0">
                                    <div class="card-body" style="width:100%;">
                                        {{-- <div class="table-responsive"> --}}
                                        <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                                          @csrf

                                          <div class="form-group row mb-10">
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
                                              <input  class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" placeholder="Alamat" >
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                                            <div class="col-sm-12 col-md-7">
                                              <input  class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" placeholder="Tanggal Lahir" >
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row mb-4">
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control @error('gender') is-invalid @enderror" for="InputGender" name="gender" id="InputGender" >
                                                    <option value="">Jenis Kelamin</option>
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
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">N0 HP</label>
                                            <div class="col-sm-12 col-md-7">
                                              <input  class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" placeholder="NO HP" >
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                          </div>
                                          <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                                            <div class="col-sm-12 col-md-7">
                                              <input type="file"  class="form-control @error('picture') is-invalid @enderror" id="inputPicture" name="picture" placeholder="Image" >
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
                                              <button type="submit" class="btn btn-color">Selesai</button>
                                            </div>
                                          </div>
                                        </form>
                                    </div>
                                    </div>
                               </div>
                        </div>
                    </div>
                    {{-- </section> --}}
                </div>
             </div>
        {{-- </section> --}}
     </section>
        </div>
  <!-- Footer
 ================================================== -->


 @endsection
