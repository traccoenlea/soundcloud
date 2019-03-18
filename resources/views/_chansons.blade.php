<ul id="listemusique">
    @foreach($chansons as $c)
        <li class="musique"><a class="chanson" data-file="{{$c->fichier}}" href="#">{{$c->nom}}</a><div>ajoutée par <a href="/utilisateur/{{$c->utilisateur->id}}">{{$c->utilisateur->name}}</a></div> </li>
    @endforeach
</ul>