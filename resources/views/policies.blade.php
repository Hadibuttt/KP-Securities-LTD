@extends('layouts.app')
@section('content')

<section id="inner-headline">
    <div class="container">
        <div class="row pb-3">
            <div class="col-lg-12">
                <h2>Our Policies</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <p class="lead">Download the policy by clicking on the link below:</p>
                <br>

                <h3>Our Policies</h3>

                <p class="lead"><a target="_blank"  style="font-size: 18px; font-family: 'Roboto', Arial, sans-serif;" href="{{asset('assets/policy/KP Securities KYC and CDD Policy.pdf')}}">KYC and CDD Policy</a></p>

                <p class="lead"><a target="_blank" style="font-size: 18px; font-family: 'Roboto', Arial, sans-serif;" href="{{asset('assets/policy/KP Securities Customer Dealing Policy.pdf')}}">Customer Dealing Policy</a></p>

                <p class="lead"><a target="_blank" style="font-size: 18px; font-family: 'Roboto', Arial, sans-serif;" href="{{asset('assets/policy/KP Securities AML Policy.pdf')}}">AML Policy</a></p>

                <p class="lead"><a target="_blank" style="font-size: 18px; font-family: 'Roboto', Arial, sans-serif;" href="{{asset('assets/policy/KP Securities Arbritration Policy.pdf')}}">Arbritration Policy</a></p>
    
                <p class="lead"><a target="_blank" style="font-size: 18px; font-family: 'Roboto', Arial, sans-serif;" href="{{asset('assets/policy/KP Securities Compliance Policy.pdf')}}">Compliance Policy</a></p>

                <p class="lead"><a target="_blank" style="font-size: 18px; font-family: 'Roboto', Arial, sans-serif;" href="{{asset('assets/policy/KP Securities HR Policy.pdf')}}">HR Policy</a></p>

                <p class="lead"><a target="_blank" style="font-size: 18px; font-family: 'Roboto', Arial, sans-serif;" href="{{asset('assets/policy/KP Securities Trading Policy.pdf')}}">Trading Policy</a></p>
                
            </div>
        </div>



    </div>
</section>

@endsection