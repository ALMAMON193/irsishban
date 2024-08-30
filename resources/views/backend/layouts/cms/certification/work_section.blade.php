@extends('backend.app')
@push('style')
    <style type="text/css">
        .dropify-wrapper .dropify-message p {
            font-size: initial;
        }

        .ck-editor__main {
            color: black !important;
        }

        .ck-content {
            height: 160px !important;
        }
    </style>
@endpush
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">CMS Work Section</h4>
                            <hr>
                            <form class="forms-sample" method="POST" action="{{ route('work.section.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                                name="title" id="title" placeholder="Title"
                                                value="{{ old('title', $data->title ?? '') }}">
                                            @if ($errors->has('title'))
                                                <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subtitle">Sub Title</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('subtitle') ? 'is-invalid' : '' }}"
                                                name="subtitle" id="subtitle" placeholder="Sub title"
                                                value="{{ old('subtitle', $data->subtitle ?? '') }}">
                                            @if ($errors->has('subtitle'))
                                                <div class="invalid-feedback">{{ $errors->first('subtitle') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="summernote"
                                                rows="4">{{ old('description', $data->description ?? '') }}</textarea>
                                            @if ($errors->has('description'))
                                                <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control dropify" name="image"
                                                data-show-remove="true" accept="image/*"
                                                data-default-file="{{ isset($data->image) ? asset($data->image) : '' }}">
                                            @if ($errors->has('image'))
                                                <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                      
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

