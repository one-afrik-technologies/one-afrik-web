@section('head')
    @vite('resources/css/app.css')
@endsection


</div>
<ul class="socials">
    <li>
        <a href="#"><i class="ri-facebook-circle-fill"></i></a>
    </li>
    <li>
        <a href="#"><i class="ri-twitter-fill"></i></a>
    </li>
    <li>
        <a href="#"><i class="ri-youtube-fill"></i></a>
    </li>
</ul>
<div class="header__bar">
    Copyright &copy; <?php echo date('Y'); ?>  One Afrik Technologies 
</div>
</div>

@vite('resources/js/app.js')
<script src="https://unpkg.com/scrollreveal"></script>