<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Conference</title>
    
</head>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($conference) ? 'Edit Conference' : 'Create New Conference' }}</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($conference) ? route('admin.conferences.update', ['conference' => $conference->id]) : route('admin.conferences.store') }}" method="POST">
        @csrf
        @if(isset($conference))
            @method('PUT') 
        @endif

        <div class="form-group">
            <label for="name">Conference Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ isset($conference) ? $conference->name : '' }}" required>
        </div>
        <div class="form-group">
            <label for="date">Conference Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ isset($conference) ? $conference->date : '' }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($conference) ? 'Update Conference' : 'Create Conference' }}</button>
    </form>
</div>
@endsection
