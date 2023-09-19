@extends('frontend.layouts.frontend')
     
@section('title', 'Fiverr - Freelance Marketplace')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/category.css') }}">
    
@endpush
 
@section('content')

<!-- top banner -->

<div class="banner">
    <img src="{{ asset($category->imagePath) }}" alt="digital marketing">
    <div class="text-overlay">
    {{ $category->name }}
        <div class="subtext">
        {{ $category->caption }}
        </div>
    </div>
</div>
<!-- top banner end -->

<nav  style="--bs-breadcrumb-divider: '>'; margin-left:40px;" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('categories.show', ['category' => $category->key]) }}">{{ $category->name }}</a></li>
  </ol>
</nav>
<div class="container mt-2">
    <!-- Content for mobile screens (hidden on medium and larger screens) -->
    <div class="d-md-none text-center">
        <div class="container">
        @foreach ($category->subCategories as $subcategory)
            <div class="card border-0 mt-4" style="width: 18rem; border:none;">
                <button class="btn toggle-collapse" type="button" style="height:70px;">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto ">
                            <img src="{{ asset('frontend/images/brand.png') }}" alt="Icon" class="img-fluid rounded-1" style="max-width: 80px; max-height: 54;">
                        </div>
                        <div class="col-auto text-center">
                             <p class="d-flex" style="cursor:default; font-size:11px; font-weight:bold;">{{$subcategory->name}}</p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </button>       
                <div class="collapse">
                    <ul class="list-group list-group-flush">
                         @if($subcategory->subSubCategories->count() > 0)
                            @foreach($subcategory->subSubCategories as $subSubCategory)
                                <li class="list-group-item">{{ $subSubCategory->name }}</li>
                            @endforeach
                        @else
                            <li class="list-group-item">No subcategories</li>
                        @endif
                    </ul>            
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <!-- Content for desktop screens (hidden on small screens) -->
    <div class="d-none d-md-block mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            @foreach ($category->subCategories as $subcategory)
                <div class="col">
                    <div class="card mt-4" style="width: 18rem;">
                        <img src="{{ asset('image.png') }}" class="card-img-top" alt="..." width="288">
                        <div class="card-body">
                            <h5 class="card-title" style="cursor:default;">{{$subcategory->name}}</h5>
                        </div>
                        <ul class="list-group list-group-flush" >
                            @if($subcategory->subSubCategories->count() > 0)
                                @foreach($subcategory->subSubCategories as $subSubCategory)
                                    <li class="list-group-item">{{ $subSubCategory->name }}</li>
                                @endforeach
                            @else
                                <li class="list-group-item">No subcategories</li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        var toggleButtons = $(".toggle-collapse");

        toggleButtons.each(function(index) {
           
            $(this).on("click", function() {

                var collapseDiv = $(this).next(".collapse");
                collapseDiv.toggleClass("show");

                var icon = $(this).find("i");
                if (icon.hasClass("fa-chevron-down")) 
                {
                    icon.removeClass("fa-chevron-down").addClass("fa-chevron-up");
                } 
                else {
                    icon.removeClass("fa-chevron-up").addClass("fa-chevron-down");
                }
            });
        });
    });
</script>

@endsection