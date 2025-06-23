<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      
      <div class="row">
        @foreach($product as $products)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="products/{{$products->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  {{$products->title}}
                </h6>
                <h6>
                  Price
                  <span>
                  {{$products->price}}
                  </span>
                </h6>
              
              </div>
                <div>
                  <a href="{{url('product_det',$products->id)}}" class="btn btn-success">Details</a>
                   <a href="{{url('add_cart',$products->id)}}" class="btn btn-primary">Add to cart</a>
                </div>
                
                 
               
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>


@endforeach

        
      </div>
      <div class="btn-box">
        <a href="{{url('view_product')}}">
          View  Products
        </a>
      </div>
    </div>
  </section>