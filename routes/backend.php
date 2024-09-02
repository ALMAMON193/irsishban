<?php

use App\Models\CourseSchedule;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\Backend\Course\CourseController;
use App\Http\Controllers\Web\Backend\CMS\Home\HomeCMSController;
use App\Http\Controllers\Web\backend\Category\CategoryController;
use App\Http\Controllers\Web\Backend\CourseSchedule\ScheduleController;
use App\Http\Controllers\Web\Backend\CMS\LastReview\LastReviewController;
use App\Http\Controllers\Web\Backend\CMS\Certification\CertificationController;
use App\Http\Controllers\Web\Backend\CMS\CoachingReview\FinalCoachingReviewController;
use App\Http\Controllers\Web\Backend\Expect\ExpectController;

//cms all route
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

          Route::get('/last-review/sub_hero-section', 'SubHeroSectionCMS')->name('lastreview.subhero.section');
          Route::post('/last-review/sub_hero-section/store', 'SubheroSectionCMSStore')->name('lastreview.subhero.section.store');

          Route::get('/last-review/about-us-section', 'AboutUsSectionCMS')->name('lastreview.aboutus.section');
          Route::post('/last-review/about-us-section/store', 'AboutUsSectionCMSStore')->name('lastreview.aboutus.section.store');

          Route::get('/last-review/expect-section', 'ExpectSectionCMS')->name('lastreview.expect.section');
          Route::post('/last-review/expect-section/store', 'ExpectSectionCMSStore')->name('lastreview.expect.section.store');

          Route::get('/last-review/get-strated-section', 'GetStratedSectionCMS')->name('lastreview.get.strated.section');
          Route::post('/last-review/get-strated-section/store', 'GetStratedSectionCMSStore')->name('lastreview.get.strated.section.store');
});
Route::controller(CertificationController::class)->group(function () {
          Route::get('/certification/hero-section', 'HeroSectionCMS')->name('certification.hero.section');
          Route::post('/certification/hero-section/store', 'heroSectionCMSStore')->name('certification.hero.section.store');

          Route::get('/certification/subhero-section', 'SubHeroSectionCMS')->name('certification.subhero.section');
          Route::post('/certification/subhero-section/store', 'SubHeroSectionCMSStore')->name('certification.subhero.section.store');
});
Route::controller(FinalCoachingReviewController::class)->group(function () {
          Route::get('/coaching/hero-section', 'HeroSectionCMS')->name('final.review.coaching.hero.section');
          Route::post('/coaching/hero-section/store', 'heroSectionCMSStore')->name('final.review.coaching.hero.section.store');

          Route::get('/coaching/subhero-section', 'SubHeroSectionCMS')->name('final.review.coaching.subhero.section');
          Route::post('/coaching/subhero-section/store', 'SubHeroSectionCMSStore')->name('final.review.coaching.subhero.section.store');

          Route::get('/coaching/review-section', 'ReviewSectionCMS')->name('final.review.coaching.review.section');
          Route::post('/coaching/review-section/store', 'ReviewSectionCMSStore')->name('final.review.coaching.review.section.store');

          Route::get('/coaching/outline-section', 'OutlineSectionCMS')->name('final.review.coaching.outline.section');
          Route::post('/coaching/outline-section/store', 'OutlineSectionCMSStore')->name('final.review.coaching.outline.section.store');

          Route::get('/coaching/about-us-section', 'AboutUsSectionCMS')->name('final.review.coaching.about-us.section');
          Route::post('/coaching/about-us-section/store', 'AboutUsSectionCMSStore')->name('final.review.coaching.about-us.section.store');

          Route::get('/coaching/get-strated-section', 'GetStratedSectionCMS')->name('final.review.coaching.get.strated.section');
          Route::post('/coaching/get-strated-section/store', 'GetStratedSectionCMSStore')->name('final.review.coaching.get.started.section.store');

          Route::get('/coaching/schedule-section', 'ScheduleSectionCMS')->name('final.review.coaching.schedule.section');
          Route::post('/coaching/schedule-section/store', 'ScheduleSectionCMSStore')->name('final.review.coaching.schedule.section.store');
});
Route::controller(CourseController::class)->group(function () {
          Route::get('/course/hero-section', 'HeroSectionCMS')->name('course.hero.section');
          Route::post('/course/hero-section/store', 'heroSectionCMSStore')->name('course.hero.section.store');

          Route::get('/course/sub_hero-section', 'SubHeroSectionCMS')->name('course.subhero.section');
          Route::post('/course/sub_hero-section/store', 'SubHeroSectionCMSStore')->name('course.subhero.section.store');

          Route::get('/course/expect-section', 'ExpertSectionCMS')->name('course.expect.section');
          Route::post('/course/expect-section/store', 'ExpertSectionCMSStore')->name('course.expect.section.store');

          Route::get('/course/enroll-section', 'EnrollSectionCMS')->name('course.enroll.section');
          Route::post('/course/enroll-section/store', 'EnrollSectionCMSStore')->name('course.enroll.section.store');
});

Route::controller(CategoryController::class)->name('category.')->prefix('category')->group(function () {
          Route::get('/', 'index')->name('index');
          Route::get('/create', 'create')->name('create');
          Route::post('/store', 'store')->name('store');
          Route::get('/edit/{id}', 'edit')->name('edit');
          Route::post('/update/{id}', 'update')->name('update');
          Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});
Route::controller(CourseController::class)->name('course.')->prefix('course')->group(function () {
          Route::get('/', 'index')->name('index');
          Route::get('/create', 'create')->name('create');
          Route::post('/store', 'store')->name('store');
          Route::get('/edit/{id}', 'edit')->name('edit');
          Route::post('/update/{id}', 'update')->name('update');
          Route::delete('/destroy/{id}', 'destroy')->name('destroy');
          Route::get('/status/{id}', 'status')->name('status');
});
Route::controller(ScheduleController::class)->name('course.schedule.')->prefix('course/schedule')->group(function () {
          Route::get('/', 'index')->name('index');
          Route::get('/create', 'create')->name('create');
          Route::post('/store', 'store')->name('store');
          Route::get('/edit/{id}', 'edit')->name('edit');
          Route::post('/update/{id}', 'update')->name('update');
          Route::delete('/destroy/{id}', 'destroy')->name('destroy');
          Route::get('/status/{id}', 'status')->name('status');
});
Route::controller(ExpectController::class)->name('expect.')->prefix('expect')->group(function () {
          Route::get('/', 'index')->name('index');
          Route::get('/create', 'create')->name('create');
          Route::post('/store', 'store')->name('store');
          Route::get('/edit/{id}', 'edit')->name('edit');
          Route::post('/update/{id}', 'update')->name('update');
          Route::delete('/destroy/{id}', 'destroy')->name('destroy');
          Route::get('/status/{id}', 'status')->name('status');
});
