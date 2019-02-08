<?php

namespace App\Http\Controllers;

use App\Chanson;
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
}
