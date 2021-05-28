<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Financial-Report</title>
</head>
<body>
    <h3>Click on the Report to download:</h3>
    @foreach ($financial_reports as $report)

    <h3>{{$report->year}}</h3>

    <a href="/download-financial/{{$report->report}}">{{$report->name}}</a>
        
    @endforeach
</body>
</html>