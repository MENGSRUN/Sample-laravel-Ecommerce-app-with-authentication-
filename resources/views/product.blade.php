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
        <h3 style="text-align: center;">Trending Products</h3>
        <hr>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $item)
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="detail/{{ $item['id'] }}">
                                    <img src="{{ $item['gallery'] }}"class="bd-placeholder-img card-img-top" alt="slide">
                                    <div class="text-reset">
                                        <h5 class="card-title mb-3">{{ $item['name'] }}</h5>
                                    </div>
                                </a>
                                {{-- category --}}
                                <div class="card-body">
                                    <h6 class="card-text">{{ $item['description'] }}</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="text-muted">{{ $item['price'] }} $</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
