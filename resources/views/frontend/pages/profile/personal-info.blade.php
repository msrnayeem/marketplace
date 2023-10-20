@extends('frontend.layouts.frontend')

@section('title', 'Personal info-' . Auth::user()->name)

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap-select CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.1/dist/css/bootstrap-select.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/personal-info.css') }}">
@endpush
@section('content')

    <div class="container">
        <form method="POST" action="{{ route('personal-info.store') }}" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            @csrf


            <header class="step-header pt-4">
                <h2 class="fw-bold my-3" style="color:#62646a;">Personal Info</h2>
                <p class="mb-0" style="max-Width: 475px; color: #95979d;font-weight:600;font-size:15px">Tell us a bit
                    about
                    yourself. This information will appear on your public profile, so that potential buyers can get to know
                    you
                    better.</p>
                <p class="text-end fst-italic" style="color: #95979d;font-weight:600;">* Mandatory fields</p>
            </header>

            <div class="row my-5 py-2"> <!-- Added mb-4 class to add bottom margin -->
                <div class="col-md-4">
                    <label for="full_name" class="header_name">Full Name <span class="text-danger">*</span><span
                            class="fst-italic ps-2" style="color: #95979d;"> Private</span></label>
                </div>
                <div class="col-md-8 d-flex">
                    <input type="text" id="fname" name="name" class="form-control" required>
                </div>
            </div>

            <div class="row my-5 py-2"> <!-- Added mb-4 class to add bottom margin -->
                <div class="col-md-4">
                    <label for="display_name" class="header_name">Phone <span class="text-danger">*</span> </label>
                </div>
                <div class="col-md-8">
                    <div class="col-md-4">
                        <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="col-md-4 .d-sm-none .d-md-block"></div>
                    <div class="col-md-4 .d-sm-none .d-md-block"></div>
                </div>
            </div>
            <div class="row my-5 py-2"> <!-- Added mb-4 class to add bottom margin -->
                <div class="col-md-4">
                    <label for="profession" class="header_name">Profession<span class="text-danger">*</span> </label>
                </div>
                <div class="col-md-8">
                    <div class="col-md-4">
                        <select class="form-select" required name="profession" id="profession">
                            <option value="0">Select Profession</option>
                            <option value="Web Developer">Web Developer</option>
                            <option value="Web Designer">Web Designer</option>
                            <option value="Graphic Designer">Graphic Designer</option>
                        </select>
                    </div>
                    <div class="col-md-4 .d-sm-none .d-md-block"></div>
                    <div class="col-md-4 .d-sm-none .d-md-block"></div>
                </div>
            </div>

            <div class="row my-5 py-2"> <!-- Added mb-4 class to add bottom margin -->
                <div class="col-md-4">
                    <label for="profile_pic" class="header_name">Profile Picture <span class="text-danger">*</span> </label>
                </div>
                <div class="col-md-8">

                    <div class="image-container">
                        <label for="imageInput" class="camera-icon">&#128247;</label>
                        <input type="file" id="imageInput" accept="image/*" name="avatar" required>
                        <div class="preview-container"></div>
                    </div>

                </div>
            </div>

            <div class="row my-5 py-2"> <!-- Added mb-4 class to add bottom margin -->
                <div class="col-md-4">
                    <label for="description" class="header_name">Description <span class="text-danger">*</span> </label>
                </div>
                <div class="col-md-8">
                    <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
                </div>
            </div>


            <div class="row my-5 py-2">
                <div class="col-md-4">
                    <label for="language" class="header_name">Language <span class="text-danger">*</span> </label>
                </div>
                <div class="col-md-4">
                    <div class="language-fields">
                        <div class="input-group mb-3">
                            <input type="text" name="language[]" class="form-control language-input" required>
                            <div class="input-group-append">
                                <span class="input-group-text add-icon">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="my-2 py-2 text-end">
                <button type="submit" class="btn btn-success"
                    style="background-color:#1dbf73; color:white;">Continue</button>
            </div>
        </form>


    @endsection

    @push('scripts')
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- custom JS -->
        <script src="{{ asset('frontend/custom_js/personal-info.js') }}"></script>
    @endpush
