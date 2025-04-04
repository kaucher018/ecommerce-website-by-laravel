<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
        .table{
            width: 40%;
            margin: auto;
            align-items: center;
            margin-top: 50px;
            border:2px solid yellowgreen;
            text-align: center;
          }
        
          th{
            background-color:skyblue;
            padding: 15px;
            font-size: 15px;
            font-weight: bold;
            

          }
          tr{
         
           padding: 10px;
           border: 1px solid white;
          }
          td{
            border:1px solid skyblue;
         
            text-align: center;
          }
         
    
          </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->

  


<table border="1" class="table">
   
    <tr>
        <th>added product</th>
        <th>Price</th>
        <th>image</th>
        <th>Delay</th>
    </tr>
    <?php
$value =0;
    ?>


    
     @foreach($cart as $cart)
<tr>
    <td>
{{$cart->product->title}}
    </td>
    <td>
{{$cart->product->price}}
    </td>
    <td>
        <img width="50px" src="/products/{{$cart->product->image}}" alt="">
    </td>
    <td>
      <a href="{{url('cart_delay',$cart->id)}}" class="btn btn-danger">Remove</a>
    </td>
    <?php
    
    $value = $value + $cart->product->price;
    
    ?>
    
</tr>
@endforeach
</table>
    
<h4 class="table">Total cost :{{$value}}</h4>

<div class="table">
  <div class="table"  style="margin-bottom: 10px;">
  Confim order
</div>
<form action="{{url('order')}}" method="post" style="padding: 10px">
  @csrf 
  <label for="name">User name</label>
  <input type="text" name="name" value="{{Auth::user()->name}}">
  <br>
  <label for="address">User Address</label>
  <input type="text" name="address" value="{{Auth::user()->address}}">
  <br>
  <label for="phone">User phone</label>
  <input type="text" name="phone" value="{{Auth::user()->phone}}">
  <br>
  <input type="submit" class="btn btn-primary" value="Cash on delivery">
  <a href="{{url('stripe')}}" class="btn btn-success"> Payment on card</a>
</form>
</div>

  <!-- contact section -->

  @include('home.contact')

  <!-- end contact section -->


  

   

  <!-- info section -->

  @include('home.footer')

  <!-- end info section -->


  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>