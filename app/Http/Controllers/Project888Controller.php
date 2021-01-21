<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Project888Controller extends Controller
{
    public function show() {

        $zones = ["Amour chimique", "Gravité", "Longueur d'onde", "Vie"];

        $series = [];

        foreach ($zones as $zoneName) {
            $series[$zoneName] = DB::table('imagesPerZone')
                        ->join('imagesData', 'id_image', '=', 'imagesData.id')
                        ->join('zones', 'id_zone', '=', 'zones.id')
                        ->where('label', $zoneName)
                        ->get();
        }

        $pageList = ["space"      => "/portfolio/artwork/space",
                     "pixel art"  => "/portfolio/artwork/pixelArt",
                     "888"        => "/portfolio/artwork/888",
                     "graphic design" => "/portfolio/graphicDesign"];

        return view('888', compact('series', 'pageList'));
    }
}
