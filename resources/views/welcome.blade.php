

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome | E-Shopper</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/mycss/template.css">

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	<header id="header  "><!--header-->
		<div class="header-middle nav-color"><!--header-middle-->
			<div class="container">
				<div class="row">
                    <div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="/"><img src="img/logo3.png" alt="" style="width: 15%"/></a>
						</div>

					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu  pull-right">
							<ul class="">

                                @auth
                                <li><a href="{{route('wishlist')}}"> <i class="fa fa-star-o" aria-hidden="true"></i> WISHLIST</a></li>
								<li><a href="{{route('checkout.index')}}"><i class="fa fa-crosshairs" aria-hidden="true"></i> CHECKOUT</a></li>

                                <li class="nav_user"><a href="#" ><i class="fa fa-user"></i> {{auth()->user()->name}}</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"> <span>LOGOUT</span></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </li>
                                <li><a href="{{route('cart.index')}}"><i class="fa fa-shopping-cart"></i>
                                    CART @if(Cart::instance('default')->count() > 0)<span class="countSpan p  ml-0  "><span class="pr-1 pl-1 pt-4 pb-4 mt-3 ">{{Cart::instance('default')->count()}}</span>
                                </span>@endif </a></li>
                                    @else
                                    <li> <a href="{{route('register') }}"><i class="fa fa-sign-in" aria-hidden="true"></i></i>SIGN UP</a></li>
                                    <li> <a href="{{route('login') }}"> <i class="fa fa-lock    "></i> LOGIN</a></li>
                                        <li><a href="{{route('cart.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                           CART @if(Cart::instance('default')->count() > 0)<span class="countSpan p  ml-0  "><span class="pr-1 pl-1 pt-4 pb-4 mt-3 ">{{Cart::instance('default')->count()}}</span>
                                       </span> @endif</a></li></a></li>
                                @endauth



							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								{{-- @auth
                                <li><a href="{{ route('home') }}" class="">Home</a></li>
                                @else
                                <li><a href="{{ url('/') }}" class="">Home</a></li>
                                @endauth --}}

								<li class="dropdown"><a href="#">  SHOP<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('shop.index')}}"> PRODUCTS</a></li>

										<li><a href="{{route('checkout.index')}}">CHECKOUT</a></li>
                                        <li><a href="{{route('cart.index')}}">
                                            CART @if(Cart::instance('default')->count() > 0)<span class="countSpan p  ml-0  "><span class="pr-1 pl-1 pt-4 pb-4 mt-3 ">{{Cart::instance('default')->count()}}</span>
                                        </span> @endif</a></li></a></li>
										<li><a href="{{route('login')}}">LOGIN</a></li>
                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">BLOG<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">

										<li><a href="{{route('blog-single')}}">BLOG</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{route('contact')}}">CONTACT</a></li>

							</ul>
						</div>
					</div>

				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

    <section id="slider">
		<div class="container-fluid">
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
                                    <h2>Explore the Categories in the Shop</h2>
									<p>Includes multiple products, categories, a shopping cart and
                                        a checkout system  </p>

								</div>
								<div class="col-sm-7" style="height:350px">
									<img src="img/girl2.jpg" class=" girl" alt="img" />

								</div>
							</div>
							<div class="item">
								<div class="col-sm-5">
									<h1><span>E</span>-SHOPPER</h1>
                                    <h2>Explore the Categories in the Shop</h2>
									<p>Includes multiple products, categories, a shopping cart and
                                        a checkout system whith stripe integration </p>

								</div>
								<div class="col-sm-7" style="height:350px">
									<img src="img/tvs.jfif" class=" img-responsive" alt="img"/>

								</div>
							</div>

							<div class="item">
								<div class="col-sm-5">
									<h1><span>E</span>-SHOPPER</h1>
                                    <h2>Shopping With Ease</h2>
									<p>Includes multiple products, categories, a shopping cart and
                                        a checkout system whith stripe integration </p>

								</div>
								<div class="col-sm-7" style="height:350px">
									<img src="img/girl1.jpg" class=" img-responsive" alt="img"   />

								</div>

							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left angle"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="aftervisitproduct">
		<div class="container">
			<div class="row">

                </div>

				<div class="col-sm-12 padding-right">
					<div class="features_items">
						<h2 class="title text-center">{{$categoryName}}</h2>

                        @forelse ($products as $product )
                        <div class="col-sm-3" >
							<div class="product-image-wrapper" style="height: 400px">
								<div class="single-products">
										<div class="productinfo pt-4 pl-2 pr-2 text-center  ">
                                            <img src="{{url('/images/'.$product->slug)}}" alt="laptop" class="rounded" style="width: 200px; height:140px;">

											<h2>{{'$ '.$product->price}}</h2>
											<p class="">{{$product->name}}</p>
                                            <p>{{$product->details}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay my-overlay">
											<div class="overlay-content pt-4 pl-2 pr-2">
												<h2 class="pb-2 pt-4 white">{{'$ '.$product->price}}</h2>
											<p  class="pb-2">{{$product->name}}</p>
                                            <p  class="pb-2">{{$product->details}}</p>
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
						</div>
                        @empty
                        <center> <div class="text" style="color: rgb(2, 7, 14)"><h3>No Item Found</h3></div></center>
                        @endforelse


					</div><!--features_items-->
				</div>
			</div>

            {{-- for carousel  --}}


		</div>
        <center> <a  class="btn btn-primary title text-center mb-5" href="{{route('shop.index')}}">Visit Shop for More Products and Categories !</a></center>
	</section>
    {{-- <footer >
        <center><div class="container-fluid footer ">
            <h4 class="">Made with love by Ubong Paul &copy; 2021</h4>
            </div></center>
      {{-- </footer> --}}
      <footer id="footer"><!--Footer-->


		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="">

							<ul class="footerUl">
                                <h4>Quock Shop</h4>
								<li class="mb-2"><a href="">Laptops</a></li>
								<li class="mb-2"><a href="">Destops</a></li>
								<li class="mb-2"><a href="">Tvs</a></li>
								<li class="mb-2"><a href="">Appliances</a></li>
								<li class="mb-2"><a href="">Phones</a></li>
                                <li class="mb-2"><a href="">Cameras</a></li>
							</ul>

						</div>
					</div>
                    <div class="col-sm-2">
						<div class="footerUl">

							<ul class="">
                                <h4>Service</h4>
								<li class="mb-2"><a href="">Online Help</a></li>
								<li class="mb-2"><a href="">Contact Us</a></li>
								{{-- <li class="mb-2"><a href="">Order Status</a></li>
								<li class="mb-2"><a href="">Change Location</a></li>
								<li class="mb-2"><a href="">FAQ’s</a></li> --}}
							</ul>
						</div>
					</div>
					{{-- <div class="col-sm-2">
						<div class="footerUl">
							<h2>Policies</h2>
							<ul class="">
								<li class="mb-2"><a href="">Terms of Use</a></li>
								<li class="mb-2"><a href="">Privecy Policy</a></li>
								<li class="mb-2"><a href="">Refund Policy</a></li>
								<li class="mb-2"><a href="">Billing System</a></li>
								<li class="mb-2"><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div> --}}
					{{-- <div class="col-sm-2">
						<div class="">
							<h2>About Shopper</h2>
							<ul class="footerUl">
								<li class="mb-2"><a href="">Company Information</a></li>
								<li class="mb-2"><a href="">Careers</a></li>
								<li class="mb-2"><a href="">Store Location</a></li>
								<li class="mb-2"><a href="">Affillate Program</a></li>
								<li class="mb-2"><a href="">Copyright</a></li>
							</ul>
						</div>
					</div> --}}
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" /><span><button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button></span>

								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
                    <div class="col-md-8">
                        <p class="">Made with love by John Ayuk &copy; 2021</p>


                    </div>
                    <div class="col-md-4 ">
					<p class="pull-right offset-2">Designed by <span><a target="_blank" href="http://www.paul.com">JPAUL</a></span></p>

                    </div>
				</div>
			</div>
		</div>

	</footer><!--/Fo
	oter-->




    <script>
        $(document).ready(function(){
            $(".wish-icon i").click(function(){
                $(this).toggleClass("fa-heart fa-heart-o");
            });
        });
    </script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>










