@extends('backend.app')
@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Q-Banks Sub Hero Section</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sub Hero Elements</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <!-- row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h3 class="card-title"> Sub Hero Section </h3>
                            </div>
                            <div class="card-body">
                                <form class="forms-sample" method="POST" action="{{ route('sub.hero.section.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
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
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="card_content">Card Content</label>
                                            <input type="text"
                                                class="form-control {{ $errors->has('card_content') ? 'is-invalid' : '' }}"
                                                name="card_content" id="card_content" placeholder="card content"
                                                value="{{ old('card_content', $data->card_content ?? '') }}">
                                            @if ($errors->has('card_content'))
                                                <div class="invalid-feedback">{{ $errors->first('card_content') }}</div>
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
    </div>
    <!-- row -->
@endsection
