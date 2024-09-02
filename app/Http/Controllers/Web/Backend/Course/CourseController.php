<?php

namespace App\Http\Controllers\Web\Backend\Course;

use Exception;
use App\Helper\Helper;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Course::with('category')->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('category', function ($data) {
                    return $data->category ? $data->category->name : 'N/A';
                })
                ->addColumn('image', function ($data) {
                    $imageUrl = $data->image ? asset($data->image) : 'path/to/default/image.jpg';
                    return '<img src="' . $imageUrl . '" alt="Course Image" style="width: 100px; height: auto;">';
                })
                ->addColumn('status', function ($data) {
                    $isChecked = $data->status === "active" ? 'checked' : '';
                    return '<div class="form-check form-switch">
                            <input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" name="status" ' . $isChecked . '>
                            <label class="form-check-label" for="customSwitch' . $data->id . '"></label>
                        </div>';
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <a href="' . route('course.edit', $data->id) . '" class="btn btn-primary text-white" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void(0)" onclick="showDeleteConfirm(' . $data->id . ')" class="btn btn-danger text-white" title="Delete">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>';
                })
                ->rawColumns(['category', 'status', 'image', 'action'])
                ->make(true);
        }

        return view('backend.layouts.course.index');
    }


    public function create()
    {
        $categories = Category::all();
        return view('backend.layouts.course.create', compact('categories'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string:max:255',
            'tag' => 'nullable|string|max:10',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'description' => 'required',
        ]);



        $imagePath =  null;
        if ($request->hasFile('image')) {
            $randomString = (string) Str::uuid();
            $imagePath = Helper::fileUpload($request->file('image'), 'course', $randomString);
        }
        $course = new Course();
        $course->category_id = $request->input('category_id');
        $course->title = $request->input('title');
        $course->price = $request->input('price');
        $course->tag = $request->input('tag');
        $course->description = $request->input('description');
        $course->image = $imagePath;
        $course->save();

        session()->flash('success', 'Course Create Successfully!');
        return redirect()->route('course.index');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $categories = Category::all();
        return view('backend.layouts.course.edit', compact('course', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        // Validate the form input
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'tag' => 'nullable|string|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'description' => 'required',
        ]);

        if ($request->has('remove_image') && $request->input('remove_image') == 'on') {

            if ($course->image) {
                Helper::deleteFile($course->image);
                $course->image = null;
            }
        } elseif ($request->hasFile('image')) {
            if ($course->image) {
                Helper::deleteFile($course->image);
            }
            $randomString = (string) Str::uuid();
            $imagePath = Helper::fileUpload($request->file('image'), 'course', $randomString);
            $course->image = $imagePath;
        }

        $course->category_id = $request->input('category_id');
        $course->title = $request->input('title');
        $course->price = $request->input('price');
        $course->description = $request->input('description');
        $course->tag = $request->input('tag');
        $course->save();
        session()->flash('success', 'Course updated successfully!');
        return redirect()->route('course.index');
    }



    public function destroy(int $id)
    {
        try {
            $data = Course::findOrFail($id);
            $data->delete();
            return response()->json([
                'success' => true,
                'message' => 'Course deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete the Course.',
            ]);
        }
    }

    public function status($id)
    {
        $data = Course::findOrFail($id);
        if ($data->status == 'active') {
            $data->status = 'inactive';
            $data->save();

            return response()->json([
                'success' => false,
                'message' => 'Unpublished Successfully.',
                'data'    => $data,
            ]);
        } else {
            $data->status = 'active';
            $data->save();

            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data'    => $data,
            ]);
        }
    }
}
