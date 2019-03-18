<ul id="listemusique">
    @foreach($chansons as $c)
        <li class="musique">
            <div class="chanson" ><a data-file="{{$c->fichier}}" href="#">{{$c->nom}}</a></div>
            <div class="name">ajoutée par <a href="/utilisateur/{{$c->utilisateur->id}}">{{$c->utilisateur->name}}</a></div>
        </li>
    @endforeach
</ul>