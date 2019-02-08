<?php

namespace App\Http\Controllers;

use App\Chanson;
use App\User;
use Illuminate\Http\Request;

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

    public function utilisateur($id) {
        $utilisateur = User::find($id);
        if ($utilisateur == false) {
            return abort(404);
        }
        return view("utilisateur", ["utilisateur"=>$utilisateur]);

    }
}
