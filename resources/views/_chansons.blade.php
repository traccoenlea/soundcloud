<ul id="listemusique">







                @foreach($chansons as $c)
                    <li class="musique">
                        <div class="chanson" >  <a data-file="{{$c->fichier}}" href="#">{{$c->nom}}</a></div>
                        @if($c->utilisateur->id != \Illuminate\Support\Facades\Auth::id())
                            <div class="name">ajoutée par <a href="/utilisateur/{{$c->utilisateur->id}}">{{$c->utilisateur->name}}</a></div>
                            @else
                            <div class="name">ajoutée par moi</a></div>
                        @endif
                    </li>
                @endforeach

</ul>