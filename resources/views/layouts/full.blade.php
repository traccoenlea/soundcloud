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
</head>
<body>
<header>
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

    <div>
        <div class="controleaudio">

            <audio id="audio" controls src="" /></audio>

            <form id="search">
                <input type="search" name="seach" required placeholder="Votre recherche"/>
                <input type="submit">
            </form>
            @auth()
                <a href="/nouvelle">Insérer une chanson</a>
            @endauth

        </div>

    </div>
    <a href="{{ url('/') }}">
        <img src=/img/logo.png>
    </a>

</header>
<!-- Authentication Links -->





<div id="main">
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>