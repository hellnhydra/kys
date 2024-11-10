<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Conference</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>
<body>
    <h1>Create New Conference</h1>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <p class="error-message">{{ $errors->first() }}</p>
    @endif

    <form action="{{ route('admin.conferences.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Conference Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="date">Conference Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <button type="submit">Create Conference</button>
    </form>

    <a href="{{ route('admin.conferences.index') }}">Back to Conferences</a>
</body>
</html>