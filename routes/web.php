<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\Project888Controller;

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

Route::get('portfolio/artwork', [ArtworkController::class, 'show']);

Route::get('portfolio/artwork/space', function () {
    return view('space');
});

Route::get('portfolio/artwork/pixelArt', function () {
    return view('pixel_art');
});

Route::get('portfolio/artwork/888', [Project888Controller::class, 'show']);

Route::get('portfolio/artwork/logos', function () {
    return view('logos');
});

Route::get('portfolio/about', function () {
    return view('about');
});
