@extends('layouts.app')
@section('content')

<section id="inner-headline">
    <div class="container">
        <div class="row pb-3">
            <div class="col-lg-12">
                <h2>Net Capital Balance Report</h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                @foreach ($reports as $report)
                
                <h3>{{$report->year}}</h3>
        <p class="lead"><a target="_blank" href="/download-net-capital/{{$report->report}}">{{$report->name}}</a></p>
                @endforeach
    
            </div>
        </div>



    </div>
</section>

@endsection