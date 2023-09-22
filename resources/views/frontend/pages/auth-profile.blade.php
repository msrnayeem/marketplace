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
                            <img src="{{ asset(Auth::user()->avatar) }}"  class="rounded-circle mt-2" alt="profile" width="140" height="150">
                        <h3  class="m-0 mt-1 text-capitalize">{{ Auth::user()->name }}</h3>
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
        @if($user->gigs == null)
        <div class="col sm-1 col-md-7 col-xl-9 mb-sm-3 p-3 p-md-4 p-xl-4 d-none d-sm-block" style="height:400px;">
            <div class="card h-100">
                <div class="card-body">
                    <a href="#" class="btn-standard btn-green rounded">Become Seller</a>
                </div>
            </div>
        </div>
        <!-- right column become seller-->

        @else
        <div class="col sm-1 col-md-7 col-xl-9 mb-sm-3 p-3 p-md-4 p-xl-4">
            <div class="container h-100 w-100">
                <div class="row mx-0" >
                    <div class="container mt-2 p-0">
                        <div class="row mx-0" style="height: 50px;">
                            <div class="border border-2 bg-light d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <label class="text-center fs-5 active-tab" id="active-gigs">Active</label>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="text-center fs-5" id="drafts">Drafts</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mx-0 h-100 w-100">
                    <div class="container mt-2 p-0" id="for_gigs">                      
                        <div class="row mt-4">
                            @foreach($user->gigs as $gig)
                                @if($gig->is_active == 1 && $gig->status == 1)
                                    <div class="col-md-6 col-sm-12 col-xl-3 mb-3">
                                        <div class="card border-0">
                                            
                                            <div id="carouselExample{{ $gig->id }}" class="carousel slide mb-2">
                                                <div class="carousel-inner">
                                                        @php $i = 0; @endphp
                                                        @foreach($gig->gigImages as $gigImage)
                                                            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                                            <div class="image-container rounded">
                                                                <img src="{{ asset($gigImage->imagePath) }}" class="d-block w-100" alt="...">
                                                                </div>
                                                            </div>
                                                            @php $i++; @endphp
                                                        @endforeach
                                                    </div>
                                                    @if(count($gig->gigImages) > 1)
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                    <ol class="carousel-indicators" >
                                                        @for ($j = 0; $j < count($gig->gigImages); $j++)
                                                            <li data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide-to="{{ $j }}" class="{{ $j === 0 ? 'active' : '' }}"></li>
                                                        @endfor
                                                    </ol>
                                                    @endif
                                                </div>
                                                <div class="card-body p-1 mt-2">
                                                    <a class="card-title text-dark" style="cursor: default;">{{ $gig->title }}</a>
                                                    @if ($gig->gigPackages->isNotEmpty())
                                                        <p class="mt-2" style="font-weight:800;">From - {{ $gig->gigPackages->first()->price }}</p>
                                                    @endif
                                                </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>                       
                    </div>    


                    <div class="container mt-2 p-0" id="for_drafts" style="display: none;">
                        <div class="row mt-4">
                            @foreach($user->gigs as $gig)
                                @if($gig->is_active == 0 || $gig->status == 0)
                                    <div class="col-md-6 col-sm-12 col-xl-3 mb-3">
                                        <div class="card border-0">
                                            
                                            <div id="carouselExample{{ $gig->id }}" class="carousel slide mb-2">
                                                <div class="carousel-inner">
                                                    @if(count($gig->gigImages) == null)
                                                        <div class="image-container rounded">
                                                                <img src="{{ asset('frontend/images/gigs/website-1.png') }}" class="d-block w-100" alt="...">
                                                                </div>
                                                            </div>
                                                    @else
                                                        @php $i = 0; @endphp
                                                        @foreach($gig->gigImages as $gigImage)
                                                            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                                            <div class="image-container rounded">
                                                                <img src="{{ asset('website-2.png') }}" class="d-block w-100" alt="...">
                                                                </div>
                                                            </div>
                                                            @php $i++; @endphp
                                                        @endforeach
                                                    @endif
                                                    </div>
                                                    @if(count($gig->gigImages) > 1)
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                    <ol class="carousel-indicators" >
                                                        @for ($j = 0; $j < count($gig->gigImages); $j++)
                                                            <li data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide-to="{{ $j }}" class="{{ $j === 0 ? 'active' : '' }}"></li>
                                                        @endfor
                                                    </ol>
                                                    @endif
                                                </div>
                                                <div class="card-body p-1 mt-2">
                                                    <a class="card-title text-dark" style="cursor: default;">{{ $gig->title }}</a>
                                                    @if ($gig->gigPackages->isNotEmpty())
                                                        <p class="mt-2" style="font-weight:800;">From - {{ $gig->gigPackages->first()->price }}</p>
                                                    @endif
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
        @endif

        
    </div>
</div>
@push('scripts')
<script src="{{ asset('frontend/custom_js/profile.js') }}"></script>
@endpush

@endsection