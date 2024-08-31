<?php

namespace App\Http\Controllers\Web\Backend\CMS\Course;

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
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string',
            'button_link' => 'nullable|string',
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
            ? 'CMS data successfully created.'
            : 'CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function SubHeroSectionCMS()
    {
        $data = CMS::where('section', 'course_sub_hero_section')->latest()->first();
        return view('backend.layouts.cms.course.subhero_section', compact('data'));
    }

    public function SubHeroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'card_content' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,gif,svg|max:5120',
        ]);

        // Find existing CMS section
        $cms = CMS::where('section', 'course_sub_hero_section')->first();
        // Initialize image variable
        $subHeroSection = $cms ? $cms->image : null;
        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($cms && $cms->image) {
                Helper::deleteFile($cms->image);
            }

            // Upload new image
            $randomString = (string) Str::uuid();
            $subHeroSection = Helper::fileUpload($request->file('image'), 'cms/course/subhero-section', $randomString);
        } elseif ($request->input('remove_image') && $cms && $cms->image) {
            Helper::deleteFile($cms->image);
            $subHeroSection = null;
        }



        $cms = CMS::updateOrCreate(
            ['section' => 'course_sub_hero_section'],
            [
                'title' => $request->title,
                'description' => $request->description,
                'card_content' => $request->card_content,
                'subtitle' => $request->subtitle,
                'image' => $subHeroSection,
            ]
        );

        $message = $cms->wasRecentlyCreated
            ? 'CMS data successfully created.'
            : 'CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function ExpertSectionCMS()
    {
        $data = CMS::where('section', 'course_expert_section')->latest()->first();
        return view('backend.layouts.cms.course.expect_section', compact('data'));
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
            ? 'CMS data successfully created.'
            : 'CMS data successfully updated.';

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
            'subtitle' => 'nullable|string',
        ]);
        $cms = CMS::updateOrCreate(
            ['section' => 'course_enroll_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'CMS data successfully created.'
            : 'CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }

}
