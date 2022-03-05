<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->category);
            })->get();
            $categories = Category::all();
            $categoryName = $categories->where('slug', request()->category)->first()->name;
        }


        else{

        $products = Product::where('featured', true)->inRandomOrder()->take(8)->get();
        $categories = Category::all();
        $categoryName = 'Featured Items';

        }


        return view('home')->with([
            'products' =>  $products,
            'categories'=> $categories,
            'categoryName' => $categoryName,

        ]);




    }
}
