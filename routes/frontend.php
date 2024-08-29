<?php

use App\Http\Controllers\Web\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
          Route::get('/certification', 'Certification')->name('certification.index');
          Route::get('/last-minute-review', 'LastReview')->name('last.review.index');
          Route::get('/final-review', 'FinalCoachingReview')->name('final.coaching.review.index');
          Route::get('/courses', 'Courses')->name('courses.index');
         
         
});
