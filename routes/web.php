<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');


Route::get('/teachers', function () {
    return view('frontend.teachers');
})->name('teachers');


Route::get('/facilities', function () {
    return view('frontend.facilities');
})->name('facilities');

Route::get('/admission', function () {
    return view('frontend.admission');
})->name('admission');


Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


