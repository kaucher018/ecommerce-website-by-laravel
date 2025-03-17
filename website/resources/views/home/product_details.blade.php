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
    @include('home.header')
    <!-- end header section -->
    
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
           Product details
        </h2>
      </div>
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