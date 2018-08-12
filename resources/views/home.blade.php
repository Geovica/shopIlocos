@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>
                    <a href="{{route('products.create')}}" class="btn btn-primary">Add Products</a>
                    
                </div>
            </div>

            @include('inc.products')
        </div>
    </div>
</div>
@endsection
