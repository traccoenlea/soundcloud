@extends('layouts.app')

@section('content')

@include('_errors')

    <form action="/creer" data-pjax method="POST" enctype="multipart/form-data">
        <input type="text" name="nom" required placeholder="Le nom de la chanson" value="{{old('nom')}}"/>
        <br />
        <input type="text" name="style" required placeholder="Le style de la chanson" value="{{old('style')}}"/>
        <br />
        <input type="file" name="chanson" required />
        {{csrf_field()}}
        <input type="submit" />

    </form>

@endsection