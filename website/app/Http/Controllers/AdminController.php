<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\Order;


class AdminController extends Controller
{
    public function view_catagory(){
        $data = Catagory::all();
        return view('admin.catagory',compact('data'));
    }


    public function add_catagory(Request $req){
        $data = new Catagory;
        $data->catagory_name = $req->catagory;
        $data->save();
        toastr()->closeOnHover(true)->success('catagory has been added.');
        return redirect()->back();

    }

    public function delete_cat($id){
        $data = Catagory::find($id);
        $data->delete();
        toastr()->warning('you deleted a catagory');
        return redirect()->back();
   }
   public function edit_cat($id){
    $data = Catagory::find($id);
    return view('admin.edit',compact('data'));
   }

   public function edit(Request $req,$id){
    $data = Catagory::find($id);
    $data->catagory_name = $req->catagory;
    if($data->save()){
        toastr()->success('Catagory is updated');
        return redirect('view_catagory');
    }

   }

   public function add_product(){
    $cata = Catagory::all();
    return view('admin.add_product',compact('cata'));
   }

   public function upload_product(Request $req){
    $pro = new Product;
    $pro->title = $req->title;
    $pro->description = $req->description;
    $pro->price = $req->price;
    $pro->quantity = $req->quantity;
    $pro->catagory = $req->catagory;
//add image
    $img = $req->image;
    if($img){
        $imgname= time().'.'.$img->getClientOriginalExtension();
        $req->image->move('products',$imgname);
        $pro->image = $imgname;
    }

    toastr()->success('added a product ');

    $pro->save();
    return redirect()->back();
   }

   public function view_product(){
    $product = Product::paginate(3);
    return view('admin.view_product',compact('product'));
   }



   public function del_pro($id){
$product = Product::find($id);
//delete image form public folder /products;
$image_path= public_path('products/'.$product->image);
if(file_exists($image_path)){
    unlink($image_path);
}

$product->delete();
toastr()->success('deleted a product ');
return redirect()->back();
   }


   public function edit_pro($id){
    $data = Product::find($id);
    $catagory= Catagory::all();

    return view('admin.edit_product',compact('data','catagory'));

   }

   public function edit_product(Request $req,$id){
    $data = Product::find($id);
    $data->title=$req->title;
    $data->description=$req->description;
    $data->quantity=$req->quantity;
    $data->price=$req->price;
    $data->catagory=$req->catagory;

//add image
$img = $req->image;
if($img){
    $imgname= time().'.'.$img->getClientOriginalExtension();
    $req->image->move('products',$imgname);
    $data->image = $imgname;
}


    toastr()->success('edit a product ');

    $data->save();
    return redirect()->back();

   }

   public function pro_search(Request $req){
    $search = $req->search;
    $product = Product::where('title','LIKE','%'.$search.'%')->orwhere('catagory','LIKE','%'.$search.'%')->paginate(3);

    return view('admin.view_product',compact('product','search'));

   }

   public function view_order(){
    $data = Order::paginate(5);

    return view('admin.order',compact('data'));
   }

   public function onway($id){
    $data = Order::find($id);
    $data->sts = "On the way";
    $data->save();
    return redirect()->back();
   }

   public function delivered($id){
    $data = Order::find($id);
    $data->sts = "Delivered";
    $data->save();
    return redirect()->back();

   }












}
