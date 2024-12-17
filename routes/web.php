<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/galleries', function () {
    return view('galleries');
});
Route::get('/company', function () {
    return view('company');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/profiles', function () {
    return view('profiles');
});
