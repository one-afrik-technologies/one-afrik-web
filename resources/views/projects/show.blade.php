<!-- resources/views/projects/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Project Details</h1>
    <p>Name: {{ $project->name }}</p>
    <p>Description: {{ $project->description }}</p>
    <p>Start Date: {{ $project->start_date->format('Y-m-d') }}</p>
    <p>End Date: {{ $project->end_date->format('Y-m-d') }}</p>
    <p>Status: {{ $project->status }}</p>
    <p>URL: <a href="{{ $project->url }}">{{ $project->url }}</a></p>
    <a href="{{ route('projects.index') }}">Back to Projects</a>
@endsection

