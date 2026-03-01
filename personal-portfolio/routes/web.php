<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Changed from 'welcome' to 'index'
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});
