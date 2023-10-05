@extends('frontend.layouts.seller-layout')

@section('title', 'Seller Dashboard')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/prof') }}">
    <style>
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .main {
            position: relative;
            display: flex;
        }


        @media(min-width: 768px) {
            .sticky-column {
                position: sticky;
                top: 70px;
                height: 50%;
                overflow-y: hidden;
            }

            .row .main .col-md-3 {
                flex: unset;
            }

        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row main">
            <!-- Left Column (profile card) -->
            <div class="col-md-3 p-3 sticky-column">
                <div class="card border-0 mb-4" style="border-radius: 0;">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col">
                                <!-- Column 1: Image -->
                                <img src="{{ asset($seller->avatar) }}" alt="User 1" class="avatar"
                                    style="max-height: 40px;">
                            </div>
                            <div class="col p-0">
                                <!-- Column 2: Name -->
                                <p>{{ $seller->name }}</p>
                            </div>
                            <div class="col p-0 text-end">
                                <!-- Column 3: Level -->
                                <p>Level 1</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-7">
                                <p>Inbox response rate</p>
                            </div>
                            <div class="col-3 p-0">
                                <div class="progress mt-1">
                                    <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label"
                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 p-0 text-end">
                                <p>25%</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-7">
                                <p>Inbox response Time</p>
                            </div>
                            <div class="col-3 p-0">
                                <div class="progress mt-1">
                                    <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label"
                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 p-0 text-end">
                                <p>25%</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-7">
                                <p>Order response rate</p>
                            </div>
                            <div class="col-3 p-0">
                                <div class="progress mt-1">
                                    <div class="progress-bar bg-success" role="progressbar" aria-label="Example with label"
                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 p-0 text-end">
                                <p>25%</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <p>Order completed</p>
                            </div>
                            <div class="col-3 p-0">
                                <div class="progress mt-1">
                                    <div class="progress-bar bg-success" role="progressbar" aria-label="Example"
                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 p-0 text-end">
                                <p>25%</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <p>Earned this month</p>
                            </div>
                            <div class="col p-0 text-end">
                                <p>25$</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- profile section end -->

                <div class="card border-0 mt-4" style="border-radius: 0;">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <p class="mb-0">Inbox</p>
                        </div>
                        <div>
                            <a href="">view all</a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- End Left Column (profile card) -->

            <!-- space column -->
            <div class="col-md-1"></div>
            <!-- end space -->

            <!-- right container -->
            <div class="col-md-8">
                <!-- order info -->
                <div class="row p-3">
                    <div class="card border-0 mb-4" style="border-radius: 0;">
                        <div class="card-body d-flex align-items-center justify-content-between p-2">
                            <div>
                                <p class="mb-0">Active Orders -{{ Auth::user()->sellerOrdersActive() }} </p>
                            </div>
                            <div>
                                <select name="order-status" id="" class="form-select">
                                    <option value="">Active -({{ Auth::user()->sellerOrdersActive() }})</option>\
                                    <option value="">Completed -({{ Auth::user()->sellerOrdersCompleted() }})</option>
                                    <option value="">Cancelled -({{ Auth::user()->sellerOrdersCancelled() }})</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order info end -->

                <!-- info -->
                <div class="row p-3">
                    <div class="card border-0 mb-4" style="border-radius: 0;">
                        <div class="card border-0 p-2" style="border-radius: 0;">
                            <div>
                                <h2 class="card-title mt-2">3 steps to become a top seller on Fiverr</h2>
                            </div>
                            <div class="card-body p-0 mt-2">
                                <p class="card-text">
                                    The key to your success on Fiverr is the brand
                                    you build for yourself through your Fiverr reputation.
                                    We gathered some tips and resources to help you become
                                    a leading seller on Fiverr.
                                </p>

                            </div>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-between p-2">
                            <div class="d-flex flex-nowrap" style="width: 100%;">
                                <div class="p-2" style="flex: 1;">
                                    <div class="card border-0 p-2 m-4" style="border-radius: 0;">
                                        <div>
                                            <i class="fa-solid fa-bullhorn" style="color: #000714; font-size:50px;"></i>
                                            <h5 class="card-title mt-2">Get noticed</h5>
                                        </div>
                                        <div class="card-body p-0 mt-2">
                                            <p class="card-text">
                                                Tap into the power of social media by sharing your Gig,
                                                and get expert help to grow your impact
                                            </p>
                                            <div class="mt-4">
                                                <a type="button" class="btn btn-outline-primary mt-4">Share Your Gigs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2" style="flex: 1;">
                                    <div class="card border-0 p-2" style="border-radius: 0;">
                                        <div>
                                            <i class="fa-solid fa-book-open" style="color: #000714; font-size:50px;"></i>
                                            <h5 class="card-title mt-2">Get more skills & exposure</h5>
                                        </div>
                                        <div class="card-body p-0 mt-2">
                                            <p class="card-text">
                                                Hone your skills and expand your knowledge with online courses.
                                                You’ll be able to offer more services and gain more exposure
                                                with every course completed.
                                            </p>
                                            <a type="button" class="btn btn-outline-primary mt-4">Explore Learn</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2" style="flex: 1;">
                                    <div class="card border-0 p-2" style="border-radius: 0;">
                                        <div>
                                            <i class="fa-regular fa-star" style="color: #000000; font-size:50px;"></i>
                                            <h5 class="card-title mt-2">Become a successful seller!</h5>
                                        </div>
                                        <div class="card-body p-0 mt-2">
                                            <p class="card-text">
                                                Watch this free online course to learn how to create
                                                an outstanding service experience for your buyer
                                                and grow your career as an online freelancer.
                                            </p>
                                            <a type="button" class="btn btn-outline-primary mt-4">Watch free course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- enfo end -->

                <!-- carousel start -->
                <div class="row p-3">
                    <div id="carouselExampleCaptions" class="carousel slide p-0" data-bs-ride="carousel"
                        style="min-width:100%;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="{{ asset('sDashCarousel/image-1.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('sDashCarousel/image-2.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('sDashCarousel/image-3.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- carousel end -->

            </div>
            <!-- right container end -->

        </div>
        <!-- row end -->
    </div>

    @push('scripts')
        <script src="{{ asset('frontend/custom_js/pr.js') }}"></script>
    @endpush

@endsection
