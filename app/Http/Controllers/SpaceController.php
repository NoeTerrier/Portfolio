<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class spaceController extends Controller
{
    public function show() {

        $imgs = DB::table('imagesPerZone')
                    ->join('imagesData', 'id_image', '=', 'imagesData.id')
                    ->join('zones', 'id_zone', '=', 'zones.id')
                    ->where('label', 'space')
                    ->get();

        $pageList = ["space"      => "/portfolio/artwork/space",
                     "pixel art"  => "/portfolio/artwork/pixelArt",
                     "888"        => "/portfolio/artwork/888",
                     "graphic design" => "/portfolio/graphicDesign"];

        return view('space', compact('pageList', 'imgs'));
    }
}
