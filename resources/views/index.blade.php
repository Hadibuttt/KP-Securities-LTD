@extends('layouts.app')
@section('content')

<div class="rate-check">
    <div class="row">
        <div class="col-12 pb-2">
            <div class="tcontainer">
                <div class="ticker-wrap">
                    <div class="ticker-move">
                        <span id="company"><span style="font-family: roboto,sans-serif; color: #401C6B; font-size: 18px;">KP SECURITIES</span> <span style="color: #B18968;font-size: 18px;margin-left: 7px;">PRIVATE LIMITED<bsp></bsp></span></span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://patelsecuritiesltd.com/img/slides/flexslider/2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://patelsecuritiesltd.com/img/slides/flexslider/3.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://patelsecuritiesltd.com/img/slides/flexslider/1.jpg" alt="Third slide">
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




<div class="container-fluid text-box">
    <h1 class="head-one">WELCOME TO <span style="color: #104C8D;font-size: 30px;">KP SECURITIES PRIVATE LIMITED</span></h1>
    <p class="para">Our brokerage house provides a complete range of stock broking and corporate advisory services.</p>
</div>
<br><br>



<div class="container-fluid" style="background-image: url({{asset('assets/bg-about.png')}});height: 600px;;background-size: cover;background-repeat: no-repeat;background-position: bottom">
   
</div>

@endsection