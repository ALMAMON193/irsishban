<?php

namespace App\Http\Controllers\Web\Backend\CMS\Home;

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
        return view('backend.layouts.cms.home.hero_section', compact('data'));
    }
    public function heroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string',
            'button_link' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,gif,svg|max:10240',
        ]);

        $cms = CMS::where('section', 'home_hero_section')->first();

        $imageUrl = $cms ? $cms->image : null;
        if ($request->hasFile('image')) {
            if ($cms && $cms->image) {
                Helper::deleteFile($cms->image);
            }
            $randomString = (string) Str::uuid();
            $imageUrl = Helper::fileUpload($request->file('image'), 'cms/home/hero-section', $randomString);
        } elseif ($request->input('remove_image') && $cms && $cms->image) {

            Helper::deleteFile($cms->image);
            $imageUrl = null;
        }


        $cms = CMS::updateOrCreate(
            ['section' => 'home_hero_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'button_link' => $request->button_link,
                'button_text' => $request->button_text,
                'image' => $imageUrl,
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? ' CMS data successfully created.'
            : ' CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function SubHeroSectionCMS()
    {
        $data = CMS::where('section', 'home_sub_hero_section')->latest()->first();
        return view('backend.layouts.cms.home.subhero_section', compact('data'));
    }

    public function SubHeroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'card_content' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,gif|max:5120',
        ]);

        $cms = CMS::where('section', 'home_sub_hero_section')->first();

        $imageUrl = $cms ? $cms->image : null;
        if ($request->hasFile('image')) {
            if ($cms && $cms->image) {
                Helper::deleteFile($cms->image);
            }
            $randomString = (string) Str::uuid();
            $imageUrl = Helper::fileUpload($request->file('image'), 'cms/home/sub_hero-section', $randomString);
        } elseif ($request->input('remove_image') && $cms && $cms->image) {

            Helper::deleteFile($cms->image);
            $imageUrl = null;
        }
        $cms = CMS::updateOrCreate(
            ['section' => 'home_sub_hero_section'],
            [
                'title' => $request->title,
                'description' => $request->description,
                'card_content' => $request->card_content,
                'subtitle' => $request->subtitle,
                'image' => $imageUrl,
            ]
        );
        $message = $cms->wasRecentlyCreated
            ? 'CMS data  successfully created.'
            : 'CMS data successfully updated.';

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
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,gif|max:5120',
        ]);

        $cms = CMS::where('section', 'home_work_section')->first();
        $imageUrl = $cms ? $cms->image : null;

        if ($request->hasFile('image')) {

            if ($cms && $cms->image) {
                Helper::deleteFile($cms->image);
            }
            $randomString = (string) Str::uuid();
            $imageUrl = Helper::fileUpload($request->file('image'), 'cms/work-section', $randomString);
        } elseif ($request->input('remove_image') && $cms && $cms->image) {
            Helper::deleteFile($cms->image);
            $imageUrl = null;
        }


        $cms = CMS::updateOrCreate(
            ['section' => 'home_work_section'],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'image' => $imageUrl,
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
        $data = CMS::where('section', 'home_Enroll_section')->latest()->first();
        return view('backend.layouts.cms.home.Enroll_classes_section', compact('data'));
    }
    public function EnrollSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string',
            'button_text' => 'nullable|string',

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
            ? 'CMS data successfully created.'
            : 'CMS data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
}
