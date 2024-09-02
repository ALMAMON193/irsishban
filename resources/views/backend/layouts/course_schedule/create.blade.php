@extends('backend.app')
@section('title', 'Category Form')
@section('content')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Category Schedule</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">schedule</a></li>
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
                                <h4 class="card-title">Course Schedule</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('course.schedule.store') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="course">Course</label>
                                        <select name="course_id" id="course"
                                            class="form-control @error('course_id') is-invalid @enderror">
                                            <option value="">Select Course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}"
                                                    {{ old('course_id') == $course->id ? 'selected' : '' }}>
                                                    {{ $course->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('course_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="start_date" class="form-label">Course Start Date</label>
                                        <input type="date" id="start_date"
                                            class="form-control @error('start_date') is-invalid @enderror" name="start_date"
                                            placeholder="Course start date" value="{{ old('start_date') }}">
                                        @error('start_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date" class="form-label">Course End Date</label>
                                        <input type="date" id="schedule"
                                            class="form-control @error('end_date') is-invalid @enderror" name="end_date"
                                            placeholder="Course End Date" value="{{ old('end_date') }}">
                                        @error('end_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
