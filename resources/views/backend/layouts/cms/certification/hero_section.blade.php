@extends('backend.app')
@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">

                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Certificate</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <!-- row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Certificate Hero Section</h3>
                            </div>
                            <div class="card-body">

                                <form class="forms-sample" method="POST" action="{{ route('certification.hero.section.store') }}">
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
                                    {{-- <div class="row">
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

                                    </div> --}}

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
