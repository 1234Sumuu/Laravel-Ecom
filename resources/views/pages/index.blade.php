  @extends('layouts.master')
  @section('content')
  
  {{-- sidebar + content --}}

  <div class="container margin-top-20">
    <div class="row">
      @include('partials.sidebar')
     
        
        <div class="col-md-8">
            <div class="widget">
                <h3>Featured Products</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{asset('images/products/vivo.png') }}" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title">Vivo v-21</h4>
                              <p class="card-text">Price: 12,000 Tk</p>
                              <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                            </div>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="card">
                          <img class="card-img-top feature-img" src="{{asset('images/products/vivo.png') }}" alt="Card image">
                          <div class="card-body">
                            <h4 class="card-title">Vivo v-21</h4>
                            <p class="card-text">Price: 12,000 Tk</p>
                            <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                          </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top feature-img" src="{{asset('images/products/vivo.png') }}" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">Vivo v-21</h4>
                          <p class="card-text">Price: 12,000 Tk</p>
                          <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                        </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="card">
                      <img class="card-img-top feature-img" src="{{asset('images/products/vivo.png') }}" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title">Vivo v-21</h4>
                        <p class="card-text">Price: 12,000 Tk</p>
                        <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                      </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top feature-img" src="{{asset('images/products/vivo.png') }}" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Vivo v-21</h4>
                      <p class="card-text">Price: 12,000 Tk</p>
                      <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                    </div>
              </div>
            </div>
             
                </div>
                  </div>
            </div>
      
    </div>
</div>
{{-- end sidebar +content --}}
@endsection