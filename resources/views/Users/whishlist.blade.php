@extends('layouts.eShop')


@section('title')
Wishlist | E-Shopper
@endsection

@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
        @auth()
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home </a></li>
                <li class="active">Whishlist</li>
            </ol>
            @else
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home </a></li>
                <li class="active">Whishlist</li>
           </ol>
        @endauth
        </div>
        @if(Cart::instance('wishlist')->count() > 0)
        @if (session('success_message'))
        <div class="alert alert-primary pl-4 ml-4" role="alert">
            <h4 class="pb-0 mb-0 p ">{{ session('success_message') }}</h4>
        </div>
        @endif
        <h4 >{{Cart::instance('wishlist')->count()}} item(s) in Wishlist</h4>
        <div class="table-responsive cart_info">

            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Description</td>
                        <td class="price">Price</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Cart::instance('wishlist')->content() as $item)
                    <tr>

                        <td class="cart_product">
                             <img src="{{url('/images/'.$item->model->slug)}}" alt="laptop" class="rounded" style="width: 200px; height:140px;">
                        </td>
                        <td class="cart_description">
                            <h4 class="">{{$item->model->name}}</h4>
                            <h4 class="">{{$item->model->details}}</h4>
                            <h4 class="">{{$item->model->description}}</h4>
                        </td>
                        <td class="">
                            <h3 class=""> {{'$ '.$item->model->price }} </h3>
                        </td>
                        <td class="cart_delete">
                            <form action="{{route('wishlist.destroy', $item->rowId)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                {{-- <button type="submit" class="p cartDeletBtn">Remove</button> --}}

                                <button type="submit" class="btn btn-primary form-buttons cardBtns checkDeleteBtn"><strong>Remove</strong></button>
                            </form>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="ml-2 pb-4 ">
            <h3 class="p pl-4 pb-2">No item in Wishlist!</h3>
            <a href="{{route('cart.index')}}" class=" cardBtns btn btn-primary form-buttons">Visit Cart </a>
        </div>
        @endif
    </div>
</section> <!--/#wishlist-->

@endsection

@section('scripts')

@endsection









