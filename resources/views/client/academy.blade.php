 @extends('sb-client/app')
 @section('content')
   <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Private Class</h3>
              <p>
                Private Class
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="well">
            <div class="centered">
              <i class="icon-circled icon-64 icon-suitcase active"><a href="{{ route('privateclass') }}"></a></i>
              <h4>Seminar</h4>
              <div class="dotted_line">
              </div>
              <p>
                Adanya Pelaksanaan Seminar diperuntukkan untuk bagi semua kalangan yang ingin memiliki kulit yang sehat
                “Seminar ini tidak hanya dikhususkan untuk mereka yang berwajah cantik saja, akan tetapi bagi mereka yang ingin memiliki kulit sehat.
                Bagi mereka yang tidak percaya diri akan masalah-masalah pada kulitnya, terutama wajah, bahkan bagi mereka yang ingin meningkatkan/ mempertahankan kulit cantiknya,”
              </p>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="well">
            <div class="centered">
              <i class="icon-circled icon-64 icon-leaf active"></i>
              <h4><a href="{{ route('workshop') }}"></a>Private Class</h4>
              <div class="dotted_line">
              </div>
              <p>
                Kami juga menyediakan Kelas Privat dengan materi kecantikan yang lengkap. Pelatihan intensif cukup 2 hari langsung Mahir dan Bisa. Kelas yang dibuka untuk umum kelas.
              </p>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="well">
            <div class="centered">
              <i class="icon-circled icon-64 icon-coffee active"><a href="{{ route('seminar') }}"></a></i>
              <h4>Workshop</h4>
              <div class="dotted_line">
              </div>
              <p>
                Workshop pada SA Beauty Center ini menyediakan beberapa pengetahuan dan pengalaman.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <div class="divider">
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="span12">
          <h4>Private Class</h4>
          <!-- start: Accordion -->
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						<i class="icon-minus"></i> Database management</a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                  raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						<i class="icon-plus"></i> UI development</a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                  raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
						<i class="icon-plus"></i> Social media</a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                  on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                  raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
          <!--end: Accordion -->
        </div>
      </div> --}}
    </div>
  </section>
  <!-- Footer
 ================================================== -->


 @endsection
