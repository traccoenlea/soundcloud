<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
</head>
<body>

<header>
    <a href="{{ url('/') }}">
        <img src=/img/logo.png>
    </a>
    <div>
        <div class="controleaudio">

            <audio id="audio" controls src="" /></audio>

            <form id="search">
                <input type="search" name="seach" required placeholder="Votre recherche"/>
                <input type="submit">
            </form>




        </div>

    </div>
    <nav>
        <ul>

        @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <!--<li> Bonjour {{ Auth::user()->name }}</li>-->
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>
                <div class="user"><img src=/img/user.png><a href="/utilisateur/{{Auth::id()}}" class="utilisateur">Profil</a></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endguest
        </ul>
    </nav>
</header>

@auth()
    <div class="ajouter"><a class="nouveau" href="/nouvelle" data-pjax>Insérer une chanson</a></div>
@endauth
<!-- Authentication Links -->
<main class="py-4" id="pjax-container">
    @yield('content')
</main>






<footer>
    @2019 MusicMakerInstitute
</footer>
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{asset('js/jquery.pjax.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>




</body>
</html>