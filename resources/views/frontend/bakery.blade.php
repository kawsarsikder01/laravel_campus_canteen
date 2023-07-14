<x-master>
    <section id="bakery">
        <h3>Bakery Item</h3>
        <div class="bakery container">
          @foreach ($products as $product)
          @if ($product->categories->name == "Bakery" || $product->categories->name == "bakery")
          <div class="card" style="width: 18rem;">
           <a href="#"><img src="{{asset('image/'.$product->image)}}" height="300" class="card-img-top" alt="..."></a>
           <div class="card-body">
             <h5 class="card-title">{{$product->name}}</h5>
             <a href="/get_product={{$product->id}}" class="btn btn-primary">Add to Cart</a>
             <p>tk {{$product->cost_price}}</p>
           </div>
         </div>
          @endif
       @endforeach
        </div>
      </section>

</x-master>