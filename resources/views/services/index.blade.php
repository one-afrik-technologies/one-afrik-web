<!-- resources/views/services/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Services</h1>
    <a href="{{ route('services.create') }}">Create New Service</a>
    <ul>
        @foreach ($services as $service)
            <li>{{ $service->name }} - {{ $service->description }}</li>
        @endforeach
    </ul>
@endsection

