<!-- resources/views/services/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Service</h1>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        
        <label for="price">Price:</label>
        <input type="text" id="price" name="price">
        
        <label for="icon">Icon:</label>
        <input type="text" id="icon" name="icon">
        
        <button type="submit">Create</button>
    </form>
@endsection

