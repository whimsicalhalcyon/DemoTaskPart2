<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PageController::class, 'welcome'])->name('welcome');
Route::get('/contact', [\App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/properties', [\App\Http\Controllers\PageController::class, 'properties'])->name('properties');
Route::get('/agents', [\App\Http\Controllers\PageController::class, 'agents'])->name('agents');
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/property-details', [\App\Http\Controllers\PageController::class, 'propertyDetails'])->name('property-details');

