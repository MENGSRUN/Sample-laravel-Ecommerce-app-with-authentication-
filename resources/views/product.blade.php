@extends('master')
@section('content')
    <div class="container custom-product">
        <hr>
        {{-- cursonal div  --}}
        <div id="carouselExampleFade" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{ $item['id'] }}">
                            {{-- <img src="{{ $item['gallery'] }}" class="d-block w-75 my-img" alt="slide"> --}}
                            <div class="col-sm-6 mx-auto">
                                <img src="{{ $item['gallery'] }}" class="d-block w-100 my-img" alt="slide">
                            </div>
                            <div class="carousel-caption col-sm-6 mx-auto">
                                <h3 class="carousel-title text-primary">{{ $item['name'] }}</h3>
                                <h6 class="text-primary">{{ $item['description'] }}</h6>
                                <h3 class="text-primary">{{ $item['price'] }}$</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            </button>
            <button class="carousel-control-next btn-danger" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            </button>
        </div>
        {{-- ================================================ --}}
        <hr>
        {{-- Trending Product --}}
        <div class="col-sm mx-auto">
            <h3 class="text-center text-muted">Trending Products</h3>
        </div>
        <hr>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $item)
                    <div class="col-sm">
                        <div class="card shadow-sm">
                            <a href="detail/{{ $item['id'] }}">
                                <img src="{{ $item['gallery'] }}"class="bd-placeholder-img card-img-top" alt="slide">
                                <div class="card-body ">
                                    <h5 class="card-title mb-3 text-decoration-none">{{ $item['name'] }}</h5>
                                    <p class="card-text text text-decoration-none">{{ $item['description'] }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="text-muted">{{ $item['price'] }} $</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                      </div>
                @endforeach
            </div>
        </div>
    @endsection

