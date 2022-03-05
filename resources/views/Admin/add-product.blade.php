@extends('layouts.admin')
@section('content')

<div class="container  pt-3 pb-4  ">
    <div class="row form-div">
        <div class="col-lg-5 pb-5 mr-5 add-product-continer-form">
            <center>
            <h4 class="p">Add New Product</h4>
            <h6 class="mt-3 p">Product Details</h6>
            </center>
            @if (session('status'))
                        <div class="alert alert-info" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif




             <form method="post" action="{{ route('store-product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-3">
                        <input type="text" class="form-control form-control" name="name" placeholder=" Name" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your todo name with anyone else.</small> -->
                    </div>
                    <div class="form-group pb-2">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
                    </div>
                    <div class="form-group ">
                        <textarea  class="form-control" id="details" name="details" placeholder="Details" required></textarea>
                    </div>
                    <div class="form-group pb-3">
                        <textarea  class="form-control" id="description" name="description" placeholder="Description" required></textarea>

                    </div>

                    <div class="input-group pb-3">
                        <label class="input-group-text" for="">Select Category</label>
                        <select class="custom-select" name="category_id" id="category_id">
                            @foreach ( $categories as $item )
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class=" pb-3">
                        <input type="file" name="slug" class=""  >

                        @if ($errors->has('file'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('file') }}</strong>
                            </span>
                        @endif

                    </div>
                        <!-- new image box  -->
                    {{-- <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Picture :
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input name="profile_picture" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="file">
                        </div>
                    </div> --}}
                    <center>
                    <button type="submit" class="btn all-Btn divBtn product-btn">Add Product</button>
                    </center>
                </form>

        </div>

    </div>
    <script>
    function previewFile(input) {
        let file = $("input[type=file]").get(0).file[0];
        if(file){
            let reader = new FileReader();
            reader.onload = function(){
                $("#previewImg").attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
    </script>
</div>






@endsection
