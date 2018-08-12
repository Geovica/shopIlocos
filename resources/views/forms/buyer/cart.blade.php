@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">




                        <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/storage/product_images/{{$products->product_image}}" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">{{$products->product_name}}</h5>
                                 
                                </div>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: {{$products->price}}</li>
                                  <li class="list-group-item">Rate: ****</li>

                                </ul>
                                <div class="card-body">
                                  <a href="#" class="card-link">Add to Cart</a>
                                  <a href="#" class="card-link">Add to Wishlist</a>
                                </div>
                              </div>
                        
                
                      

                </div>
            </div>
        </div>
    </div>
</div>
@endsection