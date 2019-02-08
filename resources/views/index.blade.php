@extends('layouts.app')

@section('content')
    A vous de travailler maintenant :)

    @foreach($chansons as $c)
        <a href="#" class="chanson" data-file="{{$c->fichier}}">{{$c->nom}}</a><br />
    @endforeach

@endsection