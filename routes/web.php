<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::get('/galleries', [MainController::class, 'showGalleries']);

Route::get('/company', [MainController::class, 'showCompany']);

Route::get('/contact', [MainController::class, 'showContact']);

Route::get('/profiles', [MainController::class, 'showProfiles']);
