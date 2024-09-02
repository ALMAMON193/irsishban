<?php

namespace App\Http\Controllers\Web\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{

    public function Certification(){
        return view('frontend.layouts.certification');
    }
    public function LastReview(){

        return view('frontend.layouts.last_review');
    }
    public function FinalCoachingReview(){
        return view('frontend.layouts.coaching_review');
    }
    public function Courses(){
        return view('frontend.layouts.courses');
    }
}
