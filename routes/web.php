<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\Project888Controller;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\PixelArtController;
use App\Http\Controllers\ProjectsController;

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

Route::get('/', [HomeController::class, 'show']);

Route::get('portfolio', [HomeController::class, 'show']);

Route::get('portfolio/artwork', [ArtworkController::class, 'show']);

Route::get('portfolio/artwork/space', [SpaceController::class, 'show']);

Route::get('portfolio/artwork/pixelArt', [PixelArtController::class, 'show']);

Route::get('portfolio/artwork/888', [Project888Controller::class, 'show']);

Route::get('portfolio/logos', function () {
    return view('logos');
});

Route::get('portfolio/projects', [ProjectsController::class, 'show']);

Route::get('portfolio/about', [AboutController::class, 'show']);
