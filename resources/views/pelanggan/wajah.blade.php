@extends('sb-user/app')
 @section('content')
    <section id="subintro">
        <div class="jumbotron subhead" id="overview">
        <div class="container">
            <div class="row">
            <div class="span12">
                <div class="centered">
                <h3>Treatment Wajah</h3>
                <p>
                    Treatment Wajah
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

  <div class="container">
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
      <ul class="portfolio-area da-thumbs">
          @foreach ($treatments->where('name', 'Treatment Wajah') as $treatment)
          @foreach ($treatment->treatments as $item)
          <li class="portfolio-item2" data-id="id-0" data-type="web">
              <div class="span3">
                  <div class="thumbnail">
                          <div class="image-wrapp">
                          <img src="{{ Storage::url('public/images/').$item->picture }}" alt="Image">
                          <article class="da-animate da-slideFromRight" style="display: block;">
                              <h4>{{ $item->description }}</h4>
                          </article>
                        </div>
                        <p class="card-text">{{ $item->name }}</p>
                        <p class="card-title">RP.{{ $item->price }}</p>
                        <form action="{{ route('basket.store')}}" method="POST">
                            @csrf
                                <input name="treatment_id" type="text" value="{{ $item->id}}" class="hidden">
                                <button  class="btn btn-color" type="submit" >
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </form>
                    </div>
                </div>
            </li>

            @endforeach
            @endforeach
        </ul>
      {{-- <div class="row">
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
      </div> --}}
    </div>
  </section>
  </div>
  <!-- Footer
 ================================================== -->


 @endsection
