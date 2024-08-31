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
                        <h1 class="page-title">Category Form</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category Page Form</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Category Page Form</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('category.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="form-label">Category Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Category Name" id="name" value="{{ old('name') }}">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
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
                <!-- ROW CLOSED -->
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection


