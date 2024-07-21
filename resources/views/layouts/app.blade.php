<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>One Afrik Technologies</title>
    <title>@yield('title', 'One Afrik Web')</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<nav>
    <div class="nav__header">
        <div class="nav__logo">
            <a href="#">
                <img src="/logo.png" alt="logo" />
                <span>One Afrik Technologies</span>
            </a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
        </div>
    </div>
    <ul class="nav__links" id="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('services.index') }}">Services</a></li>
        <li><a href="{{ route('projects.index') }}">Projects</a></li>
        <li><a href="{{ route('contacts.index') }}">Contact</a></li>
    </ul>
</nav>

<main>
    @yield('content')
</main>

@vite('resources/js/app.js')
<script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        var navLinks = document.getElementById('nav-links');
        navLinks.classList.toggle('open');
    });
</script>
</body>
</html>
