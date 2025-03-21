<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    
    <table border="1" class="table">
   
   <tr>
       <th>product name</th>
       <th>Price</th>
        <th>Stutas</th>
       <th>image</th>
       <th>Cancle Order</th>
      
   </tr>
   <?php
$value =0;
   ?>

    @foreach($order as $order)
<tr>
   <td>
{{$order->product->title}}
   </td>
   <td>
{{$order->product->price}}
   </td>
   <td>{{$order->sts}}</td>
   <td>
       <img width="50px" src="/products/{{$order->product->image}}" alt="">
   </td>
   <td>
    <a href="{{url('cancle_order',$order->id)}}"class="btn btn-primary"> cancle</a>
   </td>
  
   <?php
   
   $value = $value + $order->product->price;
   
   ?>
   
</tr>
@endforeach
</table>
<h4 class="table">Total cost :{{$value}}</h4>
   
 

  @include('home.footer')

  <!-- end info section -->


  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>