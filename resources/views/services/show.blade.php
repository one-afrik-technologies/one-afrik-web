<!-- resources/views/services/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Service Details</h1>
    <p>Name: {{ $service->name }}</p>
    <p>Description: {{ $service->description }}</p>
    <p>Price: {{ $service->price }}</p>
    <p>Icon: <img src="{{ $service->icon }}" alt="{{ $service->name }}"></p>
    <a href="{{ route('services.index') }}">Back to Services</a>
@endsection

