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
                            <h4 class="card-title">CMS Hero Section</h4>
                            <hr>
                            <form class="forms-sample" method="POST" action="{{ route('lastreview.hero.section.store') }}">
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
                                        <button type="button" class="btn btn-dark">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            {{-- {{ $errors }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <!-- Dropify -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <!-- Initialize CKEditor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <!-- Initialize Dropify -->
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endpush
