<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Conference</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Conferences</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        @foreach($conferences as $conference)
        <tr>
            <td>{{ $conference->id }}</td>
            <td>{{ $conference->name }}</td>
            <td>{{ $conference->date }}</td>
            <td>
                <a href="{{ route('admin.conferences.edit', $conference->id) }}">Edit</a>
                <form action="{{ route('admin.conferences.destroy', $conference->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this conference?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
</form>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('admin.conferences.create') }}">Create New Conference</a>
</body>
</html>