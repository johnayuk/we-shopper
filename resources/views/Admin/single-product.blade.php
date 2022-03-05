@extends('layouts.admin')
@section('content')

<section class="pt-5 ">
    <div class="container mt-5 pb-5 ">
        @if (session('status'))
        <div class="alert alert-info" role="alert">
        {{ session('status') }}
        </div>
        @endif
        <div class="row  form-div">
            <div class="col-lg-5 pl-4 ">
                  <div class="singleProductdiv ">
                   <center> <a href="#"><img src="{{url('/images/'.$product->slug)}}" alt="laptop" class="singleProductImg"></a></center>
                  <a href="#"class="laptopLink"><center><h4 class="mt-0 mb-0  pt-2 p"> {{$product->name}}</h4></center></a>
                  </div>
            </div>
            <div class="col-lg-5 p pl-4 pt-4">
                <h4 >{{$product->name}}</h4>
                <p>{{$product->details}}</p>
                <h5>{{$product->Price}}</h5>
                <p>{{$product->description}}</p>
              <!-- <a href="">  <button class="divBtn pt-1 pb-1">Add to cart</button></a> -->
              <div class = "pt-4 ">
              <button type="button"  class="btn all-Btn divBtn pt-2 pb-2 product-btn mr-2" data-toggle="modal" data-target="#myModal2{{$product->id}}">Edit Product</button>
              <button type="button"  class="btn all-Btn divBtn pt-2 pb-2 product-btn " data-toggle="modal" data-target="#myModal3{{$product->id}}">Delete Product</button>
              </div>
            </div>
        </div>
    </div>
    <!-- model  -->
    <div class="modal fade" id="myModal2{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header tcolor ">
                    <h5 class=" modelHeader" id="myModalTitle">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body myModal tcolor">
                    <form action="{{url('admin/update-product'.$product->id)}}" method="Post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" value="{{ $product->name }}"  name ="name">
                        </div>
                          <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" value="{{ $product->price }}"  name ="price">
                          </div>
                        <div class="form-group">
                            <label for="details">Details</label>
                            <textarea class="form-control" rows="3" name="details">{{ $product->details }}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="3" name="description">{{ $product->description }}</textarea>
                        </div>

                        </div>

                        <div class="input-group pb-3">
                            <label class="input-group-text" for="">Select Category</label>
                            <select class="custom-select" name="category_id" id="category_id">

                                <option value="1">LAPTOPS</option>
                                <option value="2">DESKTOPS</option>
                                <option value="3">MOBILE PHONES</option>
                                <option value="4">TABLEST</option>
                                <option value="5">TVS</option>
                                <option value="6">CAMERAS</option>
                                <option value="7">APPLIANCES</option>
                      
                            </select>
                        </div>
                        <div class=" pb-3 pt-3">
                            <input type="file" name="slug" class=""  >


                        </div>
                        <center>
                            <button type="submit" class="btn product-btn all-Btn" >Update</button>
                            <a href="" class="btn product-btn all-Btn " >Cancel</a>
                        </center>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal3{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header tcolor ">
                    <h5 class="modal-title " id="myModalTitle">
                        <center>
                        Delete Product
                        </center>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body myModal tcolor">
                    <form action="{{url('admin/delete-product'.$product->id)}}" method="Post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <p>Are you sure you want to delete this Product ?</p>
                        <button type="submit" class="btn product-btn all-Btn" >Yes! Delete</button>
                        <button  class="btn product-btn all-Btn " data-dismiss="modal" >Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of model  -->
</section>




@endsection
