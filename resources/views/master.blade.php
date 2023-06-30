<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- boostap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- Boostap JS Bunble --}}
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}

    {{-- Jquery --}}
    {{-- <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}

    {{-- font Awesome --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">


    {{-- Logo --}}
    <link rel="icon" href="{{url('../img/Logo.svg')}}">

    <title>SRUNNOOBIE Store</title>
</head>
<body>
    {{View::make('header')}}
    @yield("content")
    {{View::make('footer')}}
</body>
{{-- style Css --}}
<style>
    body {
        font-family: "Audiowide", sans-serif !important;
    }
    .w-35 {
    width: 35% !important
}
    .customer-login{
        height: 500px;
        padding-top:100px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .customer-product{
        height: 600px;
    }
    .trending-image{
        height: 300px;
    }
    .trending-item{
        float: left;
        width: 20%; 
    }
    .trending-wrapper{
        margin: 30px
    }
    .detail-img{
        height: 200px;
    }
    .cart-list-devider{
        border-bottom: 1px solid #35443585;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    .form-control:focus {

    border-color: #00fff2, #3cff00, #ff00ff, #1100ff !important;
    }


</style>

{{-- <script>
    $(document).ready(function()
    {
        $("button").click(function()
        {
            alert("All Set")
        })
    })
</script> --}}
</html>
