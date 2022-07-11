
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
        {{-- <div class="span12">
          <ul class="filter">
            <li class="all active"><a href="#" class="btn btn-color">All categories</a></li>
            <li class="web"><a href="#" class="btn btn-color">Web design</a></li>
            <li class="brand"><a href="#" class="btn btn-color">Brand identity</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
          </ul>
        </div> --}}
      </div>
      <div class="row">
        <ul class="portfolio-area da-thumbs">
            @foreach ($products as $product)
          <li class="portfolio-item2" data-id="id-0" data-type="web">
              <div class="span3">
                  <div class="thumbnail">
                <div class="image-wrapp">

                    <img src="{{ Storage::url('public/images/').$product->picture }}" alt="Portfolio name" title="" />
                    <article class="da-animate da-slideFromRight" style="display: block;">
                        <h4>{{ $product->name }}</h4>
                        <a href="portfolio-detail.html"></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="{{ Storage::url('public/images/').$product->picture }}">
                           <Center><i class="icon-rounded icon-48 icon-zoom-in"></i></Center>
						</a></span>
                    </article>
                </div>
            </div>
        </div>
    </li>

    @endforeach
</ul>
      </div>
      <div class="row">

    </div>
  </section>
  <!-- Footer
 ================================================== -->


 @endsection
