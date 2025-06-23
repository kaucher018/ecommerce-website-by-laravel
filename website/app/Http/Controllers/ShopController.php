<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Auth;

class ShopController extends Controller
{
    function index(){
     $product = Product::all();
         $count=0;
         $orderCount=0;
         if(Auth::id()){
             $userId = Auth::user()->id;
             $count = Cart::where('user_id', $userId)->count();
             $orderCount = Order::where('user_id',$userId)->count();
         }
       

        return view('Shop.shop',compact('count','product','orderCount'));
    }
}
