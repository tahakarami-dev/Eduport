<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/admin' , [\App\Http\Controllers\Admin\PanelController::class, 'index'])->name('panel');
