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
<div class="container d-md-none">
    @for ($i = 0; $i < 7; $i++)
        <div class="card mt-2" style="width: 18rem;">
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
<script>
    $(document).ready(function() {
        // Get all the toggle-collapse buttons
        var toggleButtons = $(".toggle-collapse");

        toggleButtons.each(function(index) {
            // Add a click event listener to each button
            $(this).on("click", function() {
                // Find the next sibling div with class "collapse"
                var collapseDiv = $(this).next(".collapse");

                // Toggle the "show" class on the collapse div to open/close it
                collapseDiv.toggleClass("show");

                var icon = $(this).find("i");
                if (icon.hasClass("fa-chevron-down")) {
                    icon.removeClass("fa-chevron-down").addClass("fa-chevron-up");
                } else {
                    icon.removeClass("fa-chevron-up").addClass("fa-chevron-down");
                }
            });
        });
    });
</script>

@endsection