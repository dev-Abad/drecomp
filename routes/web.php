<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/build', function () {
    return view('build');
})->name('build');

Route::get('/package', function () {
    return view('package');
})->name('package');

Route::get('/pisonet', function () {
    return view('pisonet');
})->name('pisonet');

Route::get('/laptop', function () {
    return view('laptop');
})->name('laptop');

Route::get('/printer', function () {
    return view('printer');
})->name('printer');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');