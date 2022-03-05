<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Middleware\AdminMiddleware;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();
        return view('Admin.products', compact( 'products'));
    }

    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
            return view('Admin.single-product' )->with(
                'product', $product);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.add-product')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
           "price"=>"required",
           "details"=>"required",
            "description"=>"required",
            "featured"=>"",
            'slug' => 'required|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
          ]);


       $product_Details = new Product();
        $image = $request->file('slug');
        $filename = $image->getClientOriginalName();
        $image->move('images/',$filename);
        // $image_resize = Image::make('images/'.$filename);
        // $image_resize->fit(200, 500);
        // $image_resize->save();

        $product_Details->name = $request->name;
        $product_Details->price = $request->price;
        $product_Details->details = $request->details;
        $product_Details->description = $request->description;
        $product_Details->category_id = $request->category_id;
        $product_Details->featured = $request->featured;
        $product_Details->slug = $filename;


       $product_Details->save();



       return back()
       ->with('status','New product added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
           "price"=>"required",
           "details"=>"required",
            "description"=>"required",
            "featured"=>"",
            'slug' => 'required|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',

          ]);





         $product_Details = Product::findOrFail($id);
         $image = $request->file('slug');
         $filename = $image->getClientOriginalName();
         $image->move('images/',$filename);
        //  $image_resize = Image::make('images/'.$filename);
        //  $image_resize->fit(150, 350);
        //  $image_resize->save();

         $product_Details->name = $request->name;
         $product_Details->price = $request->price;
         $product_Details->details = $request->details;
         $product_Details->description = $request->description;
         $product_Details->category_id = $request->category_id;
         $product_Details->featured = $request->featured;
         $product_Details->slug = $filename;


        $product_Details->update();
        return redirect('/admin/products')->with('status','Product updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/admin/products')->with('status','Product deleted successfuly');
    }




    // public function index()
    // {
    //     $products = Product::all();
    //     $users = User::all();
    //     return view('Admin.admin_Dash_board', compact('products', 'users'));
    // Route::get('/admin_Dash_board', 'Admin\AdminLandingPageController@index')->name('adminLandingPage');

}
