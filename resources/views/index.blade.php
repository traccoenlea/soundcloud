@extends('layouts.app')

@section('content')
    @include('_chansons', ['chansons' => $chansons])

    <a href="#" id="testAjax">Testons l'ajax</a>
    <div id="aremplir"></div>


@endsection

