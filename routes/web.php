<?php

use App\Http\Controllers\ImageDataController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewsController;
use App\Http\Controllers\ZoneController;

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

Route::prefix('portfolio')->group(function () {
    Route::get('/', [ViewsController::class, 'showHomePage']);

    Route::get('/artwork', [ViewsController::class, 'showArtwork']);

    Route::get('/artwork/space', [ViewsController::class, 'showSpace']);

    Route::get('/artwork/pixelArt', [ViewsController::class, 'showPixelArt']);

    Route::get('/artwork/888', [ViewsController::class, 'show888']);

    Route::get('/graphicDesign', [ViewsController::class, 'showGraphicDesign']);

    Route::get('/projects', [ViewsController::class, 'showProjects']);

    Route::get('/about', [ViewsController::class, 'showAboutPage']);


    Route::prefix('admin')->group(function () {
        Route::get('/', [ViewsController::class, 'showAdmin'])->name("admin.index");

        Route::post('/image-data/new', [ImageDataController::class, 'store'])->name("imageData.store");

        Route::get('/image-data/edit/{image}', [ViewsController::class, 'showEditImage'])->name("imageData.edit");

        Route::post('/image-data/update/{image}', [ImageDataController::class, 'update'])->name("imageData.update");

        Route::delete('/image-data/delete/{image}', [ImageDataController::class, 'destroy'])->name("imageData.destroy");

        Route::post('/zone/new', [ZoneController::class, 'store'])->name("zone.store");

        Route::post('/zone/update/{zone}', [ZoneController::class, 'update'])->name("zone.update");

        Route::delete('/zone/delete/{zone}', [ZoneController::class, 'destroy'])->name("zone.destroy");
    });
});
