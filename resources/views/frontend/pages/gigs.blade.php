@extends('frontend.layouts.frontend')
     
@section('title')
  @if ($gigs->isNotEmpty())
        Services - {{ $gigs[0]->subSubCategory->subCategory->category->name }}
    @else
        Services - No Gigs Found
    @endif
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/gigs.css') }}">

@endpush
 
@section('content')

<!-- Breadcrumbs container -->
<div class="container">
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Home</a>
      </li>
      @if($gigs->isNotEmpty())
      <li class="breadcrumb-item active" aria-current="page">
        <a href="{{ route('categories.show', ['category' => $gigs[0]->subSubCategory->subCategory->category->key]) }}"> 
          {{$gigs[0]->subSubCategory->subCategory->category->name}}
        </a>      
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        <p> 
          {{$gigs[0]->subSubCategory->subCategory->name}}
        <p>      
      </li>
    </ol>
    <h2>{{$gigs[0]->subSubCategory->name}}</h2>
    @endif
  </nav>
</div>
<!-- Breadcrumbs container END--> 


<div class="container mt-2 p-0"> 
    <div class="row mt-4 mb-3 g-1">
      <div class="col-xl-2 col-md-2 col-4">
        <select class="form-select" aria-label="Default select example">
          <option selected>Seller Details</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-xl-2 col-md-2 col-4">
        <select class="form-select" aria-label="Default select example">
          <option selected>Budget</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-xl-2 col-md-2 col-4">
        <select class="form-select" aria-label="Default select example">
          <option selected>Delivery Time</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>

      <!-- <a href="{{ route('gigs.subSubCategory', ['subSubCategoryId' => 1]) }}"> -->
 
    <div class="row">
        @if($gigs->isNotEmpty())
            @foreach($gigs as $gig)
              <div class="col-md-6 col-sm-12 col-xl-3 mb-2 p-4">
                  <div class="card border-0">                       
                    <div id="carouselExample{{ $gig->id }}" class="carousel slide mb-2">
                        <div class="carousel-inner">
                                @php $i = 0; @endphp
                                @foreach($gig->gigImages as $gigImage)
                                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($gigImage->imagePath) }}" class="d-block w-100 rounded" alt="...">
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
                        <div class="row align-items-center p-1">
                            <div class="col-2">
                                <!-- Apply rounded-circle class to add border radius to the image -->
                                <img src="{{ asset($gig->user->imagePath) }}" alt="seller" class="img-fluid rounded-circle">
                            </div>
                            <div class="col-6">
                                <p class="mb-0" style="font-weight:700;">{{ $gig->user->name }}</p>
                            </div>
                            <div class="col-4">
                                <p class="mb-0">Level 2</p>
                            </div>
                              </div>            
                    <!-- Card Body -->
                    <div class="card-body p-1">
                      <a class="card-title text-dark" style="cursor: default;">{{ $gig->title }}</a>
                      @if ($gig->gigPackages->isNotEmpty())
                          <p style="font-weight:800;">From - {{ $gig->gigPackages->first()->price }}</p>
                      @endif
                    </div>

                </div>
              </div>
            @endforeach
        @else
          <div class="col-12 d-flex align-items-center justify-content-center" >
            <div class="text-center mt-4">
                <!-- Use a Bootstrap icon class (e.g., bi-x) -->
                <svg xmlns="http://www.w3.org/2000/svg" height="11em" viewBox="0 0 460 512">
                    <path d="M220.6 130.3l-67.2 28.2V43.2L98.7 233.5l54.7-24.2v130.3l67.2-209.3zm-83.2-96.7l-1.3 4.7-15.2 52.9C80.6 106.7 52 145.8 52 191.5c0 52.3 34.3 95.9 83.4 105.5v53.6C57.5 340.1 0 272.4 0 191.6c0-80.5 59.8-147.2 137.4-158zm311.4 447.2c-11.2 11.2-23.1 12.3-28.6 10.5-5.4-1.8-27.1-19.9-60.4-44.4-33.3-24.6-33.6-35.7-43-56.7-9.4-20.9-30.4-42.6-57.5-52.4l-9.7-14.7c-24.7 16.9-53 26.9-81.3 28.7l2.1-6.6 15.9-49.5c46.5-11.9 80.9-54 80.9-104.2 0-54.5-38.4-102.1-96-107.1V32.3C254.4 37.4 320 106.8 320 191.6c0 33.6-11.2 64.7-29 90.4l14.6 9.6c9.8 27.1 31.5 48 52.4 57.4s32.2 9.7 56.8 43c24.6 33.2 42.7 54.9 44.5 60.3s.7 17.3-10.5 28.5zm-9.9-17.9c0-4.4-3.6-8-8-8s-8 3.6-8 8 3.6 8 8 8 8-3.6 8-8z"/>
                </svg>
            </div>
          </div>
          <div class="col-12 text-center">
              <h3 style="font-weight:700;">No Gigs Found!</h3> <!-- Your text goes here -->
          </div>
        @endif  
  </div>

</div>



@push('scripts')   
<script src="{{ asset('frontend/custom_js/gigs.js') }}"></script>
@endpush

@endsection