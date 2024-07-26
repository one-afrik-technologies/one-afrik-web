<!-- resources/views/services/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Services</h1>
    <ul>
        @foreach ($services as $service)
            <li>{{ $service->name }} - {{ $service->description }}</li>
        @endforeach
    </ul>
@endsection

