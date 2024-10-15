<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kursus.home');
});

Route::get('/about', function () {
    return view('kursus.about');
});
Route::get('/service', function () {
    return view('kursus.service');
});
Route::get('/blog', function () {
    return view('kursus.blog');
});
Route::get('/portfolio', function () {
    return view('kursus.portfolio');
});

