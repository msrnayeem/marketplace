@extends('frontend.layouts.frontend')

@section('title', 'Profile-' . $user->name)

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/profile.css') }}">
    <style>
        #edit-desc {
            cursor: pointer;

        }
    </style>
@endpush

@section('content')
    <div class="container main">
        <div class="row align-items-start">
            <div class="col-xl-3 sm-12 col-md-5 mb-3 mb-sm-3">
                <div class="row mb-4" style="background: white">
                    <div class="img container text-center ">
                        <img src="{{ asset(Auth::user()->avatar) }}" class="rounded-circle mt-2" alt="profile"
                            width="140" height="150">
                        <h3 class="m-0 mt-1 text-capitalize">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col text-center">
                            <a href="#" class="btn btn-outline-primary" style="width: 60%;">Preview Profile</a>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col d-flex justify-content-between">
                            <p class="d-inline">From -</p>
                            <p class="d-inline">Bangladesh</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-between">
                            <p class="d-inline">Member since- </p>
                            <p class="d-inline">{{ Auth::user()->created_at }}</p>
                        </div>
                    </div>


                </div>
                <div class="row mb-4">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="col d-flex justify-content-between">
                                        <h5 class="card-title d-inline">Description</h5>
                                        <a class="d-inline" id="edit-desc">Edit</a>
                                    </div>
                                    <p class="card-text" id="description" contenteditable="false">
                                        With supporting text below as a natural lead-in to additional content...
                                    </p>
                                    <div id="edit-buttons" style="display: none;">
                                        <button class="btn btn-primary" id="save-btn">Save</button>
                                        <button class="btn btn-secondary" id="cancel-btn">Cancel</button>
                                    </div>



                                </div>
                                <hr>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="card-title">Languages</h5>
                                        </div>
                                        <div class="col-md-6 d-none d-md-inline text-right">
                                            <p class="card-text" id="edit">Edit</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <ul class="list-group list-group-flush" id="language-list">
                                                    <li class="list-group-item">English - Fluent</li>
                                                    <li class="list-group-item">Bengali - Fluent</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="card-title">Skills</h5>
                                        </div>
                                        <div class="col-md-6 d-none d-md-inline text-right">
                                            <a class="card-text" href="#">Add New</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Web Development - Fluent</li>
                                                    <li class="list-group-item">SEO - Fluent</li>
                                                    <li class="list-group-item">GFX - Fluent</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Shared activity information</h5>
                            <p class="card-text mt-2">
                                In order to provide the best possible work and service,
                                some information about your activity on Fiverr may be shared with sellers.
                                Manage settings
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- right column seller-->
            @if ($user->is_seller == 0)
                <div class="col-xl-9 col-md-7 col-sm-12 mb-sm-3" style="height: 450px;">
                    <div class="container h-100 w-100 p-4" style="background:rgb(223, 141, 141);">
                        <a href="{{ route('become.seller') }}" class="btn-standard btn-green rounded">Become Seller</a>
                    </div>
                </div>
            @else
                <div class="col-xl-9 col-md-7 col-sm-12 mb-sm-3" style="height: 450px;">
                    <div class="container mt-2 p-0">
                        <div class="row mx-0">
                            <!-- Tab Names -->
                            <div class="col-10 mb-4">
                                <div class="nav flex-row nav-pills p-2" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="active-tab" data-bs-toggle="pill" href="#active-content"
                                        role="tab" aria-controls="active-content" aria-selected="true">Active</a>
                                    <a class="nav-link" id="drafts-tab" data-bs-toggle="pill" href="#drafts-content"
                                        role="tab" aria-controls="drafts-content" aria-selected="false">Drafts</a>
                                </div>
                            </div>

                            <!-- Tab Bodies -->
                            <div class="col-10 mt-4">
                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="active-content" role="tabpanel"
                                        aria-labelledby="active-tab">
                                        <div class="custom-flex flex-wrap">
                                            @foreach ($user->gigs as $gig)
                                                @if ($gig->is_active == 1 && $gig->status == 1)
                                                    <div class="custom-col d-flex flex-column">
                                                        <div class="card custom-card flex-fill">
                                                            <div id="carousel-{{ $gig->id }}" class="carousel slide"
                                                                data-bs-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    @foreach ($gig->gigImages as $index => $image)
                                                                        <div
                                                                            class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                                                                            <img src="{{ asset($image->imagePath) }}"
                                                                                class="rounded d-block w-100"
                                                                                alt="gig images">
                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carousel-{{ $gig->id }}"
                                                                    data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carousel-{{ $gig->id }}"
                                                                    data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body mt-2 p-0">
                                                                <a href="{{ route('gigs.show', ['gig' => $gig]) }}"
                                                                    class="card-title mb-4">{{ $gig->title }}</a>
                                                                <p class="card-text txt mt-4">Start
                                                                    From- ${{ $gig->gigPackages->first()->price }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach


                                        </div>
                                    </div>



                                    <div class="tab-pane fade" id="drafts-content" role="tabpanel"
                                        aria-labelledby="drafts-tab">
                                        <div class="custom-flex flex-wrap">
                                            <div class="custom-col d-flex flex-column">
                                                <div class="card custom-card flex-fill create-gig">
                                                    <a href="{{ route('become.seller') }}">
                                                        <i class="fa-solid fa-circle-plus"
                                                            style="color: #222325;font-size:60px;"></i>
                                                    </a>
                                                    <p>Create a new Gig</p>
                                                </div>
                                            </div>
                                            @foreach ($user->gigs as $gig)
                                                @if ($gig->is_active == 0 || $gig->status == 0)
                                                    <div class="custom-col d-flex flex-column">
                                                        <div class="card custom-card flex-fill">
                                                            <div id="carousel-{{ $gig->id }}" class="carousel slide"
                                                                data-bs-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    @foreach ($gig->gigImages as $index => $image)
                                                                        <div
                                                                            class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                                                                            <img src="{{ asset($image->imagePath) }}"
                                                                                class="rounded d-block w-100"
                                                                                alt="gig images">
                                                                        </div>
                                                                    @endforeach

                                                                </div>
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carousel-{{ $gig->id }}"
                                                                    data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carousel-{{ $gig->id }}"
                                                                    data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body mt-2 p-0">
                                                                <a href="{{ route('gigs.show', ['gig' => $gig->id]) }}"
                                                                    class="card-title mb-4">{{ $gig->title }}</a>
                                                                <p class="card-text txt mt-4">Start
                                                                    From- ${{ $gig->gigPackages->first()->price }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endif

        </div>

        <style>
            .nav-pills {
                background-color: #ffffff;
            }

            .tab-content {
                min-height: 500px;
                padding: 20px;

            }

            .custom-flex {
                display: flex;
                flex-wrap: wrap;
                justify-content: start;
                gap: 15px;
            }

            .custom-card {
                padding: 5px;
                border-radius: 0;
                background-color: #ffffff;
                min-height: 260px;
                width: 232px;
            }

            .create-gig {
                text-align: center;
                justify-content: center;
            }

            .card-body a {
                font-size: 15px;
                cursor: pointer;
                color: black;
                font-style: normal;
                font-weight: 400;
            }

            .card-body {
                line-height: 1.2;
            }

            .title {
                margin-top: 6px;
                margin-bottom: 32px;
            }

            .txt {
                font-weight: 500;
                cursor: default;

            }

            .nav-pills .nav-link {
                color: black;
                border-bottom: 5px solid transparent;
                border-radius: 0;
                font-size: 25px;
            }

            .nav-pills .nav-link.active,
            .nav-pills .show>.nav-link {
                color: black;
                background-color: transparent;
            }

            .nav-pills .nav-link.active {
                border-bottom: 5px solid green;
                font-weight: 700;
            }
        </style>

    </div>
    @push('scripts')
        <script src="{{ asset('frontend/custom_js/profile.js') }}"></script>
    @endpush

@endsection
