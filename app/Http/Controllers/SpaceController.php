<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spaceController extends Controller
{
    public function show() {
        $pageList = ["space"      => "/portfolio/artwork/space",
                     "pixel art"  => "/portfolio/artwork/pixelArt",
                     "888"        => "/portfolio/artwork/888"];

        return view('space', compact('pageList'));
    }
}
