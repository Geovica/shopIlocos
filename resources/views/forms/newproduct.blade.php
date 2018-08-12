@extends('layouts.app') 
@section('content')

<div class="container mt-2">
    <div class="card  font-weight-bold">
        <div class="card-header">New Product</div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>

            @endif


            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="product_name">

                        <label>Category</label>
                        <select class="form-control" name="category" id="category">
                                              <option selected="true" disabled="disabled">Choose...</option>

                                            @foreach($product_categories as $product_category)
                                             <option value="{{$product_category->id}}">{{$product_category->category}}</option>
                                             @endforeach
                                        </select>

                        <label>Quantity</label>
                        <input type="text" class="form-control" name="qty">

                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="&#x20B1 0.00" name="price">



                    </div>

                    <div class="col-sm">
                        <label for="exampleFormControlFile1">Product Image</label>
                        <img class="img-thumbnail" id="blah" src="/storage/pics/No_Image.jpg" alt="your image" />
                        <input type="file" class="form-control-file" id="product_image" name="product_image" onchange="readURL(this);">
                        <script>
                            function readURL(input) {
                                                                if (input.files && input.files[0]) {
                                                                    var reader = new FileReader();
                                                        
                                                                    reader.onload = function (e) {
                                                                        $('#blah')
                                                                            .attr('src', e.target.result)
                                                                            .width(275)
                                                                            .height(250);
                                                                    };
                                                        
                                                                    reader.readAsDataURL(input.files[0]);
                                                                }
                                                            }
                        </script>

                    </div>
                </div>

                <button value="submit" name="submit" type="submit" class="btn btn-success btn-lg m-2 ">Submit</button>

            </form>


            
        
      
        </div>

    </div>

    @include('inc.products')

  
</div>
@endsection