<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('carviews.index');
});

Route::get('/manufacturerviews', [ManufacturerController::class, 'index'])->name('manufacturerviews.index');

Route::get('/carviews', [CarController::class, 'index'])->name('carviews.index');

Route::get('/carviews.createcars', [CarController::class, 'create'])->name('carviews.createcars');

Route::post('/cars', [CarController::class, 'save'])->name('cars.save');