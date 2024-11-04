<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('upload', 'upload');
Route::post('upload1',[FileController::class, 'upload']);
