<!-- resources/views/contacts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Contact Details</h1>
    <p>Name: {{ $contact->name }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Phone: {{ $contact->phone }}</p>
    <p>Message: {{ $contact->message }}</p>
    <a href="{{ route('contacts.index') }}">Back to Contacts</a>
@endsection

