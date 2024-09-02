<?php

namespace App\Http\Controllers\Web\Backend\CourseSchedule;

use Exception;
use App\Helper\Helper;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CourseSchedule;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CourseSchedule::with('course')->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('course', function ($data) {
                    return $data->course ? $data->course->title : 'N/A';
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
                            <a href="' . route('course.schedule.edit', $data->id) . '" class="btn btn-primary text-white" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="javascript:void(0)" onclick="showDeleteConfirm(' . $data->id . ')" class="btn btn-danger text-white" title="Delete">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>';
                })
                ->rawColumns(['course','status','action'])
                ->make(true);
        }

        return view('backend.layouts.course_schedule.index');
    }


    public function create()
    {
        $courses = Course::all();
        return view('backend.layouts.course_schedule.create', compact('courses'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'start_date'   =>'required|date',
            'end_date'   =>'required|date'
        ]);

        $schedule = new CourseSchedule();
        $schedule->course_id = $request->input('course_id');
        $schedule->start_date =$request->input('start_date');
        $schedule->end_date =$request->input('end_date');
        $schedule->save();

        session()->flash('success', 'Schedule Create Successfully!');
        return redirect()->route('course.schedule.index');
    }

    public function edit($id)
    {
        $schedule = CourseSchedule::findOrFail($id);
        $courses = Course::all();
        return view('backend.layouts.course_schedule.edit', compact('schedule', 'courses'));
    }

    public function update(Request $request, $id)
    {
        $schedule = CourseSchedule::findOrFail($id);

        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'start_date'   =>'required|date',
            'end_date'   =>'required|date'
        ]);

        // Update the course schedule
        $schedule->update([
            'course_id' => $request->input('course_id'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        session()->flash('success', 'Schedule update Successfully!');
        return redirect()->route('course.schedule.index');
 
    }

    public function destroy(int $id)
    {
        try {
            $data = CourseSchedule::findOrFail($id);
            $data->delete();
            return response()->json([
                'success' => true,
                'message' => 'Schedule deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete the Schedule.',
            ]);
        }
    }

    public function status($id)
    {
        $data = CourseSchedule::findOrFail($id);
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
