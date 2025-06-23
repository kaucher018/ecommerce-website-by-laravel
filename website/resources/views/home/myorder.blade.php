<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Giftos
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('shop') }}">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('why') }}">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('testimonial') }}">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
            </li>
          </ul>

          <div class="user_option">
            @if (Route::has('login'))
              @auth
                <a href="{{url('mycart')}}">
                  <i class="fa fa-shopping-bag" aria-hidden="true"></i>{{$count}}
                </a>
                <a href="{{url('myorder')}}">
                  Myorder 
                </a>
                <form class="form-inline ">
                  <button class="btn nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <input type="submit" value="Logout" class="btn btn-success" padding="5px" style="margin-left: 20%;">
                </form>
              @else
                <a href="{{url('/login')}}">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>

                <a href="{{url('/register')}}">
                  <i class="fa fa vcard" aria-hidden="true"></i>
                  <span>
                    register
                  </span>
                </a>
              @endif
            @endauth       
          </div>
        </div>
      </nav>
    </header>

    <!-- Orders Table -->
  <div class="container my-5">
  @if($order->isEmpty())
    <div class="alert alert-info text-center">
      <h5>No orders found.</h5>
    </div>
  @else
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead class="thead-dark">
          <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Status</th>
            <th>Image</th>
            <th>Cancel Order</th>
          </tr>
        </thead>
        <tbody>
          <?php $value = 0; ?>
          @foreach($order as $order)
          <tr>
            <td>{{ $order->product->title }}</td>
            <td>${{ number_format($order->product->price, 2) }}</td>
            <td>{{ $order->sts }}</td>
            <td>
              <img width="60" height="60" class="img-thumbnail" src="/products/{{ $order->product->image }}" alt="">
            </td>
            <td>
              <a href="{{ url('cancle_order', $order->id) }}" class="btn btn-danger btn-sm">Cancel</a>
            </td>
            <?php $value += $order->product->price; ?>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="text-right">
      <h4><strong>Total Cost: </strong>${{ number_format($value, 2) }}</h4>
    </div>
  @endif
</div>

    @include('home.footer')

    <!-- end info section -->

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
