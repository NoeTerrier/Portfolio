<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewsController extends Controller
{
            //========= CONSTANTS =========//
    const ARTWORK_MENU = ["space"      => "/portfolio/artwork/space",
                          "pixel art"  => "/portfolio/artwork/pixelArt",
                          "888"        => "/portfolio/artwork/888",
                          "graphic design" => "/portfolio/graphicDesign"];

    const ABOUT_MENU = ["Gallery"  => "/portfolio/artwork",
                        "Projects"  => "/portfolio/projects"];

    const PROJECTS_MENU =  ["Gallery"  => "/portfolio/artwork",
                            "About"  => "/portfolio/about"];

    const HOME_PAGE_MENU = ["Gallery"  => "/portfolio/artwork",
                            "Projects"  => "/portfolio/projects",
                            "About"    => "/portfolio/about"];


            //========= VIEW FUNCTIONS =========//
    public function showAboutPage() {
        return view('about', ['pageList' => self::ABOUT_MENU]);
    }

    public function showArtwork() {
        $columns = ['left'   => 'column_left',
                    'center' => 'column_center',
                    'right'  => 'column_right'];

        foreach ($columns as $key => $value) {
            $columns[$key] = self::getImagesInDB($value);
        }

        return view('artwork', ['columns' => $columns,
                                'pageList' => self::ARTWORK_MENU]);
    }

    public function showGraphicDesign() {
        return view('graphicDesign', ['pageList' => self::ARTWORK_MENU]);
    }

    public function showHomePage() {
        return view('index', ['pageList' => self::HOME_PAGE_MENU]);
    }

    public function showPixelArt() {
        return view('pixelArt', ['pageList' => self::ARTWORK_MENU,
                                 'imgs'     => self::getImagesInDB('pixel_art')]);
    }

    public function show888() {
        $zones = ["Amour chimique", "Gravité", "Longueur d'onde", "Vie"];
        $series = [];

        foreach ($zones as $zoneName) {
            $series[$zoneName] = self::getImagesInDB($zoneName);
        }

        return view('888', ['series' => $series,
                            'pageList' => self::ARTWORK_MENU]);
    }

    public function showProjects() {
        return view('projects', ['pageList' => self::PROJECTS_MENU]);
    }

    public function showSpace() {
        return view('space', ['pageList' => self::ARTWORK_MENU,
                              'imgs'     => self::getImagesInDB('space')]);
    }


            //========= DB FUNCTIONS =========//
    private function getImagesInDB($labelName) {
        return DB::table('imagesPerZone')
                    ->join('imagesData', 'id_image', '=', 'imagesData.id')
                    ->join('zones', 'id_zone', '=', 'zones.id')
                    ->where('label', $labelName)
                    ->get();
    }
}
