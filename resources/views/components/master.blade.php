<!DOCTYPE html>
<html lang="en">
<x-partial.head/>
<body>

  <x-partial.header/>

{{$slot}}


<x-partial.footer/>
   <script src="{{asset('assets/assets/js/shopping_cart.js')}}"></script>
   <script src="{{asset('assets/assets/js/add_product.js')}}"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>