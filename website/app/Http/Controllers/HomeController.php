<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Session;
use Stripe;

use Illuminate\Support\Facades\Auth;  //this auth gives the currect user information

class HomeController extends Controller
{
    public function index(){
        $user = User::where('usertype','user')->get()->count();
        $product = Product::all()->count();
        $order = Order::all()->count();
        $deliver = Order::where('sts','Delivered')->get()->count();
        
        return view('admin.index',compact('user','product','order','deliver'));
    }
    public function home(){
        $product = Product::all();
        $count=0;
        $orderCount=0;
        if (Auth::id()) {
                $userId = Auth::user()->id;
                $count = Cart::where('user_id', $userId)->count();
                $orderCount = Order::where('user_id',$userId)->count();
            }
        // $user = Auth::user();
        // $userid= $user->id;
        // $count = Cart::where('user_id', $userid)->count();
        return view('home.index',compact('product','count','orderCount'));
    }
    public function login(){
        $product = Product::all();
        $count=0;
        if (Auth::id()) {
                $userId = Auth::user()->id;
                $count = Cart::where('user_id', $userId)->count();
                $orderCount = Order::where('user_id',$userId)->count();
            }
       
       
        

        // if (Auth::check()) {
        //     $userId = Auth::user()->id;
        //     $count = Cart::where('user_id', $userId)->count();
        // }

        return view('home.index',compact('product','count','orderCount'));

    }
    public function product_det($id){
        $product = Product::find($id);
        $count=0;
        if (Auth::id()) {
                $userId = Auth::user()->id;
                $count = Cart::where('user_id', $userId)->count();
                $orderCount = Order::where('user_id',$userId)->count();
                
            }
        return view('home.product_details',compact('product','count','orderCount'));

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
        $orderCount =0;
        if (Auth::id()) {
                $userId = Auth::user()->id;
                $count = Cart::where('user_id', $userId)->count();
                $cart= Cart::where('user_id',$userId)->get();
                $orderCount = Order::where('user_id',$userId)->count();
            }
        return view('home.mycart',compact('count','cart','orderCount'));
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
        toastr()->closeOnHover(true)->success('Order Done');

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
    public function myorder(){
        $userId = Auth::user()->id;
        $count = Cart::where('user_id', $userId)->count();
        $order = Order::where('user_id',$userId)->get();
        $orderCount = Order::where('user_id',$userId)->count();
        return view('home.myorder',compact('count','order','orderCount'));
    }
    public function cancle_order($id){
        $data = Order::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function stripe()
    {
        return view('home.stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    Stripe\Charge::create ([

                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);

        Session::flash('success', 'Payment successful!');
        return back();

    }
  
}
