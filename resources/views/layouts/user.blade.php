<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/mybootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/mycss/main.css">

        <title>START</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       
     
    </head>
    <body>
    <div class="container-fluid fluid top-nav">
            <div class="container transparent-nav">
            <nav class="navbar navbar-expand-lg navbar-light  page3nav nav pt-3 pb-3 ">
        <a class="navbar-brand logo " href="#">START</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active mt-2">
              <a class="nav-link  about" href="{{route('shop.index')}}">SHOP </a>
            </li>
            <li class="nav-item ml-0  mt-2">
              <a class="nav-link  about ml-0 pr-0 mr-0 mr-0" href="{{route('cart.index')}}">
                CART<span class="countSpan p  ml-0  "><span class="pr-1 pl-1 pt-4 pb-4 mt-3 ">{{Cart::instance('default')->count()}}</span>
                </span> 
              </a>
            </li>
            <li class="nav-item  mt-2">
              <a class="nav-link  about" href="#">ABOUT </a>
            </li>
           
          <li class="nav-item ml-3  mt-2 dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle user-li" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                </li>
                                
          
              
            </li>
           
          </ul>
          
        </div>
      </nav>
    </div>
    </div>
        @yield('content')

        <footer>
      <div class="container">
      <p class="pt-4">Made with love by Ubong Paul &copy; 2021</p>
      </div>
    </footer>











      
    
    
    <script src = "myjs/script.js"></script>     

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    </body>
</html>
