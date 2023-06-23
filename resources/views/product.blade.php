@extends('master')
@section('content')
    <div class="container custom-product">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{ $item['id'] }}">
                            <img src="{{ $item['gallery'] }}" class="d-block w-25 my-img" alt="slide">
                            <div class="carousel-caption">
                                <h3 class="carousel-title text-secondary">{{ $item['name'] }}</h3>
                                <h6 class="text-secondary">{{ $item['description'] }}</h6>
                                <h3 class="text-secondary">{{ $item['price'] }}$</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            </button>
        </div>

        {{-- Trending Product --}}
        <div class="trending-wrapper">
            <h3>Trending Products</h3>
            @foreach ($products as $item)
                <div class="trending-item">
                    <a href="detail/{{ $item['id'] }}">
                        <img src="{{ $item['gallery'] }}" class="trending-image" alt="slide">
                        <div class="">
                            <h6>{{ $item['name'] }}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <hr>
@endsection
