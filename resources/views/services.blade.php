@extends('layouts.app')
@section('content')

<section id="inner-headline">
    <div class="container">
        <div class="row pb-3">
            <div class="col-lg-12">
                <h2>Our Services</h2>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-4 pt-5">
            <div class="flip-card">

                <div class="flip-card-inner">
                    <div class="flip-card-front p-4">
                        <div class="services-box-item-content ">
                            <img class="services-box-item-cover ourservices" src="https://zlk.com.pk/assets/images/our_services/equity.png" data-headline="Equity brokerage" style="height: 120px;filter: brightness(100)">
                            <h2 class="mt-2" style="color: white; font-size: 18px;">Roshan Digital Account (RDA)</h2>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="services-box-item-content ">
                            <div class="services-box-item-content pt-5 pl-4 pr-4">
                                <h2 style="font-size: 16px; text-align: left">Roshan Digital Account (RDA)</h2>
                                <p style="margin: 12px 0;font-size: 13px; font-weight: 300; text-align: left">Roshan Digital Account is an initiative to facilitate overseas Pakistanis to invest in the Pakistan Stock Exchange. Trade with us to make your investment exceedingly convenient.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 pt-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front p-4">
                        <div class="services-box-item-content ">
                            <img class="services-box-item-cover ourservices" src="https://zlk.com.pk/assets/images/our_services/arbitrage.png" data-headline="Equity brokerage" style="height: 120px;filter: brightness(100)">

                            <h2 class="mt-2" style="color: white; font-size: 18px;">Equity Brokerage</h2>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="services-box-item-content ">
                            <div class="services-box-item-content pt-5 pl-4 pr-4">
                                <h2 style="font-size: 16px; text-align: left">Equity Brokerage</h2>
                                <p style="margin: 12px 0;font-size: 13px; font-weight: 300; text-align: left">KP Securities facilitates trading on all facets of the Pakistan Stock Exchange. All trade transactions are executed under experienced and reliable brokers to streamline the functioning of the Capital market.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 pt-5">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front p-4">
                        <div class="services-box-item-content ">
                            <img class="services-box-item-cover ourservices" src="https://zlk.com.pk/assets/images/our_services/online_digital.png" data-headline="Equity brokerage" style="height: 120px;filter: brightness(100)">

                            <h2 class="mt-2" style="color: white; font-size: 18px;">Online Digital Account Opening</h2>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <div class="services-box-item-content ">
                            <div class="services-box-item-content pt-5 pl-4 pr-4">
                                <h2 style="font-size: 16px; text-align: left">Online Digital Account Opening</h2>
                                <p style="margin: 12px 0;font-size: 13px; font-weight: 300; text-align: left">KP would like to offer its clients Digital Account Opening Form to facilitate a hassle-free experience. It eliminates physical presence and can be easily filled online.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .below-img {
            height: 210px;
            display: block;
            margin: auto;
        }
        .custom-button
        {
            color: white !important;
            border-radius: 40px;
            padding: 20px;
            padding-left: 40px;
            padding-right: 40px;
            font-size: 80px;
            background: #401C6B;
            color: white;
            text-decoration: none;
        }
        .custom-button span
        {
            font-size: 18px;
        }
    </style>
</div>
<section id="content">
    <div class="container">
        <h1 class="text-center" style="font-weight: 800; color: #401C6B;">ONLINE TRADING PLATFORM</h1>
        <div class="row">
            <div class="col-lg-6 pt-5">
                <img class="img-responsive below-img" src="https://zlk.com.pk/assets/images/why_choose_us\online_trading.jpg" alt="Mobile">
                <h3 class="text-center">MOBILE</h3>

                <p class="lead">
                    Trade on the go using your mobile phone. Get convenience of secure and real time access to quotes and trading on your mobile device.

                </p>
                <div>
                <a href="https://itunes.apple.com/us/app/zlk-trade-iflair/id1451277006?mt=8" target="_blank">
                    <img src="https://zlk.com.pk/assets/images/Download_on_the_Appstore.png" alt="Lights" style="width:40%;">
                </a><a href="https://itunes.apple.com/us/app/zlk-trade-iflair/id1451277006?mt=8" target="_blank">
                    <img src="https://zlk.com.pk/assets/images/Download_on_GooglePlay.png" alt="Lights" style="width:40%;">
                </a>
                </div>

            </div>
            <div class="col-lg-6 pt-5">
                <img class="img-responsive below-img" src="https://zlk.com.pk/assets/images/desktop.jpg" alt="Mobile">
                <h3 class="text-center">DESKTOP</h3>

                <p class="lead mb-4">
                    Trade on the go using your mobile phone. Get convenience of secure and real time access to quotes and trading on your mobile device.

                </p>
                <a class="custom-button" href="https://zlk.com.pk/assets/downloads/ZLKTRADE_1.0.0.27.exe"><span data-hover="Download">Download</span></a>


            </div>
        </div>

    </div>
</section>

@endsection