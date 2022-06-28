
 @extends('sb-client/app')
 @section('content')
   <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Produk</h3>
              <p>
                Produk
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
        <div class="span12">
          <ul class="filter">
            <li class="all active"><a href="#" class="btn btn-color">All categories</a></li>
            <li class="web"><a href="#" class="btn btn-color">Web design</a></li>
            <li class="brand"><a href="#" class="btn btn-color">Brand identity</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <ul class="portfolio-area da-thumbs">
          <li class="portfolio-item2" data-id="id-0" data-type="web">
            <div class="span3">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="{{ asset('vendor/client/assets/img/dummies/work1.jpg') }}" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4>Portfolio name</h4>
                    <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset('vendor/client/assets/img/dummies/big1.jpg') }}">
						<i class="icon-rounded icon-48 icon-zoom-in"></i>
						</a></span>
                  </article>
                </div>
              </div>
            </div>
          </li>
          <li class="portfolio-item2" data-id="id-0" data-type="web">
            <div class="span3">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="{{ asset('vendor/client/assets/img/dummies/work2.jpg') }}" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4>Portfolio name</h4>
                    <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset('vendor/client/assets/img/dummies/big1.jpg') }}">
						<i class="icon-rounded icon-48 icon-zoom-in"></i>
						</a></span>
                  </article>
                </div>
              </div>
            </div>
          </li>
          <li class="portfolio-item2" data-id="id-0" data-type="brand">
            <div class="span3">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="{{ asset('vendor/client/assets/img/dummies/work3.jpg') }}" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4>Portfolio name</h4>
                    <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset('vendor/client/assets/img/dummies/big1.jpg') }}">
						<i class="icon-rounded icon-48 icon-zoom-in"></i>
						</a></span>
                  </article>
                </div>
              </div>
            </div>
          </li>
          <li class="portfolio-item2" data-id="id-0" data-type="photo">
            <div class="span3">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="{{ asset('vendor/client/assets/img/dummies/work4.jpg') }}" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4>Portfolio name</h4>
                    <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset('vendor/client/assets/img/dummies/big1.jpg') }}">
						<i class="icon-rounded icon-48 icon-zoom-in"></i>
						</a></span>
                  </article>
                </div>
              </div>
            </div>
          </li>
          <li class="portfolio-item2" data-id="id-0" data-type="graphic">
            <div class="span3">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="{{ asset('vendor/client/assets/img/dummies/work5.jpg') }}" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4>Portfolio name</h4>
                    <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset('vendor/client/assets/img/dummies/big1.jpg') }}">
						<i class="icon-rounded icon-48 icon-zoom-in"></i>
						</a></span>
                  </article>
                </div>
              </div>
            </div>
          </li>
          <li class="portfolio-item2" data-id="id-0" data-type="graphic">
            <div class="span3">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="{{ asset('vendor/client/assets/img/dummies/work6.jpg') }}" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4>Portfolio name</h4>
                    <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset('vendor/client/assets/img/dummies/big1.jpg') }}">
						<i class="icon-rounded icon-48 icon-zoom-in"></i>
						</a></span>
                  </article>
                </div>
              </div>
            </div>
          </li>
          <li class="portfolio-item2" data-id="id-0" data-type="photo">
            <div class="span3">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="{{ asset('vendor/client/assets/img/dummies/work7.jpg') }}" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4>Portfolio name</h4>
                    <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset('vendor/client/assets/img/dummies/big1.jpg') }}">
						<i class="icon-rounded icon-48 icon-zoom-in"></i>
						</a></span>
                  </article>
                </div>
              </div>
            </div>
          </li>
          <li class="portfolio-item2" data-id="id-0" data-type="ilustrator">
            <div class="span3">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="{{ asset('vendor/client/assets/img/dummies/work8.jpg') }}" alt="Portfolio name" title="" />
                  <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4>Portfolio name</h4>
                    <a href="portfolio-detail.html"><i class="icon-rounded icon-48 icon-link"></i></a>
                    <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset('vendor/client/assets/img/dummies/big1.jpg') }}">
						<i class="icon-rounded icon-48 icon-zoom-in"></i>
						</a></span>
                  </article>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="span12">
          <div class="pagination">
            <ul>
              <li><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer
 ================================================== -->


 @endsection
