@extends('backend.app')
@section('title', 'Course Schedule Edit')
@section('content')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Course Schedule Edit</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Schedule</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course Schedule</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Edit Course Schedule</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('course.schedule.update', $schedule->id) }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="course">Course</label>
                                        <select name="course_id" id="course"
                                            class="form-control @error('course_id') is-invalid @enderror">
                                            <option value="">Select Course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}"
                                                    {{ (old('course_id', $schedule->course_id) == $course->id) ? 'selected' : '' }}>
                                                    {{ $course->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('course_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="schedule" class="form-label">Course Schedule</label>
                                        <input type="date" id="schedule"
                                            class="form-control @error('schedule') is-invalid @enderror" 
                                            name="schedule" 
                                            placeholder="Course Schedule" 
                                            value="{{ old('schedule', $schedule->schedule) }}">
                                        @error('schedule')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Update Schedule</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW END -->
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
@endsection
