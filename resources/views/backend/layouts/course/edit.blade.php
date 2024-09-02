@extends('backend.app')
@section('title', 'Edit Course')
@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <div class="main-container container-fluid">
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Edit Course</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Course</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Edit Course</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('course.update', $course->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select name="category_id" id="category"
                                            class="form-control @error('category_id') is-invalid @enderror">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" 
                                                    {{ $course->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="title" class="form-label">Course Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" placeholder="Course Title" id="title"
                                            value="{{ old('title', $course->title) }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="price" class="form-label">Course Price</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            name="price" placeholder="Course Price" value="{{ old('price', $course->price) }}">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="tag" class="form-label">Course Tag</label>
                                        <input type="text" class="form-control @error('tag') is-invalid @enderror"
                                            name="tag" placeholder="Course Tag" value="{{ old('tag', $course->tag) }}">
                                        @error('tag')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="image" class="form-label">Course Image</label>
                                        <input type="file" class="dropify @error('image') is-invalid @enderror"
                                            name="image" id="image" data-default-file="{{ asset($course->image) }}">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                            name="description" id="summernote" rows="4">{{ old('description', $course->description) }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Update</button>
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
