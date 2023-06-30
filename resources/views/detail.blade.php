
@extends('master')
@section("content")
<br>
    <div class="container custom-product">
        <div class="row featurette">
            <a href="/"><button class="btn btn-danger">Go Back</button></a>
            <div class="col-sm order-md-1">
                <img src="{{$products['gallery']}}" alt="Product Image" width="400px">
            </div>
            <div class="col-sm order-md-2">
                <h4 class="featurette-heading fw-normal lh-1">Name : <span class="text-muted">{{$products['name']}}</span></h4>
                <h4 class="featurette-heading fw-normal lh-1">Category : <span class="text-muted">{{$products['category']}}</span></h4>
                <h4 class="lead">Description : <span class="text-muted">{{$products['description']}}</span></h4>
                <h2 class="lead">Price : <span class="text-muted">{{$products['price']}}$</span></h2>
                <br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$products['id']}}">
                    <button class="btn btn-primary">Add to Cart </button>
                </form>
                <br>
                <br>
                <form class="d-flex col-sm">
                    <button class="btn btn-success">Buy Now</button>
                </form>
                <br>
            </div>
        </div>


    </div>

@endsection
