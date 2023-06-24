<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>

<nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{ url('/img/Logo.svg') }}" alt="Logo" width="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/" style="font-size: 23px;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/myorders" style="font-size: 23px;">Orders </a>
                </li>
            </ul>
            <form class="d-flex">
                <input class=" form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            {{-- Login & Logout btn --}}
            @if (Session::has('user'))
                <li class=" navbar-nav navbar-right nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 23px;">
                        {{ Session::get('user')['name'] }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
            @else
                <ul class="navbar-nav ">
                    <li class="nav-item">
                      <a class="nav-link action fw-bold" aria-current="page" href="/login" style="font-size: 20px;">Login</a>
                    </li>
                    <li class="nav_item">
                        <a class="nav-link action fw-bold" aria-current="page" href="/register" style="font-size: 20px;">Register</a>
                    </li>
                </ul>
            @endif
            {{-- Cart btn --}}
            <ul class="navbar-nav navbar-right">
                <li class="nav-item btn btn-primary ">
                    <a class="active text-light txt hover-shadow" href="/cartlist">Cart({{ $total }})</a><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style scoped>
    .navbar-collapse {
        gap: 1rem !important;
    }

    .txt {
        text-decoration: none;
        font-size: 15px;
    }

    .form-control {
        border-radius: 0.4rem;
        padding-left: 50px !important;
    }

    .d-flex {
        margin-top: 10px !important;
    }
</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
