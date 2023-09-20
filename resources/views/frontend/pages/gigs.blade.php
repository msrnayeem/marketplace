@extends('frontend.layouts.frontend')
     
@section('title', 'Services -'.$gigs[0]->subSubCategory->subCategory->category->name)

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/') }}">
<style>
  .main {
    margin-top: 150px;
  }
</style>
@endpush
 
@section('content')

<!-- Breadcrumbs container -->
<div class="container main">
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
        <a href=""> 
          {{$gigs[0]->subSubCategory->subCategory->name}}
        </a>      
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


  <div class="row">
    @foreach($gigs as $gig)
      <div class="col-md-6 col-sm-12 col-xl-3 mb-2 p-4">
          <div class="card">
              <img src="{{ asset('image.png') }}" class="card-img-top" alt="image">
              <div class="card-body d-flex justify-content-between">
                  <h5 class="card-title" style="cursor: default;"> {{ $gig->title }} </h5>
                  @if ($gig->gigPackages->isNotEmpty())
                    <p style="font-size: 12px;">Starting at - {{ $gig->gigPackages->first()->price }}</p>
                  @endif
              </div>
          </div>
      </div>
    @endforeach
    <div class="d-flex justify-content-center mt-4">
      @include('frontend.components.pagination', ['paginator' => $gigs])
    </div>
  </div>
</div>



@push('scripts')
<script src="{{ asset('frontend/custom_js/') }}"></script>
@endpush

@endsection