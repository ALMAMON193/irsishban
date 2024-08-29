<?php

namespace App\Http\Controllers\Web\Backend\Course;

use App\Models\CMS;
use App\Helper\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function HeroSectionCMS()
    {
        $data = CMS::where('section', 'course_hero_section')->latest()->first();
        return view('backend.layouts.cms.course.hero_section',compact('data'));
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
            ['section' => 'course_hero_section'],
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
            ? 'The CMS  Course Hero Section has been successfully created.'
            : 'The CMS  Course Hero Section has been successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function SubHeroSectionCMS()
    {
        $data = CMS::where('section', 'course_subhero_section')->latest()->first();
        return view('backend.layouts.cms.course.subhero_section', compact('data'));
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
            $subHeroSection = Helper::fileUpload($request->file('image'), 'cms/course/subhero-section', $randomString);
        }

        $cms = CMS::updateOrCreate(
            ['section' => 'course_subhero_section'],
            [
                'title' => $request->title,
                'description' => $request->description,
                'card_content' => $request->card_content,
                'subtitle' => $request->subtitle,
                'image' => $subHeroSection,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS Course Sub Hero Section successfully created.'
            : 'CMS Course Sub Hero Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function ExpertSectionCMS()
    {
        $data = CMS::where('section', 'course_expert_section')->latest()->first();
        return view('backend.layouts.cms.course.expert_section', compact('data'));
    }

    public function ExpertSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'course_expert_section'],
            [
                'title' => $request->title,
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'CMS Course expert Section successfully created.'
            : 'CMS Course expert Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function EnrollSectionCMS()
    {
        $data = CMS::where('section', 'course_enroll_section')->latest()->first();
        return view('backend.layouts.cms.course.enroll_classes_section', compact('data'));
    }

    public function EnrollSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'course_enroll_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'CMS Course Erroll Section successfully created.'
            : 'CMS Course Enroll Section successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }

}
