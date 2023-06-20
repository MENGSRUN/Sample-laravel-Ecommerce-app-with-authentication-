
@extends('master')
@section("content")
    <div class="container custom-product">
        <div class="row">

            <a href="/"><input type="button" class="btn btn-danger" style="margin-top: 3vh;" value="Go back"></a>
            <div class="col-sm-6">
                <img src="{{$products['gallery']}}" alt="">
            </div>
            <div class="col-sm-6 " style="margin-top: 20vh;">
                <h1 class="text-secondary">Name : {{$products['name']}}</h1>
                <h3 class="text-secondary">Category : {{$products['category']}}</h3>
                <h4 class="text-secondary">Description : {{$products['description']}}</h4>
                <h2 class="text-secondary">Price : {{$products['price']}}$</h2>

                <br>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$products['id']}}">
                        <button class="btn btn-primary">Add to Cart </button>
                    </form>
                <br>
                <br>
                    <form action="">
                        <button class="btn btn-success">Buy Now</button>
                    </form>
                <br>
            </div>
        </div>
    </div>
@endsection
<style scoped>
    .custom-product{
        display: block;
        width: 100%;
        height:85vh;
    }

</style>
