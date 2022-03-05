<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Validator;
class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mightAlsoLike = Product::MightAlsoLike()->get();
       return view('Users.cart')->with('mightAlsoLike', $mightAlsoLike);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function whishlist()
    {
        return view('Users.whishlist');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicate = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if($duplicate->isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart');
        }
        Cart::add($request->id, $request->name, 1 , $request->price)
        ->associate('App\Product');
            return redirect()->route('cart.index')->with('success_message','Item has been added to the cart!');
    }

    public function addToWhishlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicate = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id){
            return $rowId === $id;
        });

        if($duplicate->isNotEmpty()) {
            return redirect()->route('wishlist')->with('success_message', 'Item is already in wishlist ');
        }

        Cart::instance('wishlist')->add($item->id, $item->name, 1 , $item->price)
        ->associate('App\Product');
            return redirect()->route('wishlist')->with('success_message','Item has been added to wishlist!');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'newQty' => 'required|numeric|between:1,10'
        ]);

        if($validator->fails()){
            session()->flash('errors', collect(['Quantity must be between 1 and 10.']));
        return response()->json(['success' => false], 400);

        }
      $qty = $request->newQty;
      $rowId = $request->rowID;
    //   update cart
    Cart::update($rowId, $qty);

   session()->flash('success_message','Item has been updated successfully!');
    return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message', 'Item has been removed successfully!');
    }
}
