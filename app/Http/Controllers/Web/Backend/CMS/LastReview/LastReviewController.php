<?php

namespace App\Http\Controllers\Web\Backend\CMS\LastReview;

use App\Models\CMS;
use App\Helper\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LastReviewController extends Controller
{
    public function HeroSectionCMS()
    {
        $data = CMS::where('section', 'last_review_hero_section')->latest()->first();
        return view('backend.layouts.cms.last_minute_review.hero_section', compact('data'));
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
            ['section' => 'last_review_hero_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'button_link' => $request->button_link,
                'button_text' => $request->button_text,
                // 'image' => $HeroSection,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS  data successfully created.'
            : 'CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function SubHeroSectionCMS()
    {
        $data = CMS::where('section', 'last_review_sub_hero_section')->latest()->first();
        return view('backend.layouts.cms.last_minute_review.subhero_section', compact('data'));
    }

    public function SubheroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_link' => 'nullable|string',
            'button_text' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,gif|max:5120',
        ]);

        $cms = CMS::where('section', 'last_review_sub_hero_section')->first();
        $imageUrl = $cms ? $cms->image : null;

        if ($request->hasFile('image')) {

            if ($cms && $cms->image) {
                Helper::deleteFile($cms->image);
            }
            $randomString = (string) Str::uuid();
            $imageUrl = Helper::fileUpload($request->file('image'), 'cms/LastMinute/subhero-section', $randomString);
        } elseif ($request->input('remove_image') && $cms && $cms->image) {
            Helper::deleteFile($cms->image);
            $imageUrl = null;
        }



        $cms = CMS::updateOrCreate(
            ['section' => 'last_review_sub_hero_section'],
            [
                'title' => $request->title,
                'description' => $request->description,
                'button_link' => $request->button_link,
                'button_text' => $request->button_text,
                'image' => $imageUrl,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS data successfully created.'
            : 'CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function AboutUsSectionCMS()
    {
        $data = CMS::where('section', 'last_minute_review_about_us_section')->latest()->first();
        return view('backend.layouts.cms.last_minute_review.about_us_section', compact('data'));
    }

    public function AboutUsSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string',
            'button_text' => 'nullable|string',
            'button_link' => 'nullable|string',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'last_minute_review_about_us_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'button_link' => $request->button_link,
                'button_text' => $request->button_text,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS data successfully created.'
            : 'CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function ExpectSectionCMS()
    {
        $data = CMS::where('section', 'last_minute_review_expect_section')->latest()->first();
        return view('backend.layouts.cms.last_minute_review.expect_section', compact('data'));
    }

    public function ExpectSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'last_minute_review_expect_section'],
            [
                'title' => $request->title,

            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS data successfully created.'
            : 'CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function GetStratedSectionCMS()
    {
        $data = CMS::where('section', 'last_minute_review_get_started_section')->latest()->first();
        return view("backend.layouts.cms.last_minute_review.get_started_section", compact('data'));
    }

    public function GetStratedSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'last_minute_review_get_started_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,

            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS data successfully created.'
            : 'CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
}
