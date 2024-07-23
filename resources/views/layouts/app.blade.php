<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'One Afrik Web')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>One Afrik Technology</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('contacts.index') }}">Contact</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
</html>

