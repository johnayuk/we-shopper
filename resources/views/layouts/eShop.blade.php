<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        @yield('title')
    </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/mycss/template.css">
    {{-- <link rel="stylesheet" href="/mycss/main.css"> --}}
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="stylesheet" href="/mybootstrap/bootstrap.min.css">
</head><!--/head-->


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
                                <li><a href="{{route('wishlist')}}"><i class="fa fa-star"></i> WISHLIST</a></li>
								<li><a href="{{route('checkout.index')}}"><i class="fa fa-crosshairs"></i> CHECKOUT</a></li>

                                <li class="nav_user"><a href="#" class=""><i class="fa fa-user"></i> {{auth()->user()->name}}</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"><span>LOGOUT</span></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </li>
                                <li><a href="{{route('cart.index')}}"><i class="fa fa-shopping-cart"></i>
                                    CART @if(Cart::instance('default')->count() > 0)<span class="countSpan p  ml-0  "><span class="pr-1 pl-1 pt-4 pb-4 mt-3 ">{{Cart::instance('default')->count()}}</span>
                                </span>@endif </a></li>
                                    @else
                                    <li> <a href="{{route('register') }}"><i class="fa fa-sign-in"></i></i>SIGN UP</a></li>
                                    <li> <a href="{{route('login') }}"><i class="fa fa-lock"></i>LOGIN</a></li>
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

								<li class="dropdown"><a href="">SHOP<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('shop.index')}}">PRODUCTS</a></li>

										<li><a href="{{route('checkout.index')}}">CHECKOUT</a></li>
                                        <li><a href="{{route('cart.index')}}">
                                            CART @if(Cart::instance('default')->count() > 0)<span class="countSpan p  ml-0  "><span class="pr-1 pl-1 pt-4 pb-4 mt-3 ">{{Cart::instance('default')->count()}}</span>
                                        </span> @endif</a></li></a></li>
										<li><a href="{{route('login')}}">LOGIN</a></li>
                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">BLOG<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">

										<li><a href="{{route('blog-single')}}">BLOG </a></li>
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

    <section >
    @yield('content')
    </section>






    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

    @yield('scripts')
</body>
</html>
