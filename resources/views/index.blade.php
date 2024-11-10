<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container text-center">
        <h1>Artiom Akimov, PIT-22-NL</h1>
        <h2>Mirstu</h2>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ url('/client/conferences') }}" class="btn btn-primary">Client</a></li>
            <li class="list-inline-item"><a href="{{ url('/employee/conferences') }}" class="btn btn-primary">Employee</a></li>
            <li class="list-inline-item"><a href="{{ url('/admin/') }}" class="btn btn-primary">Administrator</a></li>
        </ul>
    </div>


</body>
</html>
