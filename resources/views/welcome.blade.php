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
                      <h2>Awal</h2>
                      <br>
                      <h3>Corporate business</h3>
                      <p>
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                      </p>
                      {{-- <a class="btn btn-success" href="#">Learn more &raquo;</a> --}}
                    </div>
                    <img class="slider_img animate-in" src="{{ asset('vendor/client/assets/img/slides/sequence/logo2.png') }}" alt="">
                  </li>
                  <!-- Layer 2 -->
                  <li>
                    <div class="info">
                      <h2>Smart and fresh</h2>
                      <br>
                      <h3>Rich of features</h3>
                      <p>
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                      </p>
                      {{-- <a class="btn btn-success" href="#">Learn more &raquo;</a> --}}
                    </div>
                    <img class="slider_img" src="{{ asset('vendor/client/assets/img/slides/sequence/logo3.png') }}" alt="">
                  </li>
                  <!-- Layer 3 -->
                  <li>
                    <div class="info">
                      <h2>Far from ugly</h2>
                      <br>
                      <h3>Latest technology</h3>
                      <p>
                        Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
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
      <div class="row">
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
      </div>
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h2>Don't miss this special offer for limited time only!</h2>
                  <p>
                    Lorem ipsum dolor sit amet, vix ceteros noluisse intellegat ne, ex nec insolens liberavisse, no adhuc causae nominati duo.
                  </p>
                </div>
                <div class="btn-toolbar cta">
                  <a class="btn btn-large btn-color" href="#">
							<i class="icon-plane icon-white"></i> Try free version </a>
                  <a class="btn btn-large btn-inverse" href="#">
							<i class="icon-shopping-cart icon-white"></i> Buy license </a>
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
					<img src="{{ asset('vendor/client/assets/img/dummies/blog1.jpg') }}" alt="">
					</a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
              <span class="date">Sep 17 <br>
					2013</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">This is a standard post</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="#"><img src="{{ asset('vendor/client/assets/img/dummies/blog2.jpg') }}" alt=""></a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
              <span class="date">Sep 17 2013</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Example post image format</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="#"><img src="{{ asset('vendor/client/assets/img/dummies/blog2.jpg') }}" alt=""></a>
            </div>
            <div class="entry-meta">
              <a href="#"><i class="icon-square icon-48 icon-facetime-video left"></i></a>
              <span class="date">Sep 17 2011</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Amazing video post format</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
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
          </div>
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
