



@extends('layouts.user')

@section('content')

    <div class="container-fluid landingFluid1 top-nav">
        <div class="container">
            <div class="row pt-5 pb-4">
                <div class="col-lg-7 mb-5  ">
                    <h2 class="p">Ub's Laptops  Website</h2>
                   
                    <p class="p">Includes multiple products, categories, a shopping cart and
                        a checkout system whith stripe integration
                    </p>
                    <button class="blogBtn pt-1 pb-1 p ">Blog Post</button>
                    <button class="blogBtn pt-1 pb-1 p">GitHub</button>
                </div>
                <div class="col-lg-5  ">
                    <img src="/img/products/use2.png" alt="laptop" class="landingPageImage">
                </div>
            </div>
        </div>
    </div>

    <!-- section 2 -->
    <section>
        <div class="container pb-5 ">
            <div class="section2FirstDiv ">
                <center><h2 class=" mb-4 pt-5 p">Ub's Laptops </h2></center>
                <center><p  class="p-0 m-0 p">Lorem ipsum dolor sit amet consectetur, adipisicing</p> </center>
                <center><p class="p">elit. Impedit 
                architecto nostrum? Necessitatibus aut consequuntur autem quas.</p></center>
                <center><div class="btnDiv">
                <button  class="divBtn pt-1 pb-1 p">Featured</button>
                <button  class="divBtn pt-1 pb-1 p">On sale</button>
                </div></center>
            </div>
            <div class="productDiv  mt-5 pl-4 ">
                <div class="row ">
                @foreach($products as $product)
                    <div class="col-lg-3   productImageDiv">
                        <a href="{{route('shop.show',$product->slug)}}"><img src="{{url('/storage/uploads/'.$product->slug)}}" alt="laptop" class="img1"></a>
                        <a href="{{route('shop.show',$product->slug)}}" class="laptopLink "><center><p class="mt-0 mb-0 pt-2 p">{{$product->name}}</p></center></a>
                        <center> <p class="mt-0 mb-0 p">{{$product->presentPrice()}}</p></center>
                    </div>
                    @endforeach
                </div>
                <center><a href="{{route('shop.index')}}"><button class="cartbtns btn  pt-2 pb-2 ml-2 all-Btn">View more produts</button></a></center>
            </div>

            </div>

        </div>
    </section>
    <!-- section 3  -->
    <section class="section3">
        <div class="container">
        <div class="section2FirstDiv pt-4">
                <center><h2 class=" mb-4 pt-3 p">From our blog </h2></center>
                <center><p  class="p-0 m-0 p">Lorem ipsum dolor sit amet consectetur, adipisicing</p> </center>
                <center><p class="p">elit. Impedit 
                architecto nostrum? Necessitatibus aut consequuntur autem quas.</p></center>
            </div>
            <div class="blogDiv  pt-3  ">
                <div class="row ">
                    <div class="col-lg-4 col-md-6  ">
                        <div class="imageDiv p-4 ">
                            <img src="/img/bg-angular.jpg" alt="laptop" class="img1">
                            <h5 class ="blogPost pt-2 p">Blog post title 1</h5>
                            <p class ="bloPostPara pt-0 pb-2 p">Lorem ipsum dolor sit amet consectetur, adipisicing 
                             perferendis minus ipsa, aspernatur neque expedita hic nihil illo quo.
                            </p>
                          
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6  ">
                        <div class="imageDiv p-4 ">
                            <img src="/img/bg-python.jpg" alt="laptop" class="img1">
                            <h5 class ="blogPost pt-2 p">Blog post title 2</h5>
                            <p class ="bloPostPara pt-0 pb-2 p">Lorem ipsum dolor sit amet consectetur, adipisicing 
                             perferendis minus ipsa, aspernatur neque expedita hic nihil illo quo.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 ">
                        <div class="imageDiv p-4 ">
                            <img src="/img/bg-react.jpg" alt="laptop" class="img1">
                            <h5 class ="blogPost pt-2 p">Blog post title 3</h5>
                            <p class ="bloPostPara pt-0 pb-2 p">Lorem ipsum dolor sit amet consectetur, adipisicing 
                             perferendis minus ipsa, aspernatur neque expedita hic nihil illo quo.</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            </div>
        </div>
    </section>
    
        
@endsection