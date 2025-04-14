<?php

use App\Http\Controllers\JardinController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/jardins', JardinController::class);

Route::get('/search', [JardinController::class, 'filter'])->name('jardins.filter');


