<x-master>
     <!--Bakery Category-->


     <section id="fastfood">
        <h3>Fast Food</h3>
        <div class="fastfood container">
          @foreach ($products as $product)
             @if ($product->categories->name == "Fast Food" || $product->categories->name == "fast food")
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