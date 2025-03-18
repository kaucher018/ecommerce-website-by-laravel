<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\Auth;  //this auth gives the currect user information

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function home(){
        $product = Product::all();
        $count=0;
        if (Auth::id()) {
                $userId = Auth::user()->id;
                $count = Cart::where('user_id', $userId)->count();
            }
        // $user = Auth::user();
        // $userid= $user->id;
        // $count = Cart::where('user_id', $userid)->count();
        return view('home.index',compact('product','count'));
    }
    public function login(){
        $product = Product::all();
        $user = Auth::user();
        $userid= $user->id;
        $count = Cart::where('user_id', $userid)->count();
       
        

        // if (Auth::check()) {
        //     $userId = Auth::user()->id;
        //     $count = Cart::where('user_id', $userId)->count();
        // }

        return view('home.index',compact('product','count'));

    }
    public function product_det($id){
        $product = Product::find($id);
        $count=0;
        if (Auth::id()) {
                $userId = Auth::user()->id;
                $count = Cart::where('user_id', $userId)->count();
            }
        return view('home.product_details',compact('product','count'));

    }

    public function add_cart($id){

        $product_id = $id;

        $user = Auth::user();
        $user_id = $user->id;

        $data = new Cart;
        $data->user_id = $user_id;
        $data->product_id = $product_id;

        $data->save();
        return redirect()->back();



    }
    public function mycart(){
        $count=0;
        if (Auth::id()) {
                $userId = Auth::user()->id;
                $count = Cart::where('user_id', $userId)->count();
                $cart= Cart::where('user_id',$userId)->get();
            }
        return view('home.mycart',compact('count','cart'));
    }
    public function order(Request $req)
    {
        $name = $req->name;
        $add = $req ->address;
        $phone = $req -> phone;
        $userId = Auth::user()->id; // get current user id 
        $cart = Cart::where('user_id',$userId)->get(); // get data from cart table by userId

        foreach($cart as $carts){
         $order = new Order();
         $order->name = $name;
         $order -> rec_address = $add;
         $order ->phone = $phone;
         $order->user_id = $userId;
         $order->product_id = $carts->product_id;

         $order->save();

        }
        $cart_remove = Cart::where('user_id',$userId)->get();
        foreach($cart_remove as $remove){
            $data = Cart::find($remove->id);
                $data ->delete();
                
            
        }

        return redirect()->back();

   
    }
    public function cart_delay($id){
        $data = Cart::find($id);
        $data->delete();
        toastr()->success('Successfully deleted a product ');
        return redirect()->back();

    }

    public function pdf($id){
        $data = Order::find($id);
        $pdf = Pdf::loadView('admin.invoice',compact('data'));
        return $pdf->download('cash memo.pdf');
        // return view('admin.invoice',compact('data'));
    }
  
}
