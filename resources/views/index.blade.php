@extends('layouts.app')
@section('content')

<div class="rate-check">
    <div class="row">
        <div class="col-12 pb-2">
            <div class="tcontainer">
                <div class="ticker-wrap">
                    <div class="ticker-move">
                        <span id="company"><span class="fade-in-text" style="color: #104c8d;font-size: 18px;margin-left: 7px; font-family: roboto,sans-serif;">KP SECURITIES PRIVATE LIMITED - TREC Holder of Stock Exchange of Pakistan<bsp></bsp></span></span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('assets/slider1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/slider2.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/slider3.jpg')}}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>




<div class="container-fluid text-box mt-5" style="background-image: url(https://wallpaperaccess.com/full/2195669.jpg);background-attachment: fixed; background-repeat: no-repeat;background-size: cover;">
    <h1 class="head-one">WELCOME TO KP SECURITIES PRIVATE LIMITED</h1>
    <p class="para">" KP Securities has been the pioneer in the market, exploring uncharted waters and leading the spirit of innovation from the front. KP Securities provide a complete range of stock broking and corporate advisory services "</p>
</div>

@endsection
