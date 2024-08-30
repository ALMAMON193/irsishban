<?php

namespace App\Http\Controllers\Web\Backend\CoachingReview;

use App\Models\CMS;
use App\Helper\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinalCoachingReviewController extends Controller
{
    public function HeroSectionCMS()
    {
        $data = CMS::where('section', 'final_review_coaching_hero_section')->latest()->first();
        return view('backend.layouts.cms.final_coaching_review.hero_section', compact('data'));
    }
    public function heroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'subdescription' => 'nullable|string',
            'button_text' => 'nullable|string',
            'button_link' => 'nullable|string',
            // 'image' => 'nullable|file|mimes:jpeg,png,gif|max:5120',
        ]);
        // if ($request->hasFile('image')) {
        //     $randomString = (string) Str::uuid();
        //     $HeroSection = Helper::fileUpload($request->file('image'), 'cms/hero-section', $randomString);
        // }
        $cms = CMS::updateOrCreate(
            ['section' => 'final_review_coaching_hero_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'subdescription' => $request->subdescription,
                'button_link' => $request->button_link,
                'button_text' => $request->button_text,
                // 'image' => $HeroSection,
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'The CMS  Coaching Review Hero Section has been successfully created.'
            : 'The CMS  Coaching Review Hero Section has been successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function SubHeroSectionCMS()
    {
        $data = CMS::where('section', 'coaching_review_subhero_section')->latest()->first();
        return view("backend.layouts.cms.final_coaching_review.subhero_section", compact('data'));
    }
    public function subHeroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'subdescription' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,gif|max:10240',

        ]);
        $cms = CMS::where('section', 'coaching_review_subhero_section')->first();
        $imageUrl = $cms ? $cms->image : null;

        if ($request->hasFile('image')) {

            if ($cms && $cms->image) {
                Helper::deleteFile($cms->image);
            }
            $randomString = (string) Str::uuid();
            $imageUrl = Helper::fileUpload($request->file('image'), 'cms/final_coaching/subhero_section', $randomString);
        } elseif ($request->input('remove_image') && $cms && $cms->image) {
            Helper::deleteFile($cms->image);
            $imageUrl = null;
        }
        $cms = CMS::updateOrCreate(
            ['section' => 'coaching_review_subhero_section'],
            [
                'title' => $request->title,
                'description' => $request->description,
                'subdescription' => $request->subdescription,
                'image' => $imageUrl
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'CMS Final Coacjing Sub  Hero Section successfully created.'
            : 'CMS Final Coacjing Sub  Hero Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function ReviewSectionCMS()
    {
        $data = CMS::where('section', 'coaching_review_section')->latest()->first();
        return view('backend.layouts.cms.final_coaching_review.review_section', compact('data'));
    }
    public function ReviewSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'subdescription' => 'nullable|string',
            'button_text' => 'nullable|string',
            'button_link' => 'nullable|string',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'coaching_review_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'subdescription' => $request->subdescription,
                'button_text' => $request->button_text,
                'button_link' => $request->button_link,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS Coaching Review Section successfully created.'
            : 'CMS Coaching Review Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function OutlineSectionCMS()
    {
        $data = CMS::where('section', 'coaching_review_outline_section')->latest()->first();
        return view('backend.layouts.cms.final_coaching_review.outline_section', compact('data'));
    }

    public function OutlineSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'coaching_review_outline_section'],
            [
                'title' => $request->title,
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'CMS Coaching Review Outline Section successfully created.'
            : 'CMS Coaching Review Outline Section successfully updated.';
        session()->flash('success', $message);
        return redirect()->back();
    }
    public function AboutUsSectionCMS()
    {
        $data = CMS::where('section', 'coaching_review_about_us_section')->latest()->first();
        return view("backend.layouts.cms.final_coaching_review.about_us_section", compact('data'));
    }
    public function AboutUsSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',

        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'coaching_review_about_us_section'],
            [
                'title' => $request->title,
                'description' => $request->description,

            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'CMS Coaching Review About Us Section successfully created.'
            : 'CMS Coaching Review About Us Section successfully updated.';
        session()->flash('success', $message);

        return redirect()->back();
    }
    public function GetStratedSectionCMS()
    {
        $data = CMS::where('section', 'coaching_review_get_strated_section')->latest()->first();
        return view('backend.layouts.cms.final_coaching_review.simple_steps_get_started_section', compact('data'));
    }
    public function GetStratedSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'coaching_review_get_strated_section'],
            [
                'title' => $request->title,
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'CMS Coaching Review Get strated Section successfully created.'
            : 'CMS Coaching Review Get strated Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function ScheduleSectionCMS()
    {
        $data = CMS::where('section', 'coaching_review_schedule_section')->latest()->first();
        return view('backend.layouts.cms.final_coaching_review.schedule_section', compact('data'));
    }

    public function ScheduleSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'subdescription' => 'nullable|string',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'coaching_review_schedule_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'subdescription' => $request->subdescription,
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'CMS Coaching Review About Us Section successfully created.'
            : 'CMS Coaching Review About Us Section successfully updated.';

        session()->flash('success', $message);
        return redirect()->back();
    }
}
