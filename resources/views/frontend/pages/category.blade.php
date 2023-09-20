@extends('frontend.layouts.frontend')
     
@section('title', 'Miverr -'.$category->name)

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/category.css') }}">

@endpush
 
@section('content')

<!-- top banner -->
<div class="container" style="cursor:default;">
<div class="CategoryBanner" >
    <img src="{{ asset($category->imagePath) }}" alt="{{ $category->name }}">
    <div class="text-overlay">
        <div class="overlay-content">
            <h2>{{ $category->name }}</h2>
            <p class="subtext">{{ $category->caption }}</p>
        </div>
    </div>
</div>
<div>
<!-- top banner end -->

<div class="container mt-4">
    <!-- Breadcrumbs container -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="custom-active" href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a class="black" href="{{ route('categories.show', ['category' => $category->key]) }}">{{ $category->name }}</a>
            </li>
        </ol>
    </nav>
</div>

<div class="container mt-2">
    <h3 class="mt-4" style="cursor:default;">Explore {{ $category->name }}</h3>
    <div class="d-md-none text-center">
        <div class="container">
            @foreach ($category->subCategories as $subcategory)
                <div class="card mt-2" style="border:none;">
                    <button class="btn toggle-collapse" type="button" style="height:70px;">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{ asset('frontend/images/brand.png') }}" alt="Icon" class="img-fluid rounded-1" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-6 text-center">
                                <p style="cursor:default;">{{$subcategory->name}}</p>
                            </div>
                            <div class="col-2 text-right">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </button>       
                    <div class="collapse">
                        <ul class="list-group mt-4 pl-4">
                            @if($subcategory->subSubCategories->count() > 0)
                                @foreach($subcategory->subSubCategories as $subSubCategory)
                                    <li class="list-group-item" style="border: none; text-align: left;">
                                        <a href="">{{ $subSubCategory->name }} </a> 
                                        <i class="fas fa-chevron-right" id="right-arrow"></i>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item" style="cursor:default;">No subcategories</li>
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
                    <div class="card mt-2" style="width: 18rem; border:none;">
                        <img src="{{ asset('image.png') }}" class="card-img-top rounded" alt="..." width="200">
                        <div class="card-body mt-4">
                            <h5 class="card-title" style="cursor:default;">{{$subcategory->name}}</h5>
                        </div>
                        <ul class="list-group list-group-flush" >
                            @if($subcategory->subSubCategories->count() > 0)
                                @foreach($subcategory->subSubCategories as $subSubCategory)
                                    <li class="list-group-item " style="border: none; text-align: left;">
                                        <a href="{{ route('gigs.index') }}">{{ $subSubCategory->name }} </a> 
                                        <i class="fas fa-chevron-right" id="right-arrow"></i>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item" style="cursor:default;">No subcategories</li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container mt-4" style="cursor:default;">
    <div class="row">
            <div class="col-md-6">
                <h3>{{ $category->name }} Related Guides</h3>
            </div>
            <div class="col-md-6 text-md-end d-none d-md-block">
                <a href="">{{ $category->name }} Guides</a>
            </div>
    </div>
    <div class="d-none d-md-block">
        <div class="row mt-4">
            <div class="col-md-4">
                <!-- News Card 1 -->
                <div class="card border-0">
                    <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 1">
                    <div class="card-body">
                         <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- News Card 2 -->
                <div class="card border-0">
                    <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 2">
                    <div class="card-body">
                         <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- News Card 3 -->
                <div class="card border-0">
                    <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 3">
                    <div class="card-body">
                         <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News Carousel for Mobile -->
    <div class="d-block d-md-none">
        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- News Card 1 -->
                    <div class="card border-0">
                        <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 1">
                        <div class="card-body">
                             <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- News Card 1 -->
                    <div class="card border-0">
                        <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 1">
                        <div class="card-body">
                            <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- News Card 1 -->
                    <div class="card border-0">
                        <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 1">
                        <div class="card-body">
                             <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>



<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h3>{{ $category->name }} FAQs</h3>
        </div>
    </div>
    <div class="accordion border-0" id="accordionPanelsStayOpenExample">
  
    <div class="accordion-item border-0">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                FAQ #2
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item border-0">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                FAQ #3
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
</div>

</div>


@push('scripts')
<script src="{{ asset('frontend/custom_js/category.js') }}"></script>
@endpush

@endsection