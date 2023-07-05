@php
$navJson = file_get_contents("data_source/nav.json");
$navs = json_decode($navJson);
@endphp


<nav class="navbar navbar-expand-lg navber-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><span class="text-danger">Cumpus</span>Canteen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php
        foreach ($navs as $key => $nav):
          ?>
          <li class="nav-item">
            <a class="nav-link" href="{{route($nav->url)}}"><?php echo $nav->title ?></a>
          </li>
          <?php
        endforeach
        ?>

        <li class="nav-item">
          <form action="">
            <div class="search-container">
              <input type="text" placeholder="Search here.." class="search-input ">
              <i class="fa-sharp fa-solid fa-magnifying-glass search-icon"></i>
            </div>
          </form>
        </li>
        <li class="nav-item">
          @if (Auth::user())
          <a class="nav-link" href="{{route('logout')}}">LogOut</a>
          @else
          <a class="nav-link" href="{{route('userlogin')}}">Login</a>
          @endif
        </li>
        <li class="nav-item">
          @if (isset(Auth::user()->image))
          <a class="nav-link" href=""> <img src="{{asset('image/'.Auth::user()->image)}}" height="40" width="40" style="border-radius: 50%;" alt=""></i></a>
          @else
          <a class="nav-link" href=""><i class="fa-solid fa-user"> </i></a>
          @endif
        </li>

      </ul>

    </div>
  </div>
</nav>