@extends('frontend.layouts.frontend')
     
@section('title', 'Services -'.$gigs[0]->subSubCategory->subCategory->category->name)

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/') }}">
 

@endpush
 
@section('content')

<!-- Breadcrumbs container -->
<div class="container">
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Home</a>
      </li>
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
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>
                  <ol class="carousel-indicators">
                      @for ($j = 0; $j < count($gig->gigImages); $j++)
                          <li data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide-to="{{ $j }}" class="{{ $j === 0 ? 'active' : '' }}"></li>
                      @endfor
                  </ol>
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
  </div>

</div>



@push('scripts')
<script>
    $('.carousel-control-prev, .carousel-control-next').hide();
    $('.carousel').hover(function () {
        $(this).find('.carousel-control-prev, .carousel-control-next').fadeIn();
    }, function () {
        $(this).find('.carousel-control-prev, .carousel-control-next').fadeOut();
    });
</script>
   
<script src="{{ asset('frontend/custom_js/') }}"></script>
@endpush

@endsection