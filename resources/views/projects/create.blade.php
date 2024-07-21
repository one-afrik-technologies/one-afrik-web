<!-- resources/views/projects/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Project</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date">
        
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date">
        
        <label for="status">Status:</label>
        <input type="text" id="status" name="status">
        
        <label for="url">Project URL:</label>
        <input type="url" id="url" name="url">
        
        <button type="submit">Create</button>
    </form>
@endsection

