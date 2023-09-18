@extends('frontend.layouts.frontend')
     
@section('title', 'Fiverr - Freelance Marketplace')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/category.css') }}">
@endpush
 
@section('content')

<!--  op banner -->
 <div class="banner" style="padding-left:90px; padding-right:90px; margin:0 auto;">
    <img src="{{ asset($category->imagePath) }}" alt="{{$category->key}}">
     <iv class="text-ovelay">
    {{ $category->name }}
        <div class="subtext">
        {{ $category->caption }}

        </div>
    </div>
</div>
<!-- top banner end -->

<div class="container mt-2">
    <!-- Content for mobile screens (hidden on medium and larger screens) -->
    <div class="d-md-none text-center">
        <div class="container">
        @for ($i = 0; $i < 7; $i++)
            <div class="card mt-4" style="width: 18rem;">
                <button class="btn toggle-collapse" type="button" style="height:70px;">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-auto">
                            <img src="{{ asset('frontend/images/brand.png') }}" alt="Icon" class="img-fluid" style="max-width: 80px; max-height: 54;">
                        </div>
                        <div class="col-auto">
                            Category Name
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </button>       
                <div class="collapse">
                    <ul class="list-group">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>            
                </div>
            </div>
        @endfor
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
                            <h5 class="card-title">{{$subcategory->name}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($subcategory->subSubCategories as $subSubCategory)
                                <li class="list-group-item">{{ $subSubCategory->name }}</li>
                            @endforeach
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