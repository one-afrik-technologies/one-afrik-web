<!-- resources/views/contacts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Contacts</h1>
    <a href="{{ route('contacts.create') }}">Create New Contact</a>
    <ul>
        @foreach ($contacts as $contact)
            <li>{{ $contact->name }} - {{ $contact->email }}</li>
        @endforeach
    </ul>
@endsection
