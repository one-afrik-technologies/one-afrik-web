<!-- resources/views/contacts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Contact</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        
        <button type="submit">Create</button>
    </form>
@endsection

