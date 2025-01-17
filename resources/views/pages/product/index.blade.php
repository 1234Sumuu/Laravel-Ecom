@extends('layouts.master')
@section('content')

{{-- sidebar + content --}}

<div class="container margin-top-20">
  <div class="row">
    @include('partials.sidebar')
   
      {{-- <div class="col-md-4">
          <ul class="list-group list-group-horizontal">
              <li class="list-group-item">First item</li>
              <li class="list-group-item">Second item</li>
              <li class="list-group-item">Third item</li>
              <li class="list-group-item">Fourth item</li>
             
            </ul>
      </div> --}}
      <div class="col-md-8">
          <div class="widget">
              <h3>All Products</h3>
              <div class="row">
                @foreach ($products as $product)
               
                  <div class="col-md-3">
                      <div class="card">
                        @php
                            $i =1;
                        @endphp
                        @foreach ($product->images as $image)
                          @if ($i >0)
                          <img class="card-img-top feature-img" src="{{asset('images/products/'.$image ->image) }}" alt="Card image"> 
                          @endif
                          @php
                              $i--;
                          @endphp
                          @endforeach
                          <div class="card-body">
                            <h4 class="card-title">
                              {{$product ->title}}
                            </h4>
                            <p class="card-text">Taka - {{$product ->price}}</p>
                            <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                          </div>
                    </div>
                  </div>
                  @endforeach

              </div>
                </div>
                <div class="widget">

                </div>
          </div>
    
  </div>
</div>
{{-- end sidebar +content --}}
@endsection