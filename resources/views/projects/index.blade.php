<!-- resources/views/projects/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->name }} - {{ $project->description }}</li>
        @endforeach
    </ul>
@endsection

