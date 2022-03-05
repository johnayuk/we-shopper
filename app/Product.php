<?php

namespace App;
use money_format;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart;

class Product extends Model

{

    public function categories(){
        // return $this->belongsTo('App\Category');
        return $this->belongsTo('App\Category','_id');

      }
    // public function presentPrice()
    // {

    //     $price = $this->price / 100;
    //     $price = "$ ".number_format($price, 2);
    //     return $price;

    //     $price = $this->price / 100;
    //     $price = "$ ".number_format($price, 2);
    //     return $price;
    // }

    // public function subtotal()
    // {
    //     $subtotal = Cart::subtotal();
    //     $price = $this->$subtotal  / 100;
    //     $price = "$ ".number_format($price, 2);
    //     return $price;

    //     $price = $this->price / 100;
    //     $price = "$ ".number_format($price, 2);
    //     return $price;
    // }

    // number_format($price, 2)

    protected $fillable = [
        'name', 'slug','price', 'details','description', 'featured' , 'category_id'
    ];

    public function scopeMightAlsoLike($query){
        return $query->inRandomOrder()->take(4);
    }

}
