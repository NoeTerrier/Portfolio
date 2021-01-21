<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pixelArtController extends Controller
{
    public function show() {
        $imgs = DB::table('imagesPerZone')
                    ->join('imagesData', 'id_image', '=', 'imagesData.id')
                    ->join('zones', 'id_zone', '=', 'zones.id')
                    ->where('label', 'pixel_art')
                    ->get();

        $pageList = ["space"      => "/portfolio/artwork/space",
                     "pixel art"  => "/portfolio/artwork/pixelArt",
                     "888"        => "/portfolio/artwork/888",
                     "graphic design" => "/portfolio/graphicDesign"];

        return view('pixelArt', compact('pageList', 'imgs'));
    }
}
