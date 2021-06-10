@extends('layouts.app')
@section('content')

<section id="inner-headline">
    <div class="container">
        <div class="row pb-3">
            <div class="col-lg-12">
                <h2>Account Opening Form</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <p class="lead">Download the form by clicking on the link below:</p>
                <br>

                <h3>Account Opening Forms</h3>

                <p class="lead"><a target="_blank" href="{{asset('assets/Customer Relationship Form - Individual.pdf')}}">Customer Relationship Form - Individual</a></p>

                <p class="lead"><a target="_blank" href="{{asset('assets/UPDATION-FORM.pdf')}}">Account Updation Form</a></p>
    
            </div>
        </div>



    </div>
</section>

@endsection