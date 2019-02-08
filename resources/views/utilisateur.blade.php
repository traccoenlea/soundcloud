@extends('layouts.app')

@section('content')
    <h3>Home page de {{$utilisateur->name}}</h3>
    @foreach($utilisateur->chansons as $c)
        <a href="#" class="chanson" data-file="{{$c->fichier}}">{{$c->nom}}</a> écrite par
        <a href="/utilisateur/{{$c->utilisateur->id}}" class="utilisateur">{{$c->utilisateur->name}}</a>
        <br />
    @endforeach

@endsection