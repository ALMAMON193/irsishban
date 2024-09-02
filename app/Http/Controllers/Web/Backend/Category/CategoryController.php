<?php

namespace App\Http\Controllers\Web\backend\Category;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = Category::latest()->get(); 
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="' . route('category.edit', ['id' => $data->id]) . '" class="btn btn-primary text-white" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" class="btn btn-danger text-white" title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        return view('backend.layouts.category.index');
    }
    public function create()
    {
        // session()->flash('success', $message);
        return view('backend.layouts.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        session()->flash('success', 'Category Created Successfully!');
        return redirect()->route('category.index');
    }

    public function edit($id){
        $data = Category::findOrFail($id);
        return view('backend.layouts.category.edit',compact('data'));
    }
    public function update(Request $request ,$id){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();
        session()->flash('success', 'Category update Successfully!');
        return redirect()->route('category.index');
    }

    public function destroy(int $id)
    {
        try {
            $data = Category::findOrFail($id);
            $data->delete();
            return response()->json([
                'success' => true,
                'message' => 'Category deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete the Category.',
            ]);
        }
    }
}
