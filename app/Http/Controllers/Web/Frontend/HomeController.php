<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function Certification(){

        // $data = CMS::where('section', 'home_hero_section')->latest()->first();
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
