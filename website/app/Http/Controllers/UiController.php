<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;

class UiController extends Controller
{
    function Contact(){
       
        $count = 0;
        if(Auth::check()){
            $userId = Auth::user()->id;
            $count = Cart::where('user_id', $userId)->count();
            return view('ContactUS.contact',compact('count'));
            
        }
        return view('ContactUS.contact');
        
    }

   
     function testimonial(){
       
        $count = 0;
        if(Auth::check()){
            $userId = Auth::user()->id;
            $count = Cart::where('user_id', $userId)->count();
            return view('testimonial.testimonial',compact('count'));
            
        }
        return view('testimonial.testimonial');
        
    }
      function why(){
       
        $count = 0;
        if(Auth::check()){
            $userId = Auth::user()->id;
            $count = Cart::where('user_id', $userId)->count();
            return view('whyus.why',compact('count'));
            
        }
        return view('whyus.why');
        
    }
}
