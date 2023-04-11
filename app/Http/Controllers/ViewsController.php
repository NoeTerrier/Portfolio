<?php

namespace App\Http\Controllers;

use App\Models\ImageData;
use App\Models\Invitation;
use App\Models\Zone;

class ViewsController extends Controller
{
    //========= CONSTANTS =========//
    const ARTWORK_MENU = [
        "space"     => "/portfolio/artwork/space",
        "pixel art" => "/portfolio/artwork/pixelArt",
        "888"       => "/portfolio/artwork/888",
        "graphic design" => "/portfolio/graphicDesign",
        "memory"    => "/portfolio/artwork/memory"
    ];

    const ABOUT_MENU = [
        "Gallery"  => "/portfolio/artwork",
        "Projects"  => "/portfolio/projects"
    ];

    const PROJECTS_MENU =  [
        "Gallery"  => "/portfolio/artwork",
        "About"  => "/portfolio/about"
    ];

    const HOME_PAGE_MENU = [
        "Gallery"  => "/portfolio/artwork",
        "Projects"  => "/portfolio/projects",
        "About"    => "/portfolio/about"
    ];


    //========= VIEW FUNCTIONS =========//
    public function showAboutPage()
    {
        return view('about', ['pageList' => self::ABOUT_MENU]);
    }

    public function showArtwork()
    {
        $columns = [
            'left'   => 'column_left',
            'center' => 'column_center',
            'right'  => 'column_right'
        ];

        foreach ($columns as $key => $value) {
            $columns[$key] = ImageData::inZone($value)->shuffle();
        }

        return view('artwork', [
            'columns' => $columns,
            'pageList' => self::ARTWORK_MENU
        ]);
    }

    public function showGraphicDesign()
    {
        return view('graphicDesign', ['pageList' => self::ARTWORK_MENU]);
    }

    public function showHomePage()
    {
        return view('index', ['pageList' => self::HOME_PAGE_MENU]);
    }

    public function showPixelArt()
    {
        return view('pixelArt', [
            'pageList' => self::ARTWORK_MENU,
            'imgs'     => ImageData::inZone('pixel_art')
        ]);
    }

    public function show888()
    {
        $zones = ["Amour chimique", "Gravité", "Longueur d'onde", "Vie"];
        $series = [];

        foreach ($zones as $zoneName) {
            $series[$zoneName] = ImageData::inZone($zoneName);
        }

        return view('888', [
            'series' => $series,
            'pageList' => self::ARTWORK_MENU
        ]);
    }

    public function showProjects()
    {
        return view('projects', ['pageList' => self::PROJECTS_MENU]);
    }

    public function showSpace()
    {
        return view('space', [
            'pageList' => self::ARTWORK_MENU,
            'imgs'     => ImageData::inZone('space')
        ]);
    }

    public function showMemory()
    {
        return view('memory', [
            'pageList' => self::ARTWORK_MENU,
            'imgs' => ImageData::inZone('memory')
        ]);
    }

    public function showAdmin()
    {
        return view('admin', [
            'pageList' => self::ARTWORK_MENU,
            'zones' => Zone::all()->sortBy('label'),
            'images' => ImageData::all(),
            'invitation' => Invitation::last()
        ]);
    }

    public function showEditImage($imageId)
    {
        return view('editImage', [
            'pageList' => self::ARTWORK_MENU,
            'zones' => Zone::all()->sortBy('label'),
            'image' => ImageData::find($imageId),
        ]);
    }

    public function showInvitation() {
        $inv = Invitation::last();

        return view('invitation', [
            'eventName' => is_null($inv) ? "Nothing" : $inv->eventName,
            'date' => is_null($inv) ? 'never' : $inv->date,
            'description' => is_null($inv) ? "You're not invited because nothing is planned. Or maybe because we don't like you." : $inv->description
        ]);
    }
}
