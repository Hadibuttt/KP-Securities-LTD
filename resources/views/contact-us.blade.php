@extends('layouts.app')
@section('content')

<section id="inner-headline">
    <div class="container">
        <div class="row pb-3">
            <div class="col-lg-12">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
</section>

<section id="content pt-0">
    <div class="map">
        <div id="google-map">

            <div id="googleMap" style="width:100%;height:600px;"></div>

            <script>
                function myMap() {
                    var mapProp = {
                        center: new google.maps.LatLng(51.508742, -0.120850),
                        zoom: 5,
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
        </div>
    </div>
    <div class="container mt-5 pb-5 contact">

        <div class="row mt-5 pb-5">
            <div class="col-md-8 offset-md-2">

                <h2 style="font-weight: 700; color: #666;font-size: 30px">Contact us</h2>
                <h4 class="mb-4"><em style="font-weight: 700; color: #666; font-size: 18px;">get in touch with us by filling form below</em></h4>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form method="" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="text-center"><button type="button" class="btn btn-theme btn-block btn-md">Send Message</button></div>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection