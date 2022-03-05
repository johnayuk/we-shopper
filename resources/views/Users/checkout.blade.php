@extends('layouts.eShop')


@section('title')
Check out | E-Shopper
@endsection

@section('content')

<section id="cart_items checkout-container">
    <div class="container ">
        <div class="breadcrumbs">

              <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home </a></li>
                <li class="active">Check out</li>
              </ol>


    </div>
        <div class="container-fluid ">
            <div class="row">

                <div class="col-sm-3">
                    <div class="">
                    <h4 class="mb-5">Shopping Information</h4>
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            <div class="row" style="margin-bottom:40px;">


                             @if (auth()->user())

                                    <input class=" mb-4 form-control"  type="text" placeholder="Email*"  name="email" readonly value="{{auth()->user()->email}}">




                                    <input class="mb-4 form-control" type="text" placeholder="Name*" readonly value="{{auth()->user()->name}}">







                            @else



                            <input type="text" placeholder="Email*" required  name="email" value="{{old('email')}}"  class=" mb-4 form-control @error('email') is-invalid @enderror">
                            <input type="text" placeholder="Name*" required value="{{old('name')}}"  class=" mb-4 form-control @error('email') is-invalid @enderror">

                            @endif


                            <input type="hidden"  name="quantity" value="{{Cart::instance('default')->count()}}"  class=" mb-4form-control @error('email') is-invalid @enderror">

                            <input type="hidden" name="amount"  value=""  class=" mb-4form-control @error('email') is-invalid @enderror">




                            <input type="text" required  placeholder="Address "  class=" mb-4 form-control @error('email') is-invalid @enderror">
                            <input type="text" required  placeholder="Country*"  class="mb-4 form-control @error('country') is-invalid @enderror">
                            <input type="text" required  placeholder="Phone*"  class=" mb-4 form-control @error('phone') is-invalid @enderror">


                                    <input type="hidden" name="currency" value="NGN">



                                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                                    <p class="justify-center">
                                        <button class=" mt-4 btn btn-primary btn-lg " type="submit" value="Pay Now!">
                                            <i class="fa fa-plus-circle fa-lg"></i> Complete Order!
                                        </button>
                                    </p>

                                </div>

                        </form>


                    </div>
                </div>

                <div class="col-sm-9">
                    <div id="cart_items">



                            @if(Cart::count() > 0)
                                @if (session('success_message'))
                                <div class="alert alert-primary pl-4 ml-4" role="alert">
                                    <h4 class="pb-0 mb-0 p ">{{ session('success_message') }}</h4>
                                </div>
                                @endif
                                  <h4 class="mb-5">Review Your Order</h4>
                            <div class="table-responsive cart_info">

                                <table class="table table-condensed">
                                    <thead>
                                        <tr class="cart_menu">
                                            <td class="image">Item</td>
                                            <td class="description">Details</td>
                                            {{-- <td class="total">Price</td> --}}
                                            <td class="quantity">Quantity</td>
                                            <td class="">Total</td>
                                            {{-- <td>Actions</td> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(Cart::content() as $item)
                                        <tr>

                                            <td class="cart_product">
                                                <img src="{{url('/images/'.$item->model->slug)}}" alt="laptop" class="rounded" style="width: 200px; height:140px;">
                                            </td>
                                            <td class="cart_description">
                                                <h4>{{$item->model->name}}</h4>
                                                <h4>{{$item->model->details}}</h4>
                                                <h4 class="">{{$item->model->description}}</h4>
                                            </td>
                                            {{-- <td class="cart_h4rice">
                                                <h4 class=""> {{$item->model->h4resenth4rice()}} </h4>
                                            </td> --}}
                                            <td class="cart_quantity">
                                                <div class="cart_quantity_button">
                                                    <div class="form-group">
                                                      <center><h3 class="">{{$item->qty}}</h3></center>

                                                      </div>
                                                </div>
                                            </td>
                                            <td class="cart_price">
                                                <h3 class="total">{{ '$ '.$item->subtotal}}</h3>
                                                {{-- <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Description</div>
                                                </div> --}}
                                            </td>
                                            {{-- <td class="cart_delete">
                                                <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    {{-- <button type="submit" class="p cartDeletBtn">Remove</button>
                                                    <button type="submit" class="btn btn-primary form-buttons cardBtns checkDeleteBtn">Delete</button>
                                                </form>

                                            </td> --}}
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                            <td colspan="4">
                                                <table class="table table-condensed total-result ">
                                                    <tr>
                                                        <td><strong>Cart Sub Total</strong></td>
                                                        <td><span>{{'$ '.Cart::subtotal()}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total</strong></td>
                                                        <td><span>{{'$ '.Cart::total()}}</span></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>






                            @else

                            <div class="ml-2 pb-4 ">
                                <h3 class="p pl-4 pb-2">No Item To Checkout</h3>
                                <a href="{{route('shop.index')}}" class=" cardBtns btn btn-primary form-buttons">Shop Now!</a>
                            </div>

                            @endif
                        </div>


                    </div> <!--/#cart_items-->
                </div>
            </div>
        </div>


</section>
@endsection

@section('scripts')

@endsection




