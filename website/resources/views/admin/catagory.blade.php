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
          input[type='text']
          {
            width: 400px;
            height: 50px;
          }
          .div{
            display:flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
          }
          .table{
            width: 69%;
            margin: auto;
            align-items: center;
            margin-top: 50px;
            border:2px solid yellowgreen;
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
            border:1px solid yellowgreen;
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
            <h3 class="div" style="color: aliceblue;">Add catagory</h3>
   <div class="div"> 
     
<form action="{{url('add_catagory')}}" method="post">
  @csrf
  <input type="text" name="catagory">
  <input class="btn btn-primary" type="submit">
</form>


</div> 




<div>
  <table class="table">
<tr>
<th>Catagry name </th>
<th>Delete </th>
<th>Edit </th>
</tr>
@foreach($data as $data)
<tr>
<td>{{$data->catagory_name}}</td>
<td>
  <a class="btn btn-danger"  href="{{url('delete_cat',$data->id)}}"> Delete</a>
</td>
<td>
<a class="btn btn-primary"  href="{{url('edit_cat',$data->id)}}"> Edit</a>
</td>
</tr>
@endforeach
</table>
</div>


      </div>



    </div>
    <!-- JavaScript files-->


  <!-- for sweet alrt -->
     <!-- <script type= "text/javascript">
function confirmation(ev)
{
  ev.preventeDefault();
  var urltoredirect = ev.currentTarget.getAttribute('href');
  console.log(urltoredirect);

  swal({
    title: "Are you sure , you should delete this?",
    text: "if once you delete this , you father also cannot come back this data";
    Button: true,
    dangermode: true,
    icon: "warning"

  });
.then((willCancle)=>{
  if(willCancle){
    window.location.href=urltoredirect;
  }
});
 </script>
} -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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