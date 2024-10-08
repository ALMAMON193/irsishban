<?php

namespace App\Http\Controllers\Web\Backend\CMS\Certification;

use App\Models\CMS;
use App\Helper\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificationController extends Controller
{

    public function HeroSectionCMS()
    {
        $data = CMS::where('section', 'certification_hero_section')->latest()->first();
        return view('backend.layouts.cms.certification.hero_section',compact('data'));
    }
    public function heroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string',
            'button_text' => 'nullable|string',
            'button_link' => 'nullable|string',
            // 'image' => 'nullable|file|mimes:jpeg,png,gif|max:10240',
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
            ? 'CMS  data successfully created.'
            : 'CMS  data successfully updated.';

        session()->flash('success', $message);

        return redirect()->back();
    }
    public function SubHeroSectionCMS()
    {
        $data = CMS::where('section', 'certification_sub_hero_section')->latest()->first();
        return view('backend.layouts.cms.certification.subhero_section', compact('data'));
    }

    public function subHeroSectionCMSStore(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'button_text' => 'nullable|string',
            'subtitle' => 'nullable|string',
        ]);

        $cms = CMS::updateOrCreate(
            ['section' => 'certification_sub_hero_section'],
            [
                'title' => $request->title,
                'button_text' => $request->button_text,
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
