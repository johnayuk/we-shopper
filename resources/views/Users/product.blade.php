@extends('layouts.user')
@section('content')
<div class="container-fluid moreProductFluid1 nav2">
<div class="container ">
     <nav class="navbar navbar-expand-lg navbar-light productnav  nav pt-3 pb-3">
      <span><a href="{{route('userLandingPage')}}" class="laptopLink p iClass ">Home</a></span>
      <span><i class ="fa fa-chevron-right pl-1 pr-1 pt-2"></i></span>
      <span><a href="{{route('shop.index')}}" class="laptopLink p iClass ">shop</a></span>
      <span><i class ="fa fa-chevron-right pl-1 pr-1 pt-2"></i></span>
      <span class="p ">{{$product->name}}</span>
    </nav>
</div>
</div>
<section>
    <div class="container mt-5 pb-5 ">
        <div class="row pl-2 form-div">
            <div class="col-lg-5 pl-4 ">
                  <div class="singleProductdiv ">
                   <center> <a href="#"><img src="{{url('/storage/uploads/'.$product->slug)}}" alt="laptop" class="singleProductImg"></a></center>
                  <a href="#"class="laptopLink"><center><h4 class="mt-0 mb-0  pt-2 p"> {{$product->name}}</h4></center></a>
                  </div>
            </div>
            <div class="col-lg-5 p pl-4 pt-4">
                <h4 >{{$product->name}}</h4>
                <p>{{$product->details}}</p>
                <h5>{{$product->presentPrice()}}</h5>
                <p>{{$product->description}}</p>
              <!-- <a href="">  <button class="divBtn pt-1 pb-1">Add to cart</button></a> -->
              <form action="{{route('cart.store')}}" method="post" >
              {{csrf_field()}}
              <input type="hidden" name="id" value="{{$product->id}}">
              <input type="hidden" name="name" value="{{$product->name}}">
              <input type="hidden" name="price" value="{{$product->price}}">
              <button type="submit" class=" btn divBtn pt-1 pb-1 all-Btn">Add to Cart</button>
              </form>
              
                
            </div>
               
            
        </div>
        
    </div>

    <div class="container-fluid mightAlsoLikeFluid">
        <div class="container pt-4 pl-5">
            <p class="mb-0 p">You might also like..</p>
        <div class="row pb-3 ">
                    @foreach($mightAlsoLike as $product )
                    <div class="col-lg-3 col-md-6  productImageDiv ">
                   <a href="{{route('shop.show',$product->slug)}}"> <img src="{{url('/storage/uploads/'.$product->slug)}}" alt="laptop" class="img1"></a>
                            <a href="{{route('shop.show',$product->slug)}}" class="laptopLink p"><center><p class="mt-0 mb-0 pt-2 p">{{$product->name}} </p></center></a>
                            <center>   <p class="mt-0 mb-0 pt-1 p">{{$product->presentPrice()}}</p></center>
                    </div>
                    @endforeach
                   
                </div>
        </div>
    </div>
</section>

@endsection