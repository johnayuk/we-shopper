@extends('layouts.eShop')


@section('title')
Shop | E-Shopper
@endsection

@section('content')
<section class="aftervisitproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>By Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->


                        @foreach ($categories as $category )
                        <div class="panel panel-default">
                            <div class="panel-heading ">
                                <li class="{{request()->category == $category->slug ? 'active' : '' }}panel-title"><a href="{{route('shop.index', ['category' => $category->slug]) }}">{{$category->name}}</a></li>
                            </div>
                        </div>
                        @endforeach


                    </div>

                    <!--/category-products-->
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <div class="product-header">
                        <h2 class="title text-center">{{$categoryName}}</h2>
                        <div>
                            <strong>PRICE</strong>
                            <a href="{{route('shop.index', ['category'=>request()->category, 'sort' =>'low_high'])}}">Low to High</a>&nbsp;|
                            <a href="{{route('shop.index', ['category'=>request()->category, 'sort' =>'high_low'])}}">High to Low</a>
                        </div>
                    </div>


                    @forelse ($products as $product )
                    <div class="col-sm-4  ">
                        <div class="product-image-wrapper" style="height: 340px">
                            <div class="single-products " >
                                <div class="productinfo text-center pt-4 pl-2 pr-2 singleProductdiv ">
                                    <img src="{{url('/images/'.$product->slug)}}" alt="laptop" class="rounded singleProductImg" style="width: 200px; height:140px;">
                                        <h1 class="pb-2 pt-4">{{'$ '.$product->price}}</h1>
                                        <p  class="pb-2">{{$product->name}}</p>
                                        <p  class="pb-2">{{$product->details}}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay my-overlay  ">
                                    <div class="overlay-content pt-4 pl-2 pr-2">
                                        <h1  class="pb-2 pt-4 white">{{'$ '.$product->price}}</h1>
                                        <p  class="pb-2">{{$product->name}}</p>
                                        <p  class="pb-2">{{$product->details}}</p>

                                        <form action="{{route('cart.store')}}" method="post" >
                                            @csrf
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="hidden" name="name" value="{{$product->name}}">
                                            <input type="hidden" name="price" value="{{$product->price}}">

                                            <button type="submit"class="btn btn-default add-to-cart myAddToClass"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                      <center> <div class="text" style="color: rgb(2, 7, 14)"><h3>No Item Found</h3></div></center>
                    @endforelse

                </div><!--features_items-->
                {{$products->appends(request()->input())->links()}}
            </div>
        </div>
    </div>


</section>





@endsection

@section('scripts')

@endsection



