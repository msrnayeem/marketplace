@extends('frontend.layouts.frontend')

@section('title')
    {{ $gig->title }}
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/single-new.css') }}">
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
                    <a
                        href="{{ route('categories.show', ['category' => $gig->subSubCategory->subCategory->category->key]) }}">
                        {{ $gig->subSubCategory->subCategory->category->name }}
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $gig->subSubCategory->name }}
                </li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumbs container END-->

    <div class="container" style="background-color:#ffffff;">
        <div class="row">
            <div class="col-md-8 col-sm-12 order-md-1">
                <h2> {{ $gig->title }} </h2>
                <div class="row align-items-center p-1">
                    <div class="col-1">
                        <img src="{{ asset($gig->user->avatar) }}" alt="seller" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-6">
                        <p class="mb-0 text-capitalize" style="font-weight:700;">{{ $gig->user->name }}</p>
                    </div>
                </div>
                <div class="mb-2 p-4">
                    <div class="card border-0">
                        <div id="carouselExample{{ $gig->id }}" class="carousel slide mb-2">
                            <div class="carousel-inner">
                                @php $i = 0; @endphp
                                @foreach ($gig->gigImages as $gigImage)
                                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                        <div class="image-container rounded">
                                            <img src="{{ asset($gigImage->imagePath) }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                    </div>
                                    @php $i++; @endphp
                                @endforeach
                            </div>
                            @if (count($gig->gigImages) > 1)
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                </button>
                                <ol class="carousel-indicators">
                                    @php $j = 0; @endphp
                                    @foreach ($gig->gigImages as $gigImage)
                                        <img src="{{ asset($gigImage->imagePath) }}" alt="Image {{ $j }}"
                                            data-bs-target="#carouselExample{{ $gig->id }}"
                                            data-bs-slide-to="{{ $j }}" class="{{ $j === 0 ? 'active' : '' }}">
                                        @php $j++; @endphp
                                    @endforeach
                                </ol>
                            @endif
                        </div>
                    </div>
                </div>


                <div class="about-gig">
                    <h3>About this gig</h3>
                    <p>
                        We offer groundbreaking mascot logo designs for your business, sports team, or esports clan.
                        Elevate your marketing by owning an incredible logo and mascot design. We create perfect,
                        engaging, and eye-catching mascot logos for our clients. Let your audience recognize you from miles
                        away.
                        Let's get started and let the world know you.
                    </p>
                    <div class="design-approach">
                        <h3>We Approach Design Strategically:</h3>
                        <ul>
                            <li>Exceptional attraction</li>
                            <li>Unique logo designs</li>
                            <li>Unlimited Revisions</li>
                            <li>Industry Experienced Designers</li>
                            <li>Royalty-free logos</li>
                            <li>100% Money Back Guarantee</li>
                        </ul>
                    </div>
                    <div class="client-satisfaction">
                        <h3>WE DELIVER 100% CLIENT SATISFACTION</h3>
                        <p>
                            We have extensive experience in Mascot Logo Design. GeeksDigital is focused on delivering 100%
                            client
                            satisfaction to its customers.
                        </p>
                    </div>
                    <div class="get-started">
                        <h3>Ready to Get Started?</h3>
                        <p>
                            Our pricing plans are affordable and budget-friendly for everyone. Reach out to a manager to
                            discuss
                            your specific mascot logo design needs or any query.
                        </p>
                        <p>Thanks,</p>
                        <p>Team GeeksDigital.</p>
                    </div>
                </div>
                <hr>
                <div class="about-seller border border-2 p-2">
                    <div class="title">
                        <h3>About the seller</h3>
                    </div>
                    <div class="seller-info">
                        <div class="">
                            <img src="{{ asset('image.png') }}" alt="Seller Icon" class="seller-icon">
                        </div>
                        <div class="seller-column">
                            <a class="seller-name">{{ $gig->user->name }}</a>
                            @if ($gig->user->id != Auth::user()->id)
                                <a href="#" class="contact-link">Contact me</a>
                            @endif
                        </div>
                    </div>
                    <div class="seller-details">
                        <div class="info">
                            <p>From: United States</p>
                            <p>Member since: Sep 2019</p>
                            <p>Languages: English</p>
                            <p>Last delivery: about 2 hours</p>
                        </div>
                        <div class="about">
                            <hr>
                            <p>
                                I am a Freelance designer with over 15 years of experience in the advertising industry and a
                                diploma in graphic design. I design to live, but I also live to design. I specialize in
                                logos,
                                branding, web design, illustration, infographics, websites, and PowerPoint.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- col end -->


            <div class="col-md-1 col-sm-12 order-md-2"></div>

            <div class="col-md-3 col-sm-12 order-md-3">
                <div class="container order p-0">
                    <div class="card mb-3">
                        <div class="tab-container border border-primary bg-success">
                            <div class="tab active" data-tab="basic-tab">Basic</div>
                            <div class="tab" data-tab="standard-tab">Standard</div>
                            <div class="tab" data-tab="premium-tab">Premium</div>
                        </div>

                        <div class="info-container border-1">

                            <div class="info active" id="basic-tab-info">
                                <form method="post" action="{{ route('orders.store') }}">
                                    @csrf
                                    <div class="package-info">
                                        <h2>Basic Package</h2>
                                        <p>Package details for Basic.</p>
                                        <p>Basic Price: ${{ $gig->gigPackages[0]->price }}</p>
                                    </div>
                                    <input type="hidden" name="gig_id" value="{{ $gig->id }}" id="gig_id">
                                    <input type="hidden" name="package_id" value="{{ $gig->gigPackages[0]->id }}"
                                        id="package">
                                    <div class="mt-3 border-1 text-center">
                                        <button class="btn btn-dark order-button" id="order" style="width:100%;">Order
                                            Now</button>
                                    </div>
                                </form>
                            </div>

                            <div class="info" id="standard-tab-info">
                                <form method="post" action="{{ route('orders.store') }}">
                                    @csrf
                                    <div class="package-info">
                                        <h2>Standard Package</h2>
                                        <p>Package details for Basic.</p>
                                        <p>Standard Price: ${{ $gig->gigPackages[1]->price }}</p>
                                    </div>
                                    <input type="hidden" name="gig_id" value="{{ $gig->id }}" id="gig_id">
                                    <input type="hidden" name="package_id" value="{{ $gig->gigPackages[1]->id }}"
                                        id="package">
                                    <div class="mt-3 border-1 text-center">
                                        <button class="btn btn-dark order-button" style="width:100%;">Order Now</button>
                                    </div>
                                </form>
                            </div>

                            <div class="info" id="premium-tab-info">
                                <form method="post" action="{{ route('orders.store') }}">
                                    @csrf
                                    <div class="package-info">
                                        <h2>Premium Package</h2>
                                        <p>Package details for Basic.</p>
                                        <p>Premium Price: ${{ $gig->gigPackages[2]->price }}</p>
                                    </div>
                                    <input type="hidden" name="gig_id" value="{{ $gig->id }}" id="gig_id">
                                    <input type="hidden" name="package_id" value="{{ $gig->gigPackages[2]->id }}"
                                        id="package">
                                    <div class="mt-3 border-1 text-center">
                                        <button class="btn btn-dark order-button" style="width:100%;">Order Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                    @if ($gig->user->id != Auth::user()->id)
                        <div class="card-title text-center border border-2">
                            <a class="btn btn-light">Contact Me</a>
                        </div>
                    @endif
                </div>
            </div>



        </div>
    </div>








@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            let package = "basic";

            const tabs = $('.tab');
            const infoElements = $('.info');
            const countElement = $('#notification_count');
            const gigIdNumber = parseInt($('#gig_id').attr('name'));

            function showTab(tabId) {
                tabs.removeClass('active');
                infoElements.removeClass('active');

                const selectedTab = $(`[data-tab="${tabId}"]`);
                selectedTab.addClass('active');

                const infoElement = $(`#${tabId}-info`);
                infoElement.addClass('active');
                package = tabId.replace('-tab', '');
            }

            tabs.on('click', function() {
                const tabId = $(this).data('tab');
                showTab(tabId);
            });

            showTab('basic-tab');

            $('.order-button').on('click', function(e) {
                e.preventDefault();
                const form = $(this).closest('form');
                const formData = form.serialize();

                Swal.fire({
                    title: 'Are you sure?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Placing Order',
                            icon: 'info',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            allowEnterKey: false,
                        });

                        $.ajax({
                            type: 'post',
                            url: "{{ route('orders.store') }}", // Replace with your actual URL
                            data: formData,
                            success: function(response) {
                                Swal.close();

                                if (response.result === true) {
                                    Swal.fire({
                                        title: 'Order Placed Successfully',
                                        icon: 'success',
                                        confirmButtonText: 'Ok',
                                    });
                                } else {
                                    Swal.fire({
                                        title: response.result,
                                        icon: 'error',
                                        confirmButtonText: 'Ok',
                                    });
                                }
                            },
                            error: function(error) {
                                console.error('Error placing order:', error.responseJSON
                                    .message);
                                Swal.fire({
                                    title: 'Error Placing Order',
                                    icon: 'error',
                                    confirmButtonText: 'Ok',
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
