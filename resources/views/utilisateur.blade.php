@extends('layouts.app')

@section('content')

    {{$utilisateur->name}}

    <br />

    @auth
        @if($utilisateur->id != \Illuminate\Support\Facades\Auth::id())
            @if(Auth::user()->jeLesSuis->contains($utilisateur->id))
                <a href="/suivi/{{$utilisateur->id}}">Arrêter de le suivre !</a>
            @else
                <a href="/suivi/{{$utilisateur->id}}">Suivre !</a>
            @endif
        @endif
    @endauth



    @include('_chansons', ['chansons' => $utilisateur->chansons])


@endsection