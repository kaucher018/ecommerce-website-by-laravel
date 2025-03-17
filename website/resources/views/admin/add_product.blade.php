<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('/admincss/vendor/bootstrap/css/bootstrap.min.css')}}">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('/admincss/vendor/font-awesome/css/font-awesome.min.css')}}">

    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('/admincss/css/font.css')}}">

    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('/admincss/css/style.default.css')}}" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('/admincss/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/admincss/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <style>
     .div{
            display:flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
          }
          label{
            display: inline-block;
            width: 220px;
            font-size: 15px;
            color: white;
          }
  </style>
  
  
    </head>
  <body>
  @include('admin.header')

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid" >
           <h1>Add product</h1>

<div class="div">
<form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
    <label for="title">Product title</label>
    <input type="text" name="title" required>
    </div>

    <div>
    <label for="description">Product Description</label>
    <input type="text" name="description" required>
    </div>

    <div>
    <label for="price">price</label>
    <input type="text" name="price" >
    </div>

    <div>
    <label for="quantity">quantity</label>
    <input type="number" name="quantity" >
   </div>

   <div>
    <label>Product catagory</label>
<select name="catagory" required>

    <option>Select a catagory</option>
        @foreach($cata as $cata)
    <option value="{{$cata->catagory_name}}">{{$cata->catagory_name}}</option>
    @endforeach
</select>
</div>

    <div>
    <label >Image</label>
    <input type="file" name="image" >
    </div>

<input type="submit" class="btn btn-primary" value="Add product">
</form>

</div>







      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>