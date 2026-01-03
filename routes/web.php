<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/advantages', [PageController::class, 'advantages'])->name('advantages');
Route::get('/specifications', [PageController::class, 'specifications'])->name('specifications');
Route::get('/comparing', [PageController::class, 'comparing'])->name('comparing');
Route::get('/photos', [PageController::class, 'photos'])->name('photos');
Route::get('/buy', [PageController::class, 'buy'])->name('buy');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::post('/contact', [ContactController::class, 'submit'])
    ->name('contact.submit')
    ->middleware('throttle:3,1'); // Rate limiting: 3 attempts per minute
