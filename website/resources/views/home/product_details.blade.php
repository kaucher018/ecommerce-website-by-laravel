<!DOCTYPE html>
<html>

<head>
  @include('home.css')
<style>
  .cen{
           margin-top:10px;
            
            border:2px solid skyblue;
            width: 100%;
            text-align: center;
            position: relative;
            height:30px;
            justify-content: center;
            align-items: center;
            font-size: large;
            background-color: skyblue;
            color: white;
          }
          .center{
            position: relative;
            left: 30%;
          }
</style>



</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
   <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Product Details
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
            <li class="nav-item active">
               <a class="nav-link" href="{{ url('shop') }}">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.html">
                Why Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.html">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
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
    <!-- end header section -->
    
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="center">
      <div class="row">
        <div class=" col-md-5 ">
          <div class="box">
            <a href="">
            <h6 class="cen">
                  {{$product->title}}
                </h6>
              <div class="img-box">
                <img width="100" src="/products/{{$product->image}}" alt="">
              </div>
              <div class="detail-box">
                
                <h6>
                  Price
                  <span>
                  {{$product->price}}
                  </span>
                </h6>
                <h6>
                  Catagory:
                  <span>
                  {{$product->catagory}}
                </span>
                </h6>
                <h6>
                  Available Qunatity:
                  <span>
                  {{$product->quantity}}
                </span>
                </h6>
                
              </div>
              <div class="detail-box">
                {{$product->description}}

              </div>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</div>
  <!-- end shop section -->



  <!-- contact section -->



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