<div class="card font-weight-bold mt-3">
        <div class="card-header">
            <div class="row">

                <div class="col">
                 Category   
             
            <select class="form-control-inline">
                <option>New Items</option>
              </select>
                </div>
                
        </div>
        </div>
        <div class="row">
        @foreach($products as $product)
 
        <div class="col-sm-2 m-1" >
        
        <a href="carts/{{$product->id}}" class="card text-dark" style="width:9rem;" >
                <img class="card-img-top" src="/storage/product_images/{{$product->product_image}}"alt="Card image cap">
                <small>
                    {{$product->product_name}}

                </small>
                <small>{{$product->price}} &#x20B1;</small>

            </a>
     
        </div>

        @endforeach
    </div>
    </div>
