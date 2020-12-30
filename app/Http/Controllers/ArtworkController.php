<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtworkController extends Controller
{

    public function show() {
        $imgsByColumns = ['left'   => ["Titan", "voyager1", "fenêtre", "chat_noir", "jungle"],
                          'center' => ["curiosity", "hand", "art and science_3", "ISS"],
                          'right'  => ["cascade", "chevalier", "montagne", "oiseau", "chat_rose"]];

        $pageList = ["space"      => "/portfolio/artwork/space",
                     "pixel art"  => "/portfolio/artwork/pixelArt",
                     "888"        => "/portfolio/artwork/888"];

        return view('artwork', compact('imgsByColumns', 'pageList'));
    }
}
