@extends('layouts.app')

@section('content')


    {{$utilisateur->name}}

    <br />

    @auth
        @if($utilisateur->id != \Illuminate\Support\Facades\Auth::id())
            @if(Auth::user()->jeLesSuit->contains($utilisateur->id))
                <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle>Arrêter de le suivre !</a>
            @else
                <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle>Suivre !</a>
            @endif
        @endif
    @endauth

    {{$utilisateur->jeLesSuit->count()}} abonnements<br />
    {{$utilisateur->ilsMeSuivent->count()}} abonnés


    @include('_chansons', ['chansons' => $utilisateur->chansons])


@endsection