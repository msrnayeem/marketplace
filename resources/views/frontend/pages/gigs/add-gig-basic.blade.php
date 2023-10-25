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
        <form method="POST" action="{{ route('gigs.store') }}" enctype="multipart/form-data">
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
                            <textarea class="form-control flex-grow-1 @error('title') is-invalid @enderror" id="title" name="title"
                                placeholder="Start with 'I will do'">{{ old('title') }}</textarea>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

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
                                <select class="form-select mx-2 @error('category') is-invalid @enderror" id="category"
                                    name="category">
                                    @error('category')
                                        is-invalid
                                    @enderror">
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
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <select class="form-select mx-2 @error('subCategory') is-invalid @enderror" id="subCategory"
                                    name="subCategory">
                                    @error('subCategory')
                                        is-invalid
                                    @enderror">
                                    <option value="" selected disabled>Select Sub-category</option>
                                    <!-- Options will be dynamically populated using JavaScript -->
                                </select>
                                @error('subCategory')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>

                <br>

                <div class="row">
                    <div class="col-4 d-flex flex-column">
                        <div class="d-flex flex-column flex-grow-1">
                            <h3>About</h3>
                            <p>write something about your gig</p>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-column">
                        <div class="form-group d-flex flex-column flex-grow-1">
                            <textarea id="editor" name="about"></textarea>
                            @error('about')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="my-2 py-2 text-end">
                    <button type="submit" class="btn btn-success"
                        style="background-color:#1dbf73; color:white;">Continue</button>
                </div>
            </div>

        </form>
    @endsection

    @push('scripts')
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

        <!-- custom JS -->
        <script src="{{ asset('frontend/custom_js/basic-info.js') }}"></script>
        <script>
            CKEDITOR.replace('editor');

            
            $('#category').on('change', function() {
                var categoryId = $(this).val();
                $.ajax({
                    url: '/get-sub-categories/' + categoryId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.status) {
                            var select = $('#subCategory');
                            select.empty();

                            // Populate the select with subcategories
                            data.data.forEach(function(subcategory) {
                                select.append('<option value="">Select sub category</option>');
                                select.append('<option value="' + subcategory.id + '">' +
                                    subcategory.name + '</option>');
                            });
                        } else {
                            var select = $('#subCategory');
                            select.empty();
                            select.append('<option value="">Not found, try others</option>');
                        }
                    },
                    error: function(error) {
                        // Handle errors from the API request
                        console.error('Error:', error);
                    }
                });
            });
        </script>
    @endpush
