<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class ArtworkController extends Controller
{

    public function show() {



        $columns = ['left'   => 'column_left',
                    'center' => 'column_center',
                    'right'  => 'column_right'];

        foreach ($columns as $key => $value) {
            $columns[$key] = DB::table('imagesPerZone')
                        ->join('imagesData', 'id_image', '=', 'imagesData.id')
                        ->join('zones', 'id_zone', '=', 'zones.id')
                        ->where('label', $value)
                        ->get();
        }

        $pageList = ["space"      => "/portfolio/artwork/space",
                     "pixel art"  => "/portfolio/artwork/pixelArt",
                     "888"        => "/portfolio/artwork/888"];

        return view('artwork', compact('columns', 'pageList'));
    }
}
