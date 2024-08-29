<?php

namespace App\Http\Controllers\Web\Backend\CoachingReview;

use App\Models\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinalCoachingReviewController extends Controller
{
    public function HeroSectionCMS()
    {
        $data = CMS::where('section', 'certification_hero_section')->latest()->first();
        return view('backend.layouts.cms.certification.hero_section', compact('data'));
    }
    public function heroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            // 'image' => 'nullable|file|mimes:jpeg,png,gif|max:5120',
        ]);
        // if ($request->hasFile('image')) {
        //     $randomString = (string) Str::uuid();
        //     $HeroSection = Helper::fileUpload($request->file('image'), 'cms/hero-section', $randomString);
        // }

        $cms = CMS::updateOrCreate(
            ['section' => 'certification_hero_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'button_link' => $request->button_link,
                'button_text' => $request->button_text,
                // 'image' => $HeroSection,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'The CMS  Certification Hero Section has been successfully created.'
            : 'The CMS  Certification Hero Section has been successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function SubHeroSectionCMS()
    {
        $data = CMS::where('section', 'certification_subhero_section')->latest()->first();
        return view('backend.layouts.cms.certification.subhero_section', compact('data'));
    }

    public function subHeroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
        ]);

        $cms = CMS::updateOrCreate(
            ['section' => 'certification_subhero_section'],
            [
                'title' => $request->title,
                'button_text' => $request->button_text,
                'subtitle' => $request->subtitle,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS Certification Sub  Hero Section successfully created.'
            : 'CMS Certification Sub  Hero Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
}
