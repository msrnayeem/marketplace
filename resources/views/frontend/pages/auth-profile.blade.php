@extends('frontend.layouts.frontend')
     
@section('title', 'Profile-'. $user->name)

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/profile.css') }}">
@endpush
 
@section('content')
<div class="container main">
    <div class="row align-items-start">
        <div class="col sm-1 col-md-5 col-xl-3 mb-3 mb-sm-3 p-4">
            <div class="row mb-4">
                <div class="card text-center">
                    <div class="img container text-center ">
                        <img src=""  class="rounded-circle mt-2" alt="profile" width="140" height="150">
                        <h3  class="m-0 mt-1">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-outline-primary">Preview Miver Profile</a>
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">An item</li>
                            <li class="list-group-item border-0">A second item</li>
                            <li class="list-group-item border-0">A third item</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                 <div class="card">
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">Description</h5>
                            </div>
                            <div class="col-md-6 d-none d-md-inline text-right">
                                <a class="card-text" href="#">Edit Description</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                </p>
                            </div>
                            <hr>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Languages</h5>
                                    </div>
                                    <div class="col-md-6 d-none d-md-inline text-right">
                                        <a class="card-text" href="#">Add New</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">English - Fluent</li>
                                                <li class="list-group-item">English - Fluent</li>
                                                <li class="list-group-item">English - Fluent</li>
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
        <!-- <div class="col sm-1 col-md-7 col-xl-9 mb-sm-3 p-3 p-md-4 p-xl-4 d-none d-sm-block" style="height:400px;">
            <div class="card h-100">
                <div class="card-body">
                    <a href="#" class="btn-standard btn-green rounded">Become Seller</a>
                </div>
            </div>
        </div> -->
      
        <!-- right column become seller-->

        <div class="col sm-1 col-md-7 col-xl-9 mb-sm-3 p-3 p-md-4 p-xl-4">
            <div class="container h-100 w-100">
                <div class="row mx-0" >
                    <div class="container mt-2 p-0">
                        <div class="row mx-0" style="height:40px;">
                            <div class="border border-2 bg-light d-flex">
                                <div class="flex-grow-1">
                                    <label class="text-center fs-5" id="active-gigs">Active</label>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="text-center fs-5"  id="drafts">Drafts</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mx-0 h-100 w-100">
                    <div class="container mt-2 p-0" id="for_gigs">                      
                        <div class="row">
                            @for($j=0; $j<10; $j++)
                            <div class="col-md-6 col-sm-12 col-xl-3 mb-3">
                                <div class="card">
                                    <img src="{{ asset('image.png') }}" class="card-img-top" alt="image">
                                    <div class="card-body d-flex justify-content-between">
                                        <h5 class="card-title" style="cursor: default;">Title Title Title Title Title</h5>
                                        <p style="font-size: 12px;">Starting at - 5</p>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                       
                    </div>

                    <div class="container mt-2 p-0" id="for_drafts" style="display: none;">
                        <div class="row">
                            @for($j=0; $j<5; $j++)
                            <div class="col-md-6 col-sm-12 col-xl-3 mb-3">
                                <div class="card">
                                    <img src="{{ asset('image.png') }}" class="card-img-top" alt="image">
                                    <div class="card-body d-flex justify-content-between">
                                        <h5 class="card-title" style="cursor: default;">Title Title Title Title Title</h5>
                                        <p style="font-size: 12px;">Starting at - 5</p>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
@push('scripts')
<script src="{{ asset('frontend/custom_js/profile.js') }}"></script>
@endpush

@endsection