<?php

namespace App\Http\Controllers\Web\Backend\Expect;

use Exception;
use App\Helper\Helper;
use App\Models\Expect;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ExpectController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Expect::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($data) {
                    $imageUrl = $data->image ? asset($data->image) : 'path/to/default/image.jpg';
                    return '<img src="' . $imageUrl . '" alt="Expect Image" style="width: 100px; height: auto;">';
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
                            <a href="' . route('expect.edit', $data->id) . '" class="btn btn-primary text-white" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void(0)" onclick="showDeleteConfirm(' . $data->id . ')" class="btn btn-danger text-white" title="Delete">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>';
                })
                ->rawColumns(['status', 'image', 'action'])
                ->make(true);
        }

        return view('backend.layouts.expect.index');
    }


    public function create()
    {
        $expexts = Expect::all();
        return view('backend.layouts.expect.create', compact('expexts'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
           'title' => 'required|string:max:255',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'description' => 'required',
        ]);



        $imagePath =  null;
        if ($request->hasFile('image')) {
            $randomString = (string) Str::uuid();
            $imagePath = Helper::fileUpload($request->file('image'), 'Expect', $randomString);
        }
        $Expect = new Expect();

        $Expect->title = $request->input('title');
        $Expect->description = $request->input('description');
        $Expect->image = $imagePath;
        $Expect->save();

        session()->flash('success', 'Expect Create Successfully!');
        return redirect()->route('expect.index');
    }

    public function edit($id)
    {
        $expexts = Expect::findOrFail($id);
       
        return view('backend.layouts.expect.edit', compact( 'expexts'));
    }

    public function update(Request $request, $id)
    {
        $expexts = Expect::findOrFail($id);

        // Validate the form input
        $request->validate([
          
            'title' => 'required|string|max:255',
          
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'description' => 'required',
        ]);

        if ($request->has('remove_image') && $request->input('remove_image') == 'on') {

            if ($expexts->image) {
                Helper::deleteFile($expexts->image);
                $expexts->image = null;
            }
        } elseif ($request->hasFile('image')) {
            if ($expexts->image) {
                Helper::deleteFile($expexts->image);
            }
            $randomString = (string) Str::uuid();
            $imagePath = Helper::fileUpload($request->file('image'), 'Expect', $randomString);
            $expexts->image = $imagePath;
        }


        $expexts->title = $request->input('title');
        $expexts->description = $request->input('description');

        $expexts->save();
        session()->flash('success', 'Expect updated successfully!');
        return redirect()->route('expect.index');
    }



    public function destroy(int $id)
    {
        try {
            $data = Expect::findOrFail($id);
            $data->delete();
            return response()->json([
                'success' => true,
                'message' => 'Expect deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete the Expect.',
            ]);
        }
    }

    public function status($id)
    {
        $data = Expect::findOrFail($id);
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
