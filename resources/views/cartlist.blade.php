@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm">
        <div class="trending-wrapper">
            <h4 class="text-justify text-center">Result For Products</h4>
                <div class="col-sm-3 mx-auto">
                    <div class="d-flex justify-content-center">
                        <a  class="btn btn-danger" href="/">Go Back</a>
                        <a class="btn btn-success" href="/ordernow">Order Now</a> <br><br>
                    </div>
                </div>
                <br>
                <br>
            @foreach ($products as $item)
            <div class=" row cart-list-devider">
                <div class="col-sm mx-auto">
                        <img class="trending-image" src="{{$item->gallery}}">
                </div>
                <div class="col-sm">
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                </div>
                <div class="col-sm my-auto">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

