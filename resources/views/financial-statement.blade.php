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
                <h2>Financial Statements</h2>
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
                                font-size: 16px;">YEAR 2020-21</span>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body" >
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
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
                                font-size: 16px;">YEAR 2019-20</span>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body" >
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
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
                                font-size: 16px;">YEAR 2018-19</span>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body" >
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
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
                                font-size: 16px;">YEAR 2017-18</span>
                            </h2>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body" >
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="clearfix mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapseOne"><i style="font-size:22px;" class="fa fa-plus-circle"></i></button>
                                <span style="font-family: Montserrat;
                                line-height: 22px;
                                font-weight: normal;
                                font-style: normal;
                                color: #000;
                                font-size: 16px;">YEAR 2016-17</span>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body" >
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            <a href="#">Link#1</a><br>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>

@endsection