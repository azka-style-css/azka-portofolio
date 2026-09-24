<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/app');
});

route::get('/home', function () {
    return view('home');
});

route::get('/about', function () {
    return view('about');
});

route::get('/work', function () {
    return view('work');
});

route::get('/blog', function () {
    return view('blog');
});

route::get('/contact', function () {
    return view('contact');
});