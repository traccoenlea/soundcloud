@extends ('layouts.app)

@section ('content')

    @foreach($utilisateurs as $u)
        <a href="/utilisateur/{{$u->id}}">{{$u->name}}</a>
    @endforeach

@endsection
