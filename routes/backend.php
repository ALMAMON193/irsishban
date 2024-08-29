<?php

use App\Http\Controllers\Web\Backend\Certification\CertificationController;
use App\Http\Controllers\Web\Backend\CoachingReview\FinalCoachingReviewController;
use App\Http\Controllers\Web\Backend\Course\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Home\HomeCMSController;
use App\Http\Controllers\Web\Backend\LastReview\LastReviewController;

Route::controller(HomeCMSController::class)->group(function () {
          Route::get('/hero-section', 'HeroSectionCMS')->name('hero.section');
          Route::post('/hero-section/store', 'heroSectionCMSStore')->name('hero.section.store');

          Route::get('/subhero-section', 'SubHeroSectionCMS')->name('sub.hero.section');
          Route::post('/subhero-section/store', 'SubHeroSectionCMSStore')->name('sub.hero.section.store');

          Route::get('/work-section', 'WorkSectionCMS')->name('work.section');
          Route::post('/work-section/store', 'WorkSectionCMSStore')->name('work.section.store');

          Route::get('/enroll-section', 'EnrollSectionCMS')->name('enroll.section');
          Route::post('/enroll-section/store', 'EnrollSectionCMSStore')->name('enroll.section.store');
});

Route::controller(LastReviewController::class)->group(function () {
          Route::get('/last-review/hero-section', 'HeroSectionCMS')->name('lastreview.hero.section');
          Route::post('/last-review/hero-section/store', 'heroSectionCMSStore')->name('lastreview.hero.section.store');
});

Route::controller(CertificationController::class)->group(function () {
          Route::get('/certification/hero-section', 'HeroSectionCMS')->name('certification.hero.section');
          Route::post('/certification/hero-section/store', 'heroSectionCMSStore')->name('certification.hero.section.store');

          Route::get('/certification/subhero-section', 'SubHeroSectionCMS')->name('certification.subhero.section');
          Route::post('/certification/subhero-section/store', 'SubHeroSectionCMSStore')->name('certification.subhero.section.store');
});
Route::controller(FinalCoachingReviewController::class)->group(function () {
          Route::get('/certification/hero-section', 'HeroSectionCMS')->name('certification.hero.section');
          Route::post('/certification/hero-section/store', 'heroSectionCMSStore')->name('certification.hero.section.store');

          Route::get('/certification/subhero-section', 'SubHeroSectionCMS')->name('certification.subhero.section');
          Route::post('/certification/subhero-section/store', 'SubHeroSectionCMSStore')->name('certification.subhero.section.store');
});
Route::controller(CourseController::class)->group(function () {
          Route::get('/course/hero-section', 'HeroSectionCMS')->name('course.hero.section');
          Route::post('/course/hero-section/store', 'heroSectionCMSStore')->name('course.hero.section.store');

          Route::get('/course/subhero-section', 'SubHeroSectionCMS')->name('course.subhero.section');
          Route::post('/course/subhero-section/store', 'SubHeroSectionCMSStore')->name('course.subhero.section.store');

          Route::get('/course/expert-section', 'ExpertSectionCMS')->name('course.expert.section');
          Route::post('/course/expert-section/store', 'ExpertSectionCMSStore')->name('course.expert.section.store');

          Route::get('/course/enroll-section', 'EnrollSectionCMS')->name('course.enroll.section');
          Route::post('/course/enroll-section/store', 'EnrollSectionCMSStore')->name('course.enroll.section.store');
});
