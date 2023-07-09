<x-master>
<!--Slider Section-->
<div id="carouselExampleInterval" class="carousel slide container my-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach ($sliders as $slider)
        
    <div class="carousel-item @if($slider->status == 1) active @endif" data-bs-interval="4000">
      <img src="{{asset('image/'.$slider->image)}}" class="d-block w-100"height="600" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5>{{$slider->heading}}</h5>
      <p>{{$slider->content}}</p>
        </div>
    </div>
    @endforeach
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Shop Section-->
<section id="shop">
    <h3>Shop</h3>
    <div class="container shop"id="shop">
       @foreach ($products as $product)
       <div class="card" style="width: 18rem;">
        <a href="#"><img src="{{asset('image/'.$product->image)}}" height="300" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <a href="#" class="btn btn-primary">Add to Cart</a>
          <p>tk {{$product->cost_price}}</p>
        </div>
      </div>
       @endforeach
            
    </div>
  </section>
</x-master>