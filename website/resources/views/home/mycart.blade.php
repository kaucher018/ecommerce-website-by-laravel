<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
    .cart-card img {
      max-width: 80px;
      height: auto;
    }

    .cart-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      background-color: #f9f9f9;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .cart-total {
      font-size: 20px;
      font-weight: bold;
    }

    .order-form {
      background: #f0f8ff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .text-center-custom {
      text-align: center !important;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html"><span>Giftos</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('shop') }}">Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('why') }}">Why Us</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('testimonial') }}">Testimonial</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact Us</a></li>
          </ul>

          <div class="user_option">
            @if (Route::has('login'))
              @auth
                <a href="{{url('mycart')}}"><i class="fa fa-shopping-bag active"></i>{{$count}}</a>
                <a href="{{url('myorder')}}">Myorder</a>
                <form class="form-inline">
                  <button class="btn nav_search-btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <input type="submit" value="Logout" class="btn btn-success" style="margin-left: 20%;">
                </form>
              @else
                <a href="{{url('/login')}}"><i class="fa fa-user"></i><span>Login</span></a>
                <a href="{{url('/register')}}"><i class="fa fa-vcard"></i><span>Register</span></a>
              @endif
            @endauth
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

    <!-- cart section -->
    <div class="container py-4">
      @if($cart->isEmpty())
        <div class="alert alert-warning text-center" role="alert">
          <i class="fa fa-info-circle"></i> No product added in your cart.
        </div>
      @else
        <div class="row justify-content-center">
          <?php $value = 0; ?>
          @foreach($cart as $cart)
            <div class="col-md-6 col-lg-4">
              <div class="cart-card">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h5>{{ $cart->product->title }}</h5>
                    <p><strong>Price:</strong> ${{ number_format($cart->product->price, 2) }}</p>
                    <a href="{{ url('cart_delay', $cart->id) }}" class="btn btn-sm btn-danger">Remove</a>
                  </div>
                  <div>
                    <img src="/products/{{ $cart->product->image }}" alt="Product image">
                  </div>
                </div>
              </div>
            </div>
            <?php $value += $cart->product->price; ?>
          @endforeach
        </div>

        <!-- total cost -->
        <div class="text-center mt-4 mb-3 cart-total">
          Total Cost: ${{ number_format($value, 2) }}
        </div>

        <!-- order confirmation form -->
        <div class="order-form mx-auto mt-3" style="max-width: 600px;">
          <h5 class="mb-3 text-center">Confirm Order</h5>
          <form action="{{url('order')}}" method="post">
            @csrf 
            <div class="form-group">
              <label for="name">User Name</label>
              <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" required>
            </div>
            <div class="form-group">
              <label for="address">User Address</label>
              <input type="text" name="address" class="form-control" value="{{Auth::user()->address}}" required>
            </div>
            <div class="form-group">
              <label for="phone">User Phone</label>
              <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone}}" required>
            </div>
            <div class="form-group text-center">
              <input type="submit" class="btn btn-primary" value="Cash on Delivery">
              <a href="{{url('stripe')}}" class="btn btn-success">Payment on Card</a>
            </div>
          </form>
        </div>
      @endif
    </div>

    <!-- contact section -->
    @include('home.contact')

    <!-- footer section -->
    @include('home.footer')

    <!-- scripts -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
