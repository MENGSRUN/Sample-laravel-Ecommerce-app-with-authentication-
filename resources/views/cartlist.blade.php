@extends('master')
@section('content')
<div class="container custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4 class="col-sm-3 mx-auto">Result For Products</h4>
                <div class="col-sm-3 mx-auto">
                    <div class="container">
                        <a  class="btn btn-danger" href="/">Go Back</a>
                        <a class="btn btn-success" href="/ordernow">Order Now</a> <br><br>
                    </div>
                </div>
            @foreach ($products as $item)
            <div class=" row search-item cart-list-devider">
                <div class="col-sm-3 mx-auto">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" >
                    </a>
                </div>
                <div class="col-sm-4">
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection

