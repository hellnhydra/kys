@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Upcoming Conferences</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Conference</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($conferences as $conference)
            <tr>
                <td>{{ $conference->name }}</td>
                <td>{{ \Carbon\Carbon::parse($conference->date)->format('Y-m-d H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
