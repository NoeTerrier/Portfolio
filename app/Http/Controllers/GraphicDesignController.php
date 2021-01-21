<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphicDesignController extends Controller
{
    public function show() {
        $pageList = ["space"      => "/portfolio/artwork/space",
                     "pixel art"  => "/portfolio/artwork/pixelArt",
                     "888"        => "/portfolio/artwork/888",
                     "graphic design" => "/portfolio/graphicDesign"];

        return view('graphicDesign', compact('pageList'));
    }
}
