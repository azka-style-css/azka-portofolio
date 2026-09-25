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
        'blade-layouts' => [
            'title' => 'Blade Layouts without Build Steps',
            'summary' => 'Learn how to architect clean, modular Blade templates using component architecture and CDN assets without Vite compilation overhead.',
            'date' => 'Sept 2026',
            'read_time' => '5 min read',
        ],
        'why-simplicity' => [
            'title' => 'Why Simplicity Wins in UI Design',
            'summary' => 'Exploring the philosophy of minimalism in modern web interfaces, stripping away unnecessary bloat, and prioritizing content clarity.',
            'date' => 'Aug 2026',
            'read_time' => '3 min read',
        ],
        'tailwind-cdn' => [
            'title' => 'Mastering Utility-First Styling with Tailwind CDN',
            'summary' => 'Discover how to rapidly prototype web layouts without waiting for Vite or Node compilation tasks.',
            'date' => 'Jul 2026',
            'read_time' => '7 min read',
        ],
    ];

    $selectedSlug = request('selected', 'blade-layouts');
    
    $activeArticle = $articles[$selectedSlug] ?? $articles['blade-layouts'];

    return view('blog', compact('articles', 'activeArticle', 'selectedSlug'));
});

route::get('/contact', function () {
    return view('contact');
});