
 @extends('sb-user/app')
 @section('content')
   <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Tretment Wajah</h3>
              <p>
                Treatment Wajah
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
            {{-- <li class="brand"><a href="#" class="btn btn-color">Brand identity</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li> --}}
          </ul>
        </div>
      </div>
      <div class="row">

        {{-- <ul class="portfolio-area da-thumbs">
          <li class="portfolio-item2" data-id="id-0" data-type="web">
            <div class="span3">
                @foreach ($treatments->where('name', 'Treatment Wajah') as $treatment)
                @foreach ($treatment->Treatments as $item)
                        <div class="thumbnail">
                            <div class="image-wrapp">
                            <img src="{{ Storage::url('public/images/').$item->picture }}" alt="Image">
                            <article class="da-animate da-slideFromRight" style="display: block;">
                                <h4>{{ $item->name }}</h4>
                                <a href="portfolio-detail.html">
                                    <i class="icon-rounded icon-48 icon-link"></i>
                                </a>
                                <span>
                                    <a class="zoom" data-pretty="prettyPhoto" href="{{ Storage::url('public/images/').$item->picture }}">
                                    <i class="icon-rounded icon-48 icon-zoom-in"></i>
                                    </a></span>
                            </article>

                            </div>
                        </div>
              @endforeach
            @endforeach
            </div>
          </li>

        </ul> --}}
        @foreach ($treatments->where('name', 'Treatment Tubuh') as $treatment)
        @foreach ($treatment->Treatments as $item)
            <div class="col=md-4">
                <div class="card" style="width: 12rem;">
                    <img src="{{ Storage::url('public/images/').$item->picture }}" alt="Image">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->name }}</h5>
                      <p class="card-text">{{ $item->description }}</p>
                      <p class="card-title">
                        <strong>Harga:</strong> RP.
                        {{ number_format($item->price)}}</p>
                      <p class="card-title"> <strong>Kuota:</strong> {{ $item->quota }}</p>
                      {{-- <a href="#" class="btn btn-color">Pesan</a> --}}

                        <form action="{{ route('basket.store')}}" method="POST">
                        {{-- <input name="customer_id" type="submit" class="btn btn-danger" value="2"> --}}
                        @csrf
                            <input name="treatment_id" type="text" value="{{ $item->id}}" class="hidden">
                            <button  class="btn btn-color" type="submit" >   <i class="fa-solid fa-cart-plus"></i></button>
                        </form>


                    </div>
                  </div>
            </div>
        @endforeach
        @endforeach

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
  <!-- Footer
 ================================================== -->


 @endsection
