{{-- @extends('sb-user/app')
@section('content')

        <div class="wrapper bgded overlay gradient" style="background-image:url('vendor/user/images/demo/backgrounds/g3.jpg');">
            <div id="pageintro" class="hoc clear">
              <article>
                <p>Home</p>
                <h3 class="heading">Septi Beauty Center</h3>
                <p>Klinik Kecantikan Sumenep</p>
              </article>
            </div>
        </div>
        <div class="wrappery"  >
            <figure>
            <main class="hoc container clear">
                <section class="introblock">
                    <div class="sectiontitle">
                        <h1 class="heading">Selamat Datang</h1>
                        <p>KLinik Kecantikan Septi Beauty Center</p>
                    </div>
                    <label for="">
                    <center><img src="{{ asset('vendor/user/images/demo/backgrounds/g3.jpg') }}" style="width:800px;heigth:600px" alt=""></center>
                    <center><p>Septi Beauty Center menawarkan solusi estetika profesional dimulai dari kepala hingga ujung kaki.</p>
                            <p>Septi Beuty Center didukung dengan menggunakan teknologi</p>
                        </center>
                    </label>

                </section>
               <div class="clear"></div>
            </main>
        </figure>
        </div>
        <div class="wrappery"  >
          <figure>
          <main class="hoc container clear">
              <section class="introblock">
                  <div class="sectiontitle">
                      <h1 class="heading">YouTbue</h1>
                  </div>
                  <center>
                    <div class="col-xs-12 col-md-6">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" style="width:100px heigth:300px;" src=https://www.youtube.com/shorts/2Cn3MnhsDV4" allowfullscreen=""></iframe>
                      </div>
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" style="width:100px heigth:300px;" src="https://www.youtube.com/embed/61_JP2Ys9lU" allowfullscreen=""></iframe>
                        <iframe class="embed-responsive-item" style="width:100px heigth:300px;" src="https://www.youtube.com/embed/61_JP2Ys9lU" allowfullscreen=""></iframe>
                      </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" style="width:100px heigth:300px;" src="https://www.youtube.com/embed/61_JP2Ys9lU" allowfullscreen=""></iframe>
                        <iframe class="embed-responsive-item" style="width:100px heigth:300px;" src="https://www.youtube.com/embed/61_JP2Ys9lU" allowfullscreen=""></iframe>
                      </div>
                    </div>
                  </center>
              </section>
             <div class="clear"></div>
          </main>
        </figure>
        </div>
@endsection

 --}}


 @extends('sb-client/app')
 @section('content')

   <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <!-- slider navigation -->
        <div class="sequence-nav">
          <div class="prev">
            <span></span>
          </div>
          <div class="next">
            <span></span>
          </div>
        </div>
        <!-- end slider navigation -->
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in">
                      <h2>SA Beauty Center</h2>
                      <br>
                      <h3>Klinik Kecantikan Sumenep</h3>
                      <p>
                        Klinik Kecantikan SA Beauty ini menawarkan solusi estetika profesional dimulai dari kepala hingga ujung kaki. Berpengalaman dalam membuat contouring wajah menjadi lebih ideal dan sempurna
                        SA Beauty Center didukung oleh tim dokter ahli dan memiliki kompetensi tinggi serta selalu melakukan pengembangan dan inovasi untuk meningkatkan kualitas layanan.
                        </p>
                      {{-- <a class="btn btn-success" href="#">Learn more &raquo;</a> --}}
                    </div>
                    <img class="slider_img animate-in" src="{{ asset('vendor/client/assets/img/slides/sequence/logo2.png') }}" alt="">
                  </li>
                  <!-- Layer 2 -->
                  <li>
                    <div class="info">
                      <h2>SA Academy</h2>
                      <br>
                      <h3>Pelatihan</h3>
                      <p>
                        Program ini menawarkan pelatihan dalam pengetahuan dan keterampilan yang diperlukan bagi siswa untuk menjadi profesional kecantikan yang berspesialisasi dalam perawatan kulit. Beberapa program mungkin fokus pada mengajar siswa bagaimana melakukan perawatan wajah dan kulit sementara yang lain mungkin juga mendemonstrasikan teknik rias wajah.
                        Program lanjutan dapat berfokus pada topik seperti elektrolisis, pengangkatan rambut laser, aromaterapi, dan perawatan jerawat.
                      </p>
                      {{-- <a class="btn btn-success" href="#">Learn more &raquo;</a> --}}
                    </div>
                    <img class="slider_img" src="{{ asset('vendor/client/assets/img/slides/sequence/logo3.png') }}" alt="">
                  </li>
                  <!-- Layer 3 -->
                  <li>
                    <div class="info">
                      <h2>Klinik Kecantikan SA Beauty Center</h2>
                      <br>
                      <h3>Perum. Alam Permai Asri Blok G. 16, Kolor Sumenep.</h3>
                      <p>
                        Open : 08.30 - 21.00
                      </p>
                      {{-- <a class="btn btn-success" href="#">Learn more &raquo;</a> --}}
                    </div>
                    <img class="slider_img" src="{{ asset('vendor/client/assets/img/slides/sequence/logo4.png') }}" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      {{-- <div class="row">
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-suitcase left active"></i>
          <h4>Responsive bootstrap</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-plane left"></i>
          <h4>Lot of features</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-leaf left"></i>
          <h4>Multipurpose template</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-wrench left"></i>
          <h4>With latest technology</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
      </div> --}}
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h2>Jangan Lewatkan Promo-Promo Khusus Pada Klinik Kecantikan SA Beauty Center</h2>
                  <p>
                    banyak sekali diskon di SA Beauty Center
                  </p>
                </div>
                <div class="btn-toolbar cta">
                  <a class="btn btn-large btn-inverse" href="#">
							<i class="icon-shopping-cart icon-white"></i> Pesan Treaetment </a>
                  <a class="btn btn-large btn-inverse" href="#">
							<i class="icon-shopping-cart icon-white"></i> Pesan Product </a>
                  <a class="btn btn-large btn-inverse" href="#">
							<i class="icon-shopping-cart icon-white"></i> Pesan Academy </a>
                </div>
              </div>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
        <div class="row">
            <div class="home-posts">
            <div class="span12">
                <h3>Recent blog posts</h3>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="post_right_sidebar.html">
                {{-- <img src="{{ asset('vendor/client/assets/img/dummies/blog1.jpg') }}" alt=""> --}}
                {{-- <img src="URL('https://youtu.be/hcKItJkKbdM')" alt=""> --}}
                {{-- <label for="">
                    https://youtu.be/hcKItJkKbdM
                </label> --}}
                    <label>
                        {{-- <iframe width="260" height="126" src="https://youtu.be/hcKItJkKbdM"></iframe>
                    <source src="https://youtu.be/hcKItJkKbdM"> --}}
                <img src="{{ asset('vendor/client/assets/img/dummies/foto2.jpeg') }}" width="500px" alt="">
                    {{-- <iframe class="embed-responsive-item" width="260" height="126" src="https://youtu.be/hcKItJkKbdM" allowfullscreen=""></iframe> --}}
                    </label>
					</a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-facetime-video left"></i></a>
              <span class="date">Agustus 21 <br>
					2021</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="https://youtu.be/hcKItJkKbdM">
                <h5 class="title">IPL ACNE</h5>
              </a>
              <p>
                IPL ance treatment #carahilangkanjerawat #caraamanhempasjerawat
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="#"><img  src="{{ asset('vendor/client/assets/img/dummies/foto3.jpeg') }}" width="500px" alt=""></a>
            </div>
            <div class="entry-meta">
              <a href="https://youtu.be/WZvOlxWC1YE"><i class="icon-square icon-48 icon-facetime-video left"></i></a>
              <span class="date">Desember 3 2020</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">S.A brows</h5>
              </a>
              <p>
                hari pertama sulam. kita tunggu hasil peel off dan retouch.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="#"><img src="{{ asset('vendor/client/assets/img/dummies/foto1.jpeg') }}" width="500px" alt=""></a>
            </div>
            <div class="entry-meta">
              <a href="https://youtu.be/-wpW-cbjfYA"><i class="icon-square icon-48 icon-facetime-video left"></i></a>
              <span class="date">Oktober 10 2021</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Laser Glow Black doll</h5>
              </a>
              <p>
                Laser Glow Black Doll banyak sekali memiliki manfaat
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          {{-- <div class="span3">
            <div class="post-slider">
              <!-- start flexslider -->
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <a href="post_right_sidebar.html"><img src="{{ asset('vendor/client/assets/img/dummies/work1.jpg') }}" alt=""></a>
                  </li>
                  <li>
                    <a href="post_right_sidebar.html"><img src="{{ asset('vendor/client/assets/img/dummies/work2.jpg') }}" alt=""></a>
                  </li>
                  <li>
                    <a href="post_right_sidebar.html"><img src="{{ asset('vendor/client/assets/img/dummies/work3.jpg') }}" alt=""></a>
                  </li>
                </ul>
              </div>
              <!-- end flexslider -->
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-picture left"></i></a>
              <span class="date">Sep 17 2011</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Slider post format with flexslider</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
              </p>
            </div>
            <!-- end .entry-body -->
          </div> --}}
        </div>
      </div>
    </div>
  </section>

   {{-- <section id="maincontent">
     <div class="container">
       <div class="row">
         <div class="span12">
           <div class="centered">
             <h2 class="error">404</h2>
             <h3>Sorry, that page doesn't exist!</h3>
             <p>
               The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
             </p>
           </div>
         </div>
       </div>
     </div>
   </section> --}}

 @endsection
