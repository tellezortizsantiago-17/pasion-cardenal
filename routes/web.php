<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/nuestra-historia', function () {
    return view('historia');
})->name('historia');

Route::get('/calendario', function () {
    return view('partidos');
})->name('partidos');