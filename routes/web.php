<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalattesController;
use App\Http\Controllers\ColorsController;

Route::get('/', function () {
	return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/palettes', [PalattesController::class, 'index']);
Route::get('/palettes/{name}', [PalattesController::class, 'index']);

Route::get('/colors', [ColorsController::class, 'index']);