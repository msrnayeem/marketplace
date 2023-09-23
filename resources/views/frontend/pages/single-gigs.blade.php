@extends('frontend.layouts.frontend')
     
@section('title')
       {{ $gig->title }}
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/single-gigs.css') }}">
<style>

    </style>
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
        <a href="{{ route('categories.show', ['category' =>$gig->subSubCategory->subCategory->category->key]) }}"> 
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


<div class="container main">
  <div class="product-column" id="product-column">
    <div class="scrollable-content">
        <h2> {{ $gig->title }} </h2>
     
        <div class="row align-items-center p-1">
            <div class="col-1">
                <!-- Apply rounded-circle class to add border radius to the image -->
                <img src="{{ asset($gig->user->avatar) }}" alt="seller" class="img-fluid rounded-circle">
            </div>
            <div class="col-6">
                <p class="mb-0" style="font-weight:700;">{{ $gig->user->name }}</p>
            </div>
            
        </div> 
        <div class="mb-2 p-4">
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
                            
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample{{ $gig->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            
                        </button>
                        <ol class="carousel-indicators" >
                            @php $j = 0; @endphp
                                @foreach($gig->gigImages as $gigImage)
                                    <img src="{{ asset($gigImage->imagePath) }}" alt="Image {{ $j }}"
                                        data-bs-target="#carouselExample{{ $gig->id }}"
                                        data-bs-slide-to="{{ $j }}" 
                                        class="{{ $j === 0 ? 'active' : '' }}">                               
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
          engaging, and eye-catching mascot logos for our clients. Let your audience recognize you from miles away.
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
            We have extensive experience in Mascot Logo Design. GeeksDigital is focused on delivering 100% client
            satisfaction to its customers.
          </p>
        </div>
        <div class="get-started">
          <h3>Ready to Get Started?</h3>
          <p>
            Our pricing plans are affordable and budget-friendly for everyone. Reach out to a manager to discuss
            your specific mascot logo design needs or any query.
          </p>
          <p>Thanks,</p>
          <p>Team GeeksDigital.</p>
        </div>
      </div>
      <hr>
      <div class="about-seller">
        <div class="title">
          <h3>About the seller</h3>
        </div>
        <div class="seller-info">
          <div class="seller-column">
            <img src="{{ asset('image.png') }}" alt="Seller Icon" class="seller-icon">
          </div>
          <div class="seller-column">
            <p class="seller-name">geeksdigital</p>
            <a href="#" class="contact-link">Contact me</a>
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
              diploma in graphic design. I design to live, but I also live to design. I specialize in logos,
              branding, web design, illustration, infographics, websites, and PowerPoint.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar-column ">
      <div class="scrollable-content">
          <div class="card position-fixed">
             <div class="tab-container">
                  <div class="tab active" data-tab="basic-tab">Basic</div>
                  <div class="tab" data-tab="standard-tab">Standard</div>
                  <div class="tab" data-tab="premium-tab">Premium</div>
              </div>
              <div class="info-container">
                  <div class="info active" id="basic-tab-info">
                      <h2>Basic Package</h2>
                      <p>Package details for Basic.</p>
                      <p>Basic Price: $ 5</p>
                  </div>
                  <div class="info" id="standard-tab-info">
                      <h2>Standard Package</h2>
                      <p>Package details for Standard.</p>
                      <p>Standard Price: $10 </p>
                  </div>
                  <div class="info" id="premium-tab-info">
                      <h2>Premium Package</h2>
                      <p>Package details for Premium.</p>
                      <p>Premium Price: $15</p>
                  </div>
                  <span style="display: none;" name="{{ $gig->id }}" id="gig_id">
              </div>
              <div class="mt-3">
                  <button class="btn btn-primary btn-sm" id="order">Order Now</button>
              </div>
              
          </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('') }}"></script>
   

<script>
  let package = "basic" ;

    document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll('.tab');
        const infoElements = document.querySelectorAll('.info');

        function showTab(tabId) {

            tabs.forEach(tab => tab.classList.remove('active'));
            infoElements.forEach(info => info.classList.remove('active'));

            const selectedTab = document.querySelector(`[data-tab="${tabId}"]`);
            selectedTab.classList.add('active');

            const infoElement = document.getElementById(`${tabId}-info`);
            infoElement.classList.add('active');
        }
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const tabId = tab.dataset.tab;
                showTab(tabId);
                package = getActiveTabClassName();
            });
        });

        showTab('basic-tab');
    });


    function getActiveTabClassName() {
        const activeTabElement = document.querySelector('.tab.active');
        activeTabClassName = activeTabElement.dataset.tab.replace('-tab', '');
        return activeTabClassName;
    }

    document.getElementById('order').addEventListener('click', function () {
        const gigIdNumber = parseInt(document.getElementById('gig_id').getAttribute('name'));
        const countElement = document.getElementById("notification_count");
        const countValue = countElement.innerText;       

        Swal.fire({
            title: 'Are you sure ?',
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
                      type: 'get',
                      url: '',
                      data: {
                          gigIdNumber: gigIdNumber,
                          package: package
                      },
                      success: function (response) {
                        console.log(response);
                          if(response.success) {

                            if (countValue == "") {
                                countElement.innerText = "1";
                              } else {
                                const count = parseInt(countValue) + 1;
                                countElement.innerText = count;
                              }
                              Swal.fire({
                                title: 'Order Placed Successfully',
                                icon: 'success',
                                confirmButtonText: 'Ok',
                              });
                          }
                      },
                      error: function (error) {
                        console.error('Error placing order:', error);
                        Swal.fire({
                          title: 'Error Placing Order',
                          icon: 'error',
                          confirmButtonText: 'Ok',
                        });
                      }
                });
             
           } else {
              // If the user clicks the cancel button or closes the confirmation box, do nothing.
            }
          });
  });
</script>
@endpush