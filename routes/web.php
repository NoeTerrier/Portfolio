<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('portfolio', function () {
    return view('index');
});

Route::get('portfolio/artwork', function () {
    $imgsByColumns = ['left'   => ["Titan", "voyager1", "fenêtre", "chat_noir", "jungle"],
                      'center' => ["curiosity", "hand", "art and science_3", "ISS"],
                      'right'  => ["cascade", "chevalier", "montagne", "oiseau", "chat_rose"]];

    return view('artwork', compact('imgsByColumns'));
});

Route::get('portfolio/artwork/space', function () {
    return view('space');
});

Route::get('portfolio/artwork/pixelArt', function () {
    return view('pixel_art');
});

Route::get('portfolio/artwork/888', function () {
    $series = ['amour chimique'     => ["chevalier", "chevalier", "chevalier"],
               'gravité'            => ["chevalier", "chevalier", "chevalier"],
               'longueur d\'onde'   => ["chevalier", "chevalier", "chevalier"],
               'vie'                => ["chevalier", "chevalier", "chevalier"]];

    return view('888', compact('series'));
});

Route::get('portfolio/artwork/logos', function () {
    return view('logos');
});

Route::get('portfolio/about', function () {
    return view('about');
});
