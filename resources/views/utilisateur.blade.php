@extends('layouts.app')

@section('content')



    @auth
        @if(Auth::id() == $utilisateur->id)

            <div class="moncompte">
                <div class="baniere">
                    <div class="user"><img src=/img/user.png><h3>{{$utilisateur->name}}</h3></div>
                </div>
                <nav>
                    <stong>Titre</stong>
                    <button>Partager</button>
                </nav>
                <div>
                    @foreach($utilisateur->chansons as $c)

                        <a href="#" class="chanson" data-file="{{$c->fichier}}">{{$c->nom}}</a> écrite par
                        <a href="/utilisateur/{{$c->utilisateur->id}}" class="utilisateur">{{$c->utilisateur->name}}</a>
                        <br />
                    @endforeach
                </div>
            </div>









            @else
                <h3>Home page de {{$utilisateur->name}}</h3>
                <button>Suivre</button><br/>
                @foreach($utilisateur->chansons as $c)

                    <a href="#" class="chanson" data-file="{{$c->fichier}}">{{$c->nom}}</a> écrite par
                    <a href="/utilisateur/{{$c->utilisateur->id}}" class="utilisateur">{{$c->utilisateur->name}}</a>
                    <br />
                @endforeach
        @endif
    @endauth
@endsection