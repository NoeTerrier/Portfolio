<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class ArtworkController extends Controller
{

    public function show() {
        $column_right = DB::table('imagesPerZone')
                    ->join('imagesData', 'id_image', '=', 'imagesData.id')
                    ->join('zones', 'id_zone', '=', 'zones.id')
                    ->where('label', 'column_right')
                    ->get();

        $column_center = DB::table('imagesPerZone')
                    ->join('imagesData', 'id_image', '=', 'imagesData.id')
                    ->join('zones', 'id_zone', '=', 'zones.id')
                    ->where('label', 'column_center')
                    ->get();

        $column_left = DB::table('imagesPerZone')
                    ->join('imagesData', 'id_image', '=', 'imagesData.id')
                    ->join('zones', 'id_zone', '=', 'zones.id')
                    ->where('label', 'column_left')
                    ->get();

        $columns = ['left'   => $column_left,
                    'center' => $column_center,
                    'right'  => $column_right];

        $pageList = ["space"      => "/portfolio/artwork/space",
                     "pixel art"  => "/portfolio/artwork/pixelArt",
                     "888"        => "/portfolio/artwork/888"];

        return view('artwork', compact('columns', 'pageList'));
    }
}
