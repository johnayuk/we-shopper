@extends('layouts.eShop')


@section('title')
Home | E-Shopper
@endsection

@section('content')
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-5">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Building A BETTER You</h2>
                                <p>Includes multiple products,  a shopping cart and
                                    a checkout system  </p>

                            </div>
                            <div class="col-sm-7" style="height:350px">
                                <img src="img/girl2.jpg" class=" girl" alt="img" />

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-5">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Shopping With Ease</h2>
                                <p>Includes multiple products, categories, a shopping cart and
                                    a checkout system  </p>

                            </div>
                            <div class="col-sm-7" style="height:350px">
                                <img src="img/tvs.jfif" class=" img-responsive" alt="img"/>

                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-5">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Explore the Categories </h2>
                                <p>Includes multiple products, categories, a shopping cart and
                                    a checkout system whith stripe integration </p>

                            </div>
                            <div class="col-sm-7" style="height:350px">
                                <img src="img/girl1.jpg" class=" img-responsive" alt="img"   />

                            </div>

                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section class="aftervisitproduct">
    <div class="container">
        <div class="row">
            {{-- <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>By Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->


                        @foreach ($categories as $category )
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="{{route('home', ['category' => $category->slug]) }}">{{$category->name}}</a></h4>
                            </div>
                        </div>
                        @endforeach


                    </div>

                </div>
            </div> --}}

            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">{{$categoryName}}</h2>


                    @forelse ($products as $product )
                    {{-- <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center " style="height: ">
                                        <img src="{{asset('images/'.$product->slug.'.jfif')}}" alt="laptop" class="rounded" style="width: 200px; height:140px;">

                                        <h2>{{$product->presentPrice()}}</h2>
                                        <p>{{$product->name}}</p>
                                        <p>{{$product->details}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{$product->presentPrice()}}</h2>
                                        <p>{{$product->name}}</p>
                                        <p>{{$product->details}}</p>
                                        <form action="{{route('cart.store')}}" method="post" >
                                            @csrf
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="hidden" name="name" value="{{$product->name}}">
                                            <input type="hidden" name="price" value="{{$product->price}}">

                                            <button type="submit"class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </form>

                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center productdetails " style="height: ">
                                        <img src="{{asset('images/'.$product->slug.'.jfif')}}" alt="laptop" class="rounded" style="width: 200px; height:140px;">

                                        <h2>{{$product->presentPrice()}}</h2>
                                        <p class="">{{$product->name}}</p>
                                        <p>{{$product->details}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay my-overlay">
                                        <div class="overlay-content">
                                            <h2>{{$product->presentPrice()}}</h2>
                                        <p>{{$product->name}}</p>
                                        <p>{{$product->details}}</p>
                                        <form action="{{route('cart.store')}}" method="post" >
                                            @csrf
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="hidden" name="name" value="{{$product->name}}">
                                            <input type="hidden" name="price" value="{{$product->price}}">

                                            <button type="submit"class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </form>
                                        </div>
                                    </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    {{-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    @empty
                    <center> <div class="text" style="color: rgb(2, 7, 14)"><h3>No Item Found</h3></div></center>
                    @endforelse
                </div><!--features_items-->



                <div class="recommended_items"><!--recommended_items-->
                    {{-- <h2 class="title text-center">recommended items</h2> --}}



                </div><!--/recommended_items-->

            </div>
        </div>
    </div>

    <center> <a  class="btn btn-primary title text-center mb-5" href="{{route('shop.index')}}">Visit Shop for More Products and Categories!</a></center>
</section>

    <center><footer>
        <div class="container-fluid footer ">
        <h4 class="">Made with love by Ubong Paul &copy; 2021</h4>
        </div>
      </footer></center>
@endsection

@section('scripts')

@endsection



