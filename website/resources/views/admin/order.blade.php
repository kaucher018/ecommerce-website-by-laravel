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
        .center{
            width: 69%;
            margin: auto;
            align-items: center;
            margin-top: 50px;
            text-align: center;
            position: relative;
            left: 50%;
            
          }
          th{
            color: aqua;
          }
          td{
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
          <div class="container-fluid">
           <div>
           <table class="table">


<tr>
    <th>
        Costomer name
    </th>
    <th>
        Location
    </th>
    <th>
        Phone
    </th>
    <th>
       Product
    </th>
    <th>
        price
    </th>
    <th>
        image
    </th>
    <th>
        Status
    </th>
    <th>
        Change Status
    </th>
    <th>
      Download PDF
    </th>
   
</tr>
@foreach($data as $datas)
<tr>
    <td>{{$datas->name}}</td>
    <td>{{$datas->rec_address}}</td>
    <td>{{$datas->phone}}</td>
    <td>{{$datas->product->title}}</td>
    <td>{{$datas->product->title}}</td>
    <td>
        <img width="50px" src="products/{{$datas->product->image}}" alt="">
    </td>
   
   
    <td>
       @if(($datas->sts) == 'In progress')
      <span style="color: red;">{{$datas->sts}}</span></td>
    
      @elseif(($datas->sts) == 'On the way')
      <span style="color: blue;">{{$datas->sts}}</span></td>

      @else(($datas->sts) == 'Delivered')
      <span style="color: green;">{{$datas->sts}}</span></td>
      @endif
      
    <td>
        <a href="{{url('onway',$datas->id)}}" class="btn btn-primary"> On the way</a>
        <a href="{{url('delivered',$datas->id)}}" class="btn btn-success"> Delivered</a>
    </td>
    <td>
      <a href="{{url('pdf',$datas->id)}}" class="btn btn-primary">Download</a>
    </td>
    
   
</tr>
@endforeach
</table>


<div class="center">
  {{$data->onEachSide(1)->links()}}
</div>

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