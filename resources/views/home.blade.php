@extends('layouts.app')

@section('title', 'Home - One Afrik Web')

@section('head')
    @vite('resources/css/app.css')
@endsection

@section('content')
    <div class="header__overlay"></div>
    <div class="header__content"> <!-- Corrected from < class="header__content"> to <div class="header__content"> -->
        <h2>One Afrik Technologies</h2>
        <h1>
            Develop Software<br><span class="h1__span-1">Solutions</span>
            <span class="h1__span-2">with Us</span>
        </h1>
        <p>
            From concept to launch, our expert team is dedicated to delivering
            exceptional solutions tailored to your needs. Let's bring your vision
            to life and create something extraordinary together.
        </p>
        <div class="header__btn">
            <button class="btn">Contact Us</button>
        </div>
    </div>
    @include('footer') <!--footer here -->
@endsection

@section('scripts')
    @vite('resources/js/app.js')
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal().reveal('.header__content', {
            delay: 500,
            distance: '50px',
            origin: 'bottom'
        });
    </script>
@endsection
