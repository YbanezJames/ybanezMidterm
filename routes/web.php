<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('main');
});

Route::get('post',[PostController::class, 'Post']);
Route::get('home',[HomeController::class, 'index']);