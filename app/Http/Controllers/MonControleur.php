<?php

namespace App\Http\Controllers;

use App\Chanson;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonControleur extends Controller
{
    public function index() {
        $chansons = Chanson::all();
            //->orderBy("id desc");
        return view("index", ["chansons"=>$chansons]);
    }

    public function nouvelle() {
        return view("nouvelle");
    }

    public function creer(Request $request){
        //print_r($_FILES);
        //phpinfo();
       // die(1);
        if($request->hasFile('chanson') && $request->file('chanson')->isValid()){
            $c = new Chanson();
            $c->nom = $request->input('nom');
            $c->style = $request->input('style');
            $c->utilisateur_id=Auth::id();

            $c->fichier = $request->file('chanson')->store("public/chansons/".Auth::id());
            $c->fichier = str_replace("public/", "/storage/", $c->fichier);
            $c->save();
        }
        return redirect("/");
    }

    public function utilisateur($id) {
        $utilisateur = User::find($id);
        if ($utilisateur == false) {
            return abort(404);
        }
        return view("utilisateur", ["utilisateur"=>$utilisateur]);

    }

    public function suivi($id) {
        $utilisateur = User::find($id);
        if ($utilisateur == false) {
            return abort(403);
        }
        Auth::user()->jeLesSuit()->toggle($id);
        return back();
    }

    public function ajax(){
        return "blablabla";
    }

    //public function recherche($s) {
      //  $users = User::whereRaw("name LIKE CONCAT(?, '%')") [$s])->get();
       // return view("recherche", ['utilisateurs' => $users]);
    //}
}
