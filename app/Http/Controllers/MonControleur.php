<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonControleur extends Controller
{
    public function index() {
        $chanson = Chanson::all();
            //->orderBy("id desc");
        return view("index", ["chansons"]=>$chansons);
    }
}
