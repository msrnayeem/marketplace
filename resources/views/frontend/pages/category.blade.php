@extends('frontend.layouts.frontend')

@section('title')
    @if ($category !== null)
        Services - {{ $category->name }}
    @else
        Category Not Found
    @endif
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/category.css') }}">
@endpush

@section('content')


    <!-- top banner -->
    @if ($category !== null)
        <div class="container" style="cursor:default;">
            <div class="CategoryBanner">
                <img src="{{ asset($category->imagePath) }}" alt="{{ $category->name }}">
                <div class="text-overlay">
                    <div class="overlay-content">
                        <h2>{{ $category->name }}</h2>
                        <p class="subtext">{{ $category->caption }}</p>
                    </div>
                </div>
            </div>
            <div>
    @endif
    <!-- top banner end -->

    @if ($category !== null)
        <div class="container mt-4">
            <!-- Breadcrumbs container -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="custom-active" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a class="black"
                            href="{{ route('categories.show', ['category' => $category->key]) }}">{{ $category->name }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    @endif

    @if ($category !== null)
        <div class="container mt-2">
            <h3 class="mt-4" style="cursor:default;">Explore {{ $category->name }}</h3>
            <div class="d-md-none text-center">
                <div class="container">
                    @foreach ($category->subCategories as $subcategory)
                        <div class="card mt-2" style="border:none;">
                            <button class="btn toggle-collapse" type="button" style="height:70px;">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <img src="{{ asset('frontend/images/brand.png') }}" alt="Icon"
                                            class="img-fluid rounded-1"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-6 text-center">
                                        <p style="cursor:default;">{{ $subcategory->name }}</p>
                                    </div>
                                    <div class="col-2 text-right">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </button>
                            <div class="collapse">
                                <ul class="list-group mt-4 pl-4">
                                    @if ($subcategory->subSubCategories->count() > 0)
                                        @foreach ($subcategory->subSubCategories as $subSubCategory)
                                            <li class="list-group-item" style="border: none; text-align: left;">
                                                <a
                                                    href="{{ route('gigs.subSubCategory', ['subSubCategoryId' => $subSubCategory->id]) }}">
                                                    {{ $subSubCategory->name }}
                                                </a>
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
                                <img src="{{ asset('image.png') }}" class="card-img-top rounded" alt="..."
                                    width="200">
                                <div class="card-body mt-4">
                                    <h5 class="card-title" style="cursor:default;">{{ $subcategory->name }}</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    @if ($subcategory->subSubCategories->count() > 0)
                                        @foreach ($subcategory->subSubCategories as $subSubCategory)
                                            <li class="list-group-item " style="border: none; text-align: left;">
                                                <a
                                                    href="{{ route('gigs.subSubCategory', ['subSubCategoryId' => $subSubCategory->id]) }}">
                                                    {{ $subSubCategory->name }}
                                                </a>
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
                                <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- News Card 2 -->
                        <div class="card border-0">
                            <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 2">
                            <div class="card-body">
                                <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- News Card 3 -->
                        <div class="card border-0">
                            <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 3">
                            <div class="card-body">
                                <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</a>
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
                                    <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- News Card 1 -->
                            <div class="card border-0">
                                <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 1">
                                <div class="card-body">
                                    <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- News Card 1 -->
                            <div class="card border-0">
                                <img src="{{ asset('image.png') }}" class="card-img-top" alt="News 1">
                                <div class="card-body">
                                    <a class="card-text" href="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel"
                        data-bs-slide="next">
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
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            FAQ #2
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            FAQ #3
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="text-center mt-4">
                <!-- Use a Bootstrap icon class (e.g., bi-x) -->
                <svg xmlns="http://www.w3.org/2000/svg" height="11em" viewBox="0 0 460 512">
                    <path
                        d="M220.6 130.3l-67.2 28.2V43.2L98.7 233.5l54.7-24.2v130.3l67.2-209.3zm-83.2-96.7l-1.3 4.7-15.2 52.9C80.6 106.7 52 145.8 52 191.5c0 52.3 34.3 95.9 83.4 105.5v53.6C57.5 340.1 0 272.4 0 191.6c0-80.5 59.8-147.2 137.4-158zm311.4 447.2c-11.2 11.2-23.1 12.3-28.6 10.5-5.4-1.8-27.1-19.9-60.4-44.4-33.3-24.6-33.6-35.7-43-56.7-9.4-20.9-30.4-42.6-57.5-52.4l-9.7-14.7c-24.7 16.9-53 26.9-81.3 28.7l2.1-6.6 15.9-49.5c46.5-11.9 80.9-54 80.9-104.2 0-54.5-38.4-102.1-96-107.1V32.3C254.4 37.4 320 106.8 320 191.6c0 33.6-11.2 64.7-29 90.4l14.6 9.6c9.8 27.1 31.5 48 52.4 57.4s32.2 9.7 56.8 43c24.6 33.2 42.7 54.9 44.5 60.3s.7 17.3-10.5 28.5zm-9.9-17.9c0-4.4-3.6-8-8-8s-8 3.6-8 8 3.6 8 8 8 8-3.6 8-8z" />
                </svg>
            </div>
        </div>
        <div class="col-12 text-center">
            <h3 style="font-weight:700;">Nothing Found!</h3> <!-- Your text goes here -->
        </div>
    @endif

    @push('scripts')
        <script src="{{ asset('frontend/custom_js/category.js') }}"></script>
    @endpush

@endsection
