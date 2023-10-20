@extends('frontend.layouts.frontend')

@section('title', "Gig's basic info")

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap-select CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.1/dist/css/bootstrap-select.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/basic-info.css') }}">
@endpush
@section('content')

    <div class="container">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf


            <header class="step-header pt-4">
                <h2 class="fw-bold my-3" style="color:#62646a;">Professional Info</h2>
                <p class="mb-0" style="max-Width: 475px; color: #95979d;font-weight:600;font-size:15px">Tell us a bit
                    about
                    yourself. This information will appear on your public profile, so that potential buyers can get to know
                    you
                    better.</p>
                <p class="text-end fst-italic" style="color: #95979d;font-weight:600;">* Mandatory fields</p>
            </header>

            <div class="row my-5 py-2"> <!-- Added mb-4 class to add bottom margin -->
                <div class="col-md-4">
                    <label for="full_name" class="header_name">Your Occupation<span class="text-danger">*</span><span
                            class="fst-italic ps-2" style="color: #95979d;">public</span></label>
                </div>
                <div class="col-md-8 d-flex">
                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-select" id="profession" name="profession">
                                <option value="web_developer">Web Developer</option>
                                <option value="web_designer">Web Designer</option>
                                <!-- Add more profession options here -->
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="fromYear" name="fromYear"
                                placeholder="Start Year">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="toYear" name="toYear" placeholder="End Year">
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
        <script src="{{ asset('frontend/custom_js/basic-info.js') }}"></script>
    @endpush
