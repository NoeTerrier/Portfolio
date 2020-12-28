<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project888Controller extends Controller
{
    public function show() {
        $series = ['amour chimique'     => ["chevalier", "chevalier", "chevalier"],
                   'gravité'            => ["chevalier", "chevalier", "chevalier"],
                   'longueur d\'onde'   => ["chevalier", "chevalier", "chevalier"],
                   'vie'                => ["chevalier", "chevalier", "chevalier"]];

        return view('888', compact('series'));
    }
}
