<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\CMSController;

Route::controller(CMSController::class)->group(function () {
          Route::get('hero-section', 'HeroSection')->name('hero.section');
          Route::get('/books/{id}', 'show');
          Route::get('/books/search/{search}', 'search');
          Route::post('/book', 'store');
});
