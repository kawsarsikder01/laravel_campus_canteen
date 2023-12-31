<header class="header">
      <nav class="navbar navbar-expand-lg bg-body-tertiary  bg-dark"data-bs-theme="dark">
        <div class="container my-2">
          <a class="navbar-brand" href="#">College <span class="text-warning">Canteen</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-5 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('menu')}}">Menu</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="{{route('front_categorie')}}">Categorey</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reservation.html">Reservation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('app_about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
              </li>
              @if (Auth::user() == null)
              <li class="nav-item">
                <a class="nav-link" href="{{route('userlogin')}}">Login</a>
              </li>
              @endif
            </ul>
            <a class="btn btn-info shopping-cart mx-4"><i class="fa fa-shopping-cart text-light "></i></a>
            @if (Auth::user() != null )
            <a href="#" class=" users mx-4"><img src="{{asset('image/'.Auth::user()->image)}}" height="45" width="45" style="border-radius: 50%;" alt=""></a>
            @endif
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
          </div>
        </div>
      </nav>
      <div class="sidebar cart-items">
        <div class="head"><p>My Cart</p></div>
        <div id="cartItem">
      @if (session('cart'))
          @foreach (session('cart') as $item)
          <div class="cart-item">
            <div class="row-img">
                <img class="rowimg" src="{{asset('image/'.$item['image'])}}">
            </div>
            <p style ="font-size:12px">{{$item['name']}}</p>
            <h2 style="font-size:15px;">{{$item['price']}}</h2>
            <i class='fa-solid fa-trash' id="delete" style="cursor: pointer" onclick="deleteProduct({{$item['id']}})"></i>
          </div>
          @endforeach
      @endif
           
          </div>
        <div class="foot">
            <h3>Total</h3>
            <h2 id="total">tk .00</h2>
        </div>
    </div>
    <div class="user">
      <a href="">manage my account</a>
      <a href="">my orders</a>
      <a href="">My Reviews</a>
      <a href="">My Returns & Cancellation</a>
      <a href="shipping_address.html">shipping address</a>
      <a href="{{route('logout')}}">Logout</a>
    </div>
    </header>
