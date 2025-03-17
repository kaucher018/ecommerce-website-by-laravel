<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

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
  
}
