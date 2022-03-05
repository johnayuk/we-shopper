@extends('layouts.admin')
@section('content')



    <!-- section 2 -->
    <section class="pt-3">
        <div class="container pb-5 ">
        @if (session('status'))
                        <div class="alert alert-info" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        @if ($products->count() > 0)

                        <div class="productDiv  mt-5 pl-4 " style="height: 100px">
                            <div class="row ">
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-md-6 productImageDiv">
                                        <a href="{{route('single-product',$product->slug)}}"><img src="{{url('/images/'.$product->slug)}}" alt="laptop" class="img1"></a>
                                        <a href="{{route('single-product',$product->slug)}}" class="laptopLink "><center><p class="mt-0 mb-0 pt-2 p">{{$product->name}}</p></center></a>
                                        <center> <p class="mt-0 mb-0 p">{{$product->Price}}</p></center>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        @else
                            <center>   <h3 class=" mt-5">No Item in Stock</h3></center>
                        @endif


            </div>

        </div>



@endsection
