@extends('frontend.layouts.frontend')

@section('title', "Gig's basic info")

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/gig-image.css') }}">
@endpush
@section('content')
    <style>
        .img-thumbnail {
            width: 30%;
            height: auto;
            margin: 5px;
        }

        .circle-icon {
            font-size: 70px;
            cursor: pointer;
        }

        .invalid-feedback {
            color: #dc3545;
            /* Bootstrap's default danger color */
            display: block;
            width: 100%;
            /* Ensure the message takes up full width */
            margin-top: .25rem;
            /* Add a bit of space above the message */
            font-size: .875rem;
            /* Adjust font size to match Bootstrap's form-control text */
        }
    </style>
    <div class="container p-4">
        <form method="POST" action="{{ route('gig-images.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card p-4">
                <input type="hidden" name="gig_id" value="{{ $id }}">
                <br>

                <div class="row">
                    <div class="col-md-4 col-sm-12 d-flex flex-column">
                        <div class="d-flex flex-column flex-grow-1">
                            <h3>Images</h3>
                            <p>add some images for your gig</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 d-flex flex-column">
                        <div class="container d-flex justify-content-center align-items-center">
                            <div class="form-group">
                                <label for="images" class="circle-icon d-flex justify-content-center align-items-center">
                                    &#128247; <!-- Camera emoji -->
                                    <input type="file"
                                        class="form-control visually-hidden @error('images') is-invalid @enderror"
                                        id="images" name="images[]" multiple accept="image/*">

                                </label>
                                @if ($errors->any())
                                    <div class="invalid-feedback">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>

                <div class="my-2 py-2 text-end">
                    <button type="submit" class="btn btn-success"
                        style="background-color:#1dbf73; color:white;">Continue</button>
                </div>

                <div class="row">
                    <div class="col-12 d-flex flex-row flex-wrap justify-content-start" id="selected-images"></div>
                </div>

            </div>
        </form>
    @endsection

    @push('scripts')
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- custom JS -->
        <script src="{{ asset('frontend/custom_js/gig-image.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#images').on('change', function(e) {
                    // Get the selected files
                    var files = e.target.files;

                    // Clear previous images in the #selected-images div
                    $('#selected-images').empty();

                    // Loop through the selected files and display them as Bootstrap thumbnails
                    for (var i = 0; i < files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            // Create a Bootstrap thumbnail image using the img-thumbnail class
                            var imgElement = $('<img>').attr('src', event.target.result).addClass(
                                'img-thumbnail');
                            // Append the <img> element to the #selected-images div
                            $('#selected-images').append(imgElement);
                        };
                        reader.readAsDataURL(files[i]);
                    }
                });
            });
        </script>
    @endpush
