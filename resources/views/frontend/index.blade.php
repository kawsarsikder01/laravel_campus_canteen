<x-master>
<x-partial.slider/>
<!--Shop Section-->
<section id="shop">
    <h3>Shop</h3>
    <div class="container shop"id="">
       @foreach ($products as $product)
       <div class="card"style="width:18rem;">
        <img src="{{asset('image/'.$product->image)}}"height="300" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
            <a href='#' class='btn btn-primary d-inline-block'>Add to Cart</a>
            <p>{{$product->sell_price}}</p>
        </div>
    </div>
       @endforeach
            
    </div>
  </section>
</x-master>