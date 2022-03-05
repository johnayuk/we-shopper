@extends('layouts.eShop')


@section('title')
Cart | E-Shopper
@endsection
 <script>


</script>
@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            @auth()
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Shopping Cart</li>
              </ol>
              @else
              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home </a></li>
                <li class="active quantity">Shopping Cart</li>

              </ol>
            @endauth
        </div>

        @if(Cart::count() > 0)

            @if (session('success_message'))
            <div class="alert alert-primary pl-4 ml-4" role="alert">
                <h4 class="pb-0 mb-0 p ">{{ session('success_message') }}</h4>
            </div>
            @endif
            <h4 > {{Cart::count()}} item(s) in Shopping Cart</h4>
        <div class="table-responsive cart_info">

            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Details</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="">Total</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach(Cart::content() as $item)
                    <tr>

                        <td class="cart_product">
                            <img src="{{url('/images/'.$item->model->slug)}}" alt="laptop" class="rounded" style="width: 200px; height:140px;">
                             {{-- <img src="{{url('/images/'.$item->model->slug)}}" alt="laptop" class="rounded" style="width: 200px; height:140px;"> --}}
                        </td>
                        <td class="cart_description">
                            <h4 class="mb-2">{{$item->model->name}}</h4>
                            <h4 class="mb-2">{{$item->model->details}}</h4>
                            <h4 class="">{{$item->model->description}}</h4>
                        </td>
                        {{-- <td class="cart_price">
                            <p class="cart_total_price">{{$item->model->presentPrice()}}</p>
                        </td> --}}
                        <td class="cart_price">
                            <h3 class=""> {{'$ '.$item->model->price }} </h3>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <div class="form-group">
                                    <input type="hidden" value="{{$item->rowId }}" id ="rowID{{$item->id}}">
                                    {{-- <input type="number" value="{{Cart::qty()}}" max='10' min='1' class="form-control"> --}}
                                   <select class=" selectBox quantity{{$item->id}}" id="quantity{{$item->id}}" style="width: 50%" >
                                        @for ($i = 1; $i < 10 + 1; $i++)
                                        <option {{$item->qty == $i ? 'selected': ""}}>{{$i}}</option>

                                        @endfor

                                    </select>
                            </div>
                        </td>
                        <td class="cart_price">
                            <h3 class="total"> {{'$ '.$item->subtotal  }} </h3>
                            {{-- <p class="cart_total_price"> {{$item->total}} </p> --}}
                        </td>
                        <td class="cart_delete pt-0">
                            <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button type="submit" class="btn btn-primary form-buttons cardBtns checkDeleteBtn"><strong>Remove</strong></button>
                            </form>
                            <form action="{{route('addTowishlist', $item->rowId)}}" method="POST">
                                @csrf

                                <button type="submit" class="btn btn-primary form-buttons cardBtns  checkDeleteBtn"><strong>Add to whishlist</strong></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <section id="do_action">
            <div class="container">

                <div class="row">

                    <div class="col-sm-6">
                        <div class="total_area total-result">

                            <ul>
                                <li><strong>Sub Total</strong> <span>{{ '$ '.Cart::subtotal()  }}</span></li>
                                <li><strong>Tax</strong> <span>{{ '$ '.Cart::tax()  }}</span></li>
                                <li class="total"><strong>Total</strong><span >{{ '$ '.Cart::total()}}</span></li>

                            </ul>
                               <center> <a class="btn btn-default check_out" href="{{route('checkout.index')}}">Checkout</a></center>
                        </div>
    <i class="fas fa-user-edit    "></i>
                    </div>
                </div>
            </div>
        </section><!--/#do_action-->




        @else

        <div class="ml-2 pb-4 ">
            <h3 class="p pl-4 pb-2">No item in cart!</h3>
            <a href="{{route('shop.index')}}" class=" cardBtns btn btn-primary form-buttons">Shop Now!</a>
        </div>

        @endif
    </div>


</section> <!--/#cart_items-->
{{-- <center><a  href="#" class="active quantity">click to test</a></center> --}}
@endsection

@section('scripts')
<script src="{{ asset('js/app.js')}}"></script>
 <script>
     (function(){
         const classname = document.querySelectorAll('#quantity')
         @foreach (Cart::content() as $item )
        $('#quantity{{$item->id}}').on('change keyup', function(){
           let newQty = $("#quantity{{$item->id}}").val();
           let rowID = $("#rowID{{$item->id}}").val();
           $.ajax({
            url:"{{url('/cart/update')}}",
            data:"rowID=" + rowID + '&newQty=' + newQty,
            type:"get",
            success:function(response){
                // consol.log(response);
                window.location.href = '{{route('cart.index')}}'
            }
            // Errors:function(response){
            //     window.location.href = '{{route('cart.index')}}'

            // }
           });
        });
        @endforeach
            // Array.from(classname).forEach(function(element){
            //     element.addEventListener('change', function(){
            //         axios.put('/cart/1', {
            //          quantity: 3
            //    })
            //     .then(function (response) {
            //          console.log(response);
            //      })
            //      .catch(function (error) {
            //          console.log(error);
            //      })
            //     })
            // });

     })();



 </script>
@endsection





