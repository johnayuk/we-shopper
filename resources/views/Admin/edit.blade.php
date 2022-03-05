{{-- <div class="containerr">
    <form action="{{url('admin/update-product'.$product->id)}}" method="Post">
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


        <div class=" pb-3 pt-3">
            <input type="file" name="slug" class=""  >


        </div>
        <center>
            <button type="submit" class="btn product-btn all-Btn" >Update</button>
            <a href="" class="btn product-btn all-Btn " >Cancel</a>
        </center>
    </form>
</div> --}}
