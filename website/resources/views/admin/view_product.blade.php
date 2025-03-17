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
        .table{
            width: 69%;
            margin: auto;
            align-items: center;
            margin-top: 50px;
            border:2px solid yellowgreen;
            text-align: center;
          }
          h2{
            width: 69%;
            margin: auto;
            align-items: center;
            margin-top: 50px;
           color: white;
            text-align: center;
          }
          th{
            background-color:skyblue;
            padding: 15px;
            font-size: 15px;
            font-weight: bold;
            color: white;

          }
          tr{
            color: white;
           padding: 10px;
           border: 1px solid white;
          }
          td{
            border:1px solid skyblue;
            color: white;
            text-align: center;
          }
          .center{
            width: 69%;
            margin: auto;
            align-items: center;
            margin-top: 50px;
            text-align: center;
            position: relative;
            left: 45%;
          }
          .cen{
            width: 69%;
            margin: auto;
            align-items: center;
            margin-top: 50px;
            text-align: center;
            position: relative;
            left: 20%;
          }
</style>






  </head>
  <body>
  @include('admin.header')

 

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           
 <h2>All product List</h2>

 
<form action="{{url('pro_search')}}" method="get" class="cen">
<input type="search" name="search" id="" value="{{@$search}}">
<input type="submit" value="search" class="btn btn-success">
</form>


<table class="table">


    <tr>
        <th>
            Product name
        </th>
        <th>
            Description
        </th>
        <th>
            Price
        </th>
        <th>
           Quantity
        </th>
        <th>
            Catagory
        </th>
        <th>
            image
        </th>
        <th>
          Oparations
      </th>
    </tr>
    @foreach($product as $products)
    <tr>
        <td>{{$products->title}}</td>
        <td>{!!Str::limit($products->description,5)!!}</td>
        <td>{{$products->price}}</td>
        <td>{{$products->quantity}}</td>
        <td>{{$products->catagory}}</td>
        <td>
            
        <img height="70px" width="70px" src="products/{{$products->image}}" alt="No image">
        </td>
        <td>
          <a class="btn btn-success" href="{{url('edit_pro',$products->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{url('del_pro',$products->id)}}">Delete</a>
          
        </td>
    </tr>
    @endforeach
</table>

<div class="center">
  {{$product->onEachSide(1)->links()}}
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