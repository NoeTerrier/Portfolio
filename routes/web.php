<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewsController;

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

Route::get('/', [ViewsController::class, 'showHomePage']);

Route::get('portfolio', [ViewsController::class, 'showHomePage']);

Route::get('portfolio/artwork', [ViewsController::class, 'showArtwork']);

Route::get('portfolio/artwork/space', [ViewsController::class, 'showSpace']);

Route::get('portfolio/artwork/pixelArt', [ViewsController::class, 'showPixelArt']);

Route::get('portfolio/artwork/888', [ViewsController::class, 'show888']);

Route::get('portfolio/graphicDesign', [ViewsController::class, 'showGraphicDesign']);

Route::get('portfolio/projects', [ViewsController::class, 'showProjects']);

Route::get('portfolio/about', [ViewsController::class, 'showAboutPage']);
