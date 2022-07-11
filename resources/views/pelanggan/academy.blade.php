@extends('sb-user/app')
 @section('content')
    <section id="subintro">
        <div class="jumbotron subhead" id="overview">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="centered">
                        <h3>Academy</h3>
                        <p>
                            Academy
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
                <ul class="portfolio-area da-thumbs">
                    @foreach ($products->where('name', 'Academy') as $product)
                        @foreach ($product->Products as $item)
                        <li class="portfolio-item2" data-id="id-0" data-type="web">
                            <div class="span3">
                                <div class="thumbnail">
                                    <div class="image-wrapp">
                                        <img src="{{ Storage::url('public/images/').$item->picture }}" width="100px" alt="Image">
                                        {{-- <article class="da-animate da-slideFromRight" style="display: block;">
                                        </article> --}}
                                    </div>
                                        <p class="card-text">{{ $item->name }}</p>
                                        <p>{{ $item->description }}</p>
                                        <p class="card-text"> Diskon :{{ $item->discount  }}%</p>
                                        <p class="card-title">RP.{{ $item->price }}</p>
                                        <p class="card-title">Stok  :  {{ $item->stock }}</p>
                                    <form action="{{ route('cart.store')}}" method="POST">
                                        @csrf
                                        <input name="product_id" type="text" value="{{ $item->id}}" class="hidden">
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
            </div>
        </section>
    </div>
  <!-- Footer
 ================================================== -->
 @endsection
