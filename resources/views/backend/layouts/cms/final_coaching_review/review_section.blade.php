@extends('backend.app')
@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Final Review Section</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">review Elements</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <!-- row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Final Review Section</h3>
                            </div>
                            <div class="card-body">

                                <form class="forms-sample" method="POST" action="{{ route('final.review.coaching.review.section.store') }}">
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
                                                <label for="subdescription">Sub Description</label>
                                                <input type="text"
                                                    class="form-control {{ $errors->has('subdescription') ? 'is-invalid' : '' }}"
                                                    name="subdescription" id="summernote1" placeholder="subdescription text"
                                                    value="{{ old('subdescription', $data->subdescription ?? '') }}">
                                                @if ($errors->has('subdescription'))
                                                    <div class="invalid-feedback">{{ $errors->first('subdescription') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="button_link">Button Link</label>
                                                <input type="url"
                                                    class="form-control {{ $errors->has('button_link') ? 'is-invalid' : '' }}"
                                                    name="button_link" id="button_link" placeholder="Button link"
                                                    value="{{ old('button_link', $data->button_link ?? '') }}">
                                                @if ($errors->has('button_link'))
                                                    <div class="invalid-feedback">{{ $errors->first('button_link') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="button_text">Button Text</label>
                                                <input type="text"
                                                    class="form-control {{ $errors->has('button_text') ? 'is-invalid' : '' }}"
                                                    name="button_text" id="button_text" placeholder="Button text"
                                                    value="{{ old('button_text', $data->button_text ?? '') }}">
                                                @if ($errors->has('button_text'))
                                                    <div class="invalid-feedback">{{ $errors->first('button_text') }}</div>
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
    </div>
    <!-- row -->
@endsection
