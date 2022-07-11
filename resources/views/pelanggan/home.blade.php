 @extends('sb-user/app')
 @section('content')

   <section id="subintro">
    {{-- <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Tretment </h3>
              <p>
                Treatment
              </p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </section>
  <div class="container">
    {{-- @if ((empty(Auth::user()->Customer->name) || empty(Auth::user()->Customer->address) || empty(Auth::user()->Customer->gender) || empty(Auth::user()->Customer->phone) || empty(Auth::user()->Customer->dateOfBirth))) --}}

    {{-- @endif --}}
    <!-- Docs nav
    ================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-danger">Error !</span>sadas
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#whitening" class="btn btn-color">SA Beauty Center</a></li>
        </ul>
      </div>
      <div class="span9">
        <!-- Download
        ================================================== -->
        <section id="treatment-wajah" class="doc">
          <div class="page-header">
           <center><h3>TENTANG</h3></center>

          <p>
            SA Beauty Center menawarkan solusi estetika profesional dimulai dari kepala hingga ujung kaki.
            Berpengalaman dalam membuat contouring wajah menjadi lebih ideal dan sempurna, SA Beauty Center didukung
            oleh tim dokter ahli dan memiliki kompetensi tinggi serta selalu melakukan pengembangan dan inovasi untuk meningkatkan
            kualitas layanan dengan mengikuti berbagai seminar medis berskala internasional yang dilatih secara professional oleh dokter ahli.
          </p>
          </div>
        </section>

      </div>
    </div>
  </div>
  <!-- Footer
 ================================================== -->


 @endsection


