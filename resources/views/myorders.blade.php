@extends('master')
@section('content')
<div class="container custom-product">

    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2 class="col-sm-3 text-bold mx-auto">My Orders</h2>
            <a  class="btn btn-danger" href="/">Go Back</a>
            @foreach ($orders as $item)
            <div class=" row search-item cart-list-devider">
                <div class="col-sm-3 mx-auto">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" >
                    </a>
                </div>
                <div class="col-sm-4">
                        <div class="">
                            <h3>Name : {{$item->name}}</h3>
                            <h5>Delivery Status : {{$item->status}}</h5>
                            <h5>Address : {{$item->address}}</h5>
                            <h5>Payment Status : {{$item->payment_status}}</h5>
                            <h5>Payment Method : {{$item->payment_method}}</h5>
                        </div>
                </div>
                {{-- <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
                </div> --}}
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection

