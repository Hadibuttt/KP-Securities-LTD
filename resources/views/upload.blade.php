<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Financial-Report</title>
</head>
<body>
    <h3>Select a report to Upload:</h3>

    <form action="/financial-report/uploaded" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Year:</label>
        <input type="text" placeholder="2019" required="" name="year"><br><br>
        
        <label>Report Name:</label>
        <input type="text" placeholder="Financial Statement - June 2019" required="" name="name"><br><br>

        <label>Select a file:</label>
        <input type="file" name="report"><br><br>
        <input type="submit">
    </form>

    <br>
    <div class="form-group">
        @error('report')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

</body>
</html>