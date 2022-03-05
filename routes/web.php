<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'Users\WelcomeController@index');
Route::get('/sign_in', 'Users\WelcomeController@login')->name('sign_in');
Route::get('/blog-single', 'Users\WelcomeController@blog_single')->name('blog-single');
Route::get('/contact', 'Users\WelcomeController@contactPage')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







    Route::get('/admin_Dash_board', 'Admin\AdminDashboardController@index')->name('adminLandingPage');
    Route::get('/admin/products', 'Admin\ProductController@index')->name('admin-products');
Route::get('/admin/add-product', 'Admin\ProductController@create')->name('add-product-page');
Route::post('/admin/add-product', 'Admin\ProductController@store')->name('store-product');
Route::get('/admin/product{product}', 'Admin\ProductController@singleProduct')->name('single-product');
Route::put('admin/update-product{id}', 'Admin\ProductController@update')->name('update-product');
Route::delete('admin/delete-product{id}', 'Admin\ProductController@destroy')->name('delete-product');




// Route::get('/user', 'Users\UserLandingPageController@index')->name('userLandingPage');
Route::get('/shop','Users\UsersController@index')->name('shop.index');
// Route::get('/user/product/{product}','Users\userController@show')->name('shop.show');
Route::get('/cart','Users\CartsController@index')->name('cart.index');
Route::post('/cart','Users\CartsController@store')->name('cart.store');
Route::delete('/cart{product}','Users\CartsController@destroy')->name('cart.destroy');
Route::get('/cart/update','Users\CartsController@update')->name('cart.update');
Route::post('/whishlist{product}','Users\CartController@addToWhishlist')->name('addTowishlist');
Route::get('/whishlist','Users\CartController@whishlist')->name('wishlist');

Route::delete('/wishlist{product}','Users\saveforlaterController@destroy')->name('wishlist.destroy');
Route::post('/wishlist/switchToCart','Users\saveforlaterController@switchToCart')->name('saveForLater.switchToCart');


Route::get('/checkout','Users\CheckoutController@index')->name('checkout.index')
->middleware('auth');
Route::get('/guestcheckout','Users\CheckoutController@index')->name('guestcheckout.index');


Route::get('empty', function(){
    Cart::instance('saveForLater')->destroy();
});



// admin


// paystack
// Laravel 5.1.17 and above
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback')->name('call_back');




















