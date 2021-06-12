@extends('layouts.app')
@section('content')

<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<style>
    body {
    }
    .accordion .card {
        border: none;
        margin-bottom: 5px;
    }
    .accordion .card-header {
        background: #EEEEEE;
        padding-top: 7px;
        padding-bottom: 7px;
    }
    .accordion .card-header h2 {
        color: #000;
        font-size: 1rem;
        
        font-family: "Roboto", sans-serif;
        font-weight: 500;
    }
    .accordion .card-header h2 span {
        float: left;
        margin-top: 10px;font-weight: 500;
    }
    .accordion .card-header button {
        color: #104C8D;
        font-size: 1.3rem;
        line-height: 1.3rem;
        float: right;
    }
    .accordion .card-header button:hover {
        color: #23384e;
    }
        .card-body
        {
            text-align: center;;
            background: #EEEEEE
        }
        .card-body a
        {
            color: black;
            font-weight: 500;
            margin-top: 5px;
            margin-bottom: 5px;
        }
    </style>
    <script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
            $(this).siblings(".card-header").find(".btn i").addClass("fa-minus-circle").removeClass("fa-plus-circle");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
            $(this).parent().find(".card-header .btn i").removeClass("fa-plus-circle").addClass("fa-minus-circle");
        }).on('hide.bs.collapse', function(){
            $(this).parent().find(".card-header .btn i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
        });
    });
    </script>

<section id="inner-headline">
    <div class="container">
        <div class="row pb-3">
            <div class="col-lg-12">
                <h2>Net Capital Balance</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="accordion mt-5" id="accordionExample">
                    
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="clearfix mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-plus-circle" style="font-size:22px;"></i></button>
                                <span style="font-family: Montserrat;
                                line-height: 22px;
                                font-weight: normal;
                                font-style: normal;
                                color: #000;
                                font-size: 16px;">NC-2020</span>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body" style="line-height: 1.9;">
                            <a target="_blank" href="{{asset('assets/net-capital-balance/KP Sec NCB Decemebr-2020.pdf')}}">	Net Capital December-2020</a><br>
                            <a target="_blank" href="{{asset('assets/net-capital-balance/KP Sec NCB June-2020.pdf')}}">	Net Capital June-2020</a><br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="clearfix mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><i class="fa fa-plus-circle" style="font-size:22px;"></i></button>
                                <span style="font-family: Montserrat;
                                line-height: 22px;
                                font-weight: normal;
                                font-style: normal;
                                color: #000;
                                font-size: 16px;">NC-2019</span>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div style="line-height: 1.9;" class="card-body" >
                                <a target="_blank" href="{{asset('assets/net-capital-balance/KP Sec NCB December-2019.pdf')}}">	Net Capital December-2019</a><br>
                            <a target="_blank" href="{{asset('assets/net-capital-balance/KP Sec NCB June-2019.pdf')}}">	Net Capital June-2019</a><br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="clearfix mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-plus-circle" style="font-size:22px;"></i></button>
                                <span style="font-family: Montserrat;
                                line-height: 22px;
                                font-weight: normal;
                                font-style: normal;
                                color: #000;
                                font-size: 16px;">NC-2018</span>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body" style="line-height: 1.9;">
                                <a target="_blank" href="{{asset('assets/net-capital-balance/KP Sec NCB December-2018.pdf')}}">	Net Capital December-2018</a><br>
                            <a target="_blank" href="{{asset('assets/net-capital-balance/KP Sec NCB June-2018.pdf')}}">	Net Capital June-2018</a><br>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="clearfix mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-plus-circle" style="font-size:22px;"></i></button>
                                <span style="font-family: Montserrat;
                                line-height: 22px;
                                font-weight: normal;
                                font-style: normal;
                                color: #000;
                                font-size: 16px;">NC-2017</span>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body" style="line-height: 1.9;">
                                <a target="_blank" href="{{asset('assets/net-capital-balance/KP Sec NCB December-2017.pdf')}}">	Net Capital December-2017</a><br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

@endsection