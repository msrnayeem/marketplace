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
    <style>
    </style>
    <div class="container p-4">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="card p-4">
                <div class="row">
                    <div class="col-4 d-flex flex-column">
                        <div class="d-flex flex-column flex-grow-1">
                            <h3>Gig title</h3>
                            <p>As your Gig storefront, your <strong>title is the most important place </strong> to include
                                keywords that buyers would likely use to search for a service like yours.</p>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-column">
                        <div class="form-group d-flex flex-column flex-grow-1">
                            <textarea class="form-control flex-grow-1" id="title" name="title" placeholder="start with I will do"></textarea>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-4 d-flex flex-column">
                        <div class="d-flex flex-column flex-grow-1">
                            <h3>Category</h3>
                            <p>Choose the category and sub-category most suitable for your Gig.</p>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-column">
                        <div class="form-group d-flex flex-column flex-grow-1">
                            <div class="d-flex mb-2">
                                <select class="form-select mx-2" id="category" name="category">
                                    <option value="" selected disabled>Select Category</option>
                                    <option value="1">Graphics & Design</option>
                                    <option value="2">Programming & Tech</option>
                                    <option value="3">Digital Marketing</option>
                                    <option value="4">Video & Animation</option>
                                    <option value="5">Writing & Translation</option>
                                    <option value="6">Music & Audio</option>
                                    <option value="7">Business</option>
                                    <option value="8">Data</option>
                                    <option value="9">Photography</option>
                                    <option value="10">AI Services</option>
                                </select>
                                <select class="form-select mx-2" id="subCategory" name="subCategory">
                                    <option value="" selected disabled>Select Sub-category</option>
                                    <!-- Options will be dynamically populated using JavaScript -->
                                </select>
                            </div>
                        </div>
                    </div>
                </div>










            </div>
        </form>
    @endsection

    @push('scripts')
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- custom JS -->
        <script src="{{ asset('frontend/custom_js/basic-info.js') }}"></script>
    @endpush
