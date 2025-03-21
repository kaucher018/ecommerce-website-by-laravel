<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class,'home']);

Route::get('/dashboard',[HomeController::class,'login'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('adminview',[HomeController::class,'index'])->middleware(['auth','admin']);

route::get('view_catagory',[AdminController::class,'view_catagory'])->middleware(['auth','admin']);

route::get('view_order',[AdminController::class,'view_order'])->middleware(['auth','admin']);

route::get('onway/{id}',[AdminController::class,'onway'])->middleware(['auth','admin']);
route::get('delivered/{id}',[AdminController::class,'delivered'])->middleware(['auth','admin']);

route::post('add_catagory',[AdminController::class,'add_catagory'])->middleware(['auth','admin']);
route::get('delete_cat/{id}',[AdminController::class,'delete_cat'])->middleware(['auth','admin']);
route::get('edit_cat/{id}',[AdminController::class,'edit_cat'])->middleware(['auth','admin']);
route::post('edit/{id}',[AdminController::class,'edit'])->middleware(['auth','admin']);
route::get('add_product',[AdminController::class,'add_product'])->middleware(['auth','admin']);
route::post('upload_product',[AdminController::class,'upload_product'])->middleware(['auth','admin']);

route::get('view_product',[AdminController::class,'view_product'])->middleware(['auth','admin']);
route::get('del_pro/{id}',[AdminController::class,'del_pro'])->middleware(['auth','admin']);

route::get('edit_pro/{id}',[AdminController::class,'edit_pro'])->middleware(['auth','admin']);
route::post('edit_product/{id}',[AdminController::class,'edit_product'])->middleware(['auth','admin']);
route::get('pro_search',[AdminController::class,'pro_search'])->middleware(['auth','admin']);

route::get('product_det/{id}',[HomeController::class,'product_det']);
route::get('add_cart/{id}',[HomeController::class,'add_cart'])->middleware(['auth', 'verified']);
route::get('mycart',[HomeController::class,'mycart'])->middleware(['auth', 'verified']);
route::post('order',[HomeController::class,'order'])->middleware(['auth', 'verified']);
route::get('cart_delay/{id}',[HomeController::class,'cart_delay'])->middleware(['auth', 'verified']);
route::get('pdf/{id}',[HomeController::class,'pdf'])->middleware(['auth', 'verified']);
route::get('myorder',[HomeController::class,'myorder'])->middleware(['auth', 'verified']);
route::get('cancle_order/{id}',[HomeController::class,'cancle_order'])->middleware(['auth', 'verified']);


Route::controller(HomeController::class)->group(function(){

    Route::get('stripe', 'stripe');

    Route::post('stripe', 'stripePost')->name('stripe.post');

});