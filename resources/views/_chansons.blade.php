<ul>
    @foreach($chansons as $c)
        <li>La chanson <a class="chanson" data-file="{{$c->fichier}}" href="#">{{$c->nom}}</a> ajoutée par l'utilisateur {{$c->utilisateur->name}}</li>
    @endforeach
</ul>