<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/work', function () {
    $projects = [
        'penjualan-laravel' => [
        'num' => '01',
        'title' => 'Laravel POS & Cashier System',
        'short_desc' => 'Lightweight cashier web app for managing sales transactions and product inventory.',
        'featured_title' => 'Laravel Point of Sale (POS) System',
        'featured_desc' => 'A web-based cashier application developed for the Web Technologies project. Features product management, real-time transaction handling, and sales logging built on Laravel.',
        'preview_label' => 'Sales Web App Preview',
        'link' => 'https://github.com/azka-style-css/penjualan-laravel',
        ],
        'web-finance' => [
        'num' => '02',
        'title' => 'Class Financial Administration',
        'short_desc' => 'Internal treasury management web app for Class XI RPL 1 finance tracking.',
        'featured_title' => 'Class Financial Administration Web App',
        'featured_desc' => 'A dedicated web application built to streamline treasury tasks for Class XI RPL 1. Handles regular fee collection, income and expense tracking, and real-time financial logging through an administrative dashboard interface.',
        'preview_label' => 'Finance Dashboard Preview',
        'link' => 'https://github.com/azka-style-css/web-finance',
],
    ];

    $selectedSlug = request('selected', 'penjualan-laravel');
    
    $activeProject = $projects[$selectedSlug] ?? $projects['penjualan-laravel'];

    return view('work', compact('projects', 'activeProject', 'selectedSlug'));
});

Route::get('/blog', function () {
    $articles = [
        'lorem-ipsum-dolor' => [
            'title' => 'Lorem Ipsum Dolor Sit Amet',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'date' => 'Sept 2026',
            'read_time' => '5 min read',
            'detail_url' => '#',
        ],
        'consectetur-adipiscing' => [
            'title' => 'Consectetur Adipiscing Elit',
            'summary' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'date' => 'Aug 2026',
            'read_time' => '3 min read',
            'detail_url' => '#',
        ],
        'eiusmod-tempor' => [
            'title' => 'Eiusmod Tempor Incididunt',
            'summary' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint.',
            'date' => 'Jul 2026',
            'read_time' => '7 min read',
            'detail_url' => '#',
        ],
    ];

    $selectedSlug = request('selected', 'lorem-ipsum-dolor');
    
    $activeArticle = $articles[$selectedSlug] ?? $articles['lorem-ipsum-dolor'];

    return view('blog', compact('articles', 'activeArticle', 'selectedSlug'));
})->name('blog');

route::get('/contact', function () {
    return view('contact');
});

route::get('/qris', function () {
    return view('qris');
});