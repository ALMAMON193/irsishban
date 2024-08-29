<?php

namespace App\Http\Controllers\Web\Backend\Home;

use App\Models\CMS;
use App\Helper\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeCMSController extends Controller
{
    public function HeroSectionCMS()
    {
        $data = CMS::where('section', 'home_hero_section')->latest()->first();
        return view('backend.layouts.cms.home.hero_section',compact('data'));
    }
    public function heroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:10000',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            // 'image' => 'nullable|file|mimes:jpeg,png,gif|max:5120',
        ]);
        // if ($request->hasFile('image')) {
        //     $randomString = (string) Str::uuid();
        //     $HeroSection = Helper::fileUpload($request->file('image'), 'cms/hero-section', $randomString);
        // }

        $cms = CMS::updateOrCreate(
            ['section' => 'home_hero_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'button_link' => $request->button_link,
                'button_text' => $request->button_text,
                // 'image' => $HeroSection,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'The CMS Hero Section has been successfully created.'
            : 'The CMS Hero Section has been successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function SubHeroSectionCMS()
    {
        $data = CMS::where('section', 'home_subhero_section')->latest()->first();
        return view('backend.layouts.cms.home.subhero_section', compact('data'));
    }

    public function SubHeroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:10000',
            'card_content' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|file|mimes:jpeg,png,gif|max:5120',
        ]);

        $subHeroSection = null;
        // Image check 
        if ($request->hasFile('image')) {
            $randomString = (string) Str::uuid();
            $subHeroSection = Helper::fileUpload($request->file('image'), 'cms/subhero-section', $randomString);
        }

        $cms = CMS::updateOrCreate(
            ['section' => 'home_subhero_section'],
            [
                'title' => $request->title,
                'description' => $request->description,
                'card_content' => $request->card_content,
                'subtitle' => $request->subtitle,
                'image' => $subHeroSection,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS Sub Hero Section successfully created.'
            : 'CMS Sub Hero Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }

    public function WorkSectionCMS()
    {
        $data = CMS::where('section', 'home_work_section')->latest()->first();
        return view('backend.layouts.cms.home.work_section', compact('data'));
    }
    public function WorkSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:10000',
            'image' => 'nullable|file|mimes:jpeg,png,gif|max:5120',
        ]);

        $workSection = null;
        // Image check 
        if ($request->hasFile('image')) {
            $randomString = (string) Str::uuid();
            $workSection = Helper::fileUpload($request->file('image'), 'cms/work-section', $randomString);
        }

        $cms = CMS::updateOrCreate(
            ['section' => 'home_work_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'image' => $workSection,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS Work Section successfully created.'
            : 'CMS Work Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function EnrollSectionCMS()
    {
        $data = CMS::where('section', 'home_Enroll_section')->latest()->first();
        return view('backend.layouts.cms.home.Enroll_classes_section', compact('data'));
    }
    public function EnrollSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:255',

        ]);

        $cms = CMS::updateOrCreate(
            ['section' => 'home_Enroll_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'button_text' => $request->button_text,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS Enroll Section successfully created.'
            : 'CMS Enroll Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
}
