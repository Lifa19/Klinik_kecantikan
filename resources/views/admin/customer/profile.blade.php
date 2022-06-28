@extends('m-admin.dashboard')
@section('title','Septi Beauty Center')
@section('content')

<div class="section-body">
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
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
                  <h4>Profile</h4>
                  <div class="card-header-action">
                  </div>
                </div>
                <div class="section-body">
                    <h2 class="section-title">Hi, Ujang!</h2>
                    <p class="section-lead">
                      Change information about yourself on this page.
                    </p>

                    <div class="row mt-sm-4">
                      <div class="col-12 col-md-12 col-lg-5">
                        <div class="card profile-widget">
                          <div class="profile-widget-header">
                            <img alt="image" src="{{ asset('vendor/admin//assets/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                              <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Posts</div>
                                <div class="profile-widget-item-value">187</div>
                              </div>
                              <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Followers</div>
                                <div class="profile-widget-item-value">6,8K</div>
                              </div>
                              <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Following</div>
                                <div class="profile-widget-item-value">2,1K</div>
                              </div>
                            </div>
                          </div>
                          <div class="profile-widget-description">
                            <div class="card-body">
                                <div class="row">
                                  <div class="form-group col-md-6 col-12">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="Ujang" required="">
                                    <div class="invalid-feedback">
                                      Please fill in the first name
                                    </div>
                                  </div>
                                  <div class="form-group col-md-6 col-12">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="Maman" required="">
                                    <div class="invalid-feedback">
                                      Please fill in the last name
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-7 col-12">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="ujang@maman.com" required="">
                                    <div class="invalid-feedback">
                                      Please fill in the email
                                    </div>
                                  </div>
                                  <div class="form-group col-md-5 col-12">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" value="">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-12">
                                    <label>Bio</label>
                                    <textarea class="form-control summernote-simple">Ujang maman is a superhero name in &lt;b&gt;Indonesia&lt;/b&gt;, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with &lt;b&gt;'John Doe'&lt;/b&gt;.</textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group mb-0 col-12">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                                      <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                                      <div class="text-muted form-text">
                                        You will get new information about products, offers and promotions
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          <div class="card-footer text-center">
                            <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                              <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon btn-github mr-1">
                              <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon btn-instagram">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </div>
                        </div>
                      </div>
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


