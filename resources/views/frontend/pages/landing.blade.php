@extends('frontend.layouts.frontend')

@section('title', 'Fiverr - Freelance Marketplace')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/landing.css') }}">
@endpush

@section('content')

<section class="slider">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="slider-left">
             <h2>Find the perfect freelance services for your business</h2>
            <div class="input-group mb-3">
              <input type="text" class="slider-input form-control" placeholder="Try logo animation " aria-label="Recipient's username" aria-describedby="basic-addon2">
               <!-- <i class="fas fa-search" aria-hidden="true"></i> -->
              <div class="input-group-append">
                <button class="search btn btn-outline-secondary ml-2" type="button">Search</button>
               </div>
            </div>
            <nav class="slider-left-menu">
              <ul>
                <li>Popular :</li>
                <li><a href="#">Voice Over</a></li>
                 <li><a href="#">Translation</a></li>
                <li><a href="#">Logo Design</a></li>
                <li><a href="#">Articles & Blog Posts</a></li>
               </ul>
            </nav>
          </div>
         </div>
        <div class="col-lg-6">
          <div class="slider-right">
             <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_496,dpr_1.0/general_assets/logged_out_homepage/assets/hero/900-matthew2x.png" alt="">
            <div class="star">
              <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
              <p>Mathew,writer and proofreader</p>
            </div>
          </div>
         </div>
      </div>
      <div class="recangle">

      </div>
    </div>
  </section>
  <section class="slider-bottom text-center">
    <div class="container">
       <nav class="slider-bottom-menu">
        <ul>
          <li><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/facebook.a1eeefc.png" alt=""></li>
          <li><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/google.517da09.png" alt=""></li>
          <li><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/mit.50c4381.png" alt=""></li>
          <li><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/netflix.e3ad953.png" alt=""></li>
          <li><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/paypal.ec56157.png" alt=""></li>
          <li><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/intuit.6e468f0.png" alt=""></li>
          <li><img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/pandg.8b7310b.png" alt=""></li>
           </ul >


      </nav>
    </div>
  </section>


  <section class="service">
    <div class="container-fluid">
        <div class= "servce-cont">
        <h2>Popular professional services</h2>
      </div>


    <div class="service-boxes ml-3">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <article class="s-b-x-cont">
              <p>Build Your Brand</p>
              <h4>Logo Design</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/logodesign@2x.jpg" alt="">
            </picture>
            <article class="s-b-x-cont-2">
              <p>Customize your site</p>
              <h4>Wordpress</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/wordpress@2x.jpg" alt="">
            </picture>
            <article class="s-b-x-cont-3">
              <p>Share your message</p>
              <h4>Voice Over</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/voiceover@2x.jpg" alt="">
            </picture>
            <article class="s-b-x-cont-4">
              <p>Engage your audience</p>
              <h4>Whiteboard</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/whiteboard@2x.jpg" alt="">
            </picture>
            <article class="s-b-x-cont-5">
              <p>Reach more customers</p>
              <h4>Social Media</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/social@2x.jpg" alt="">
            </picture>
          </div>
          <div class="carousel-item">
            <article class="s-b-x-cont">
              <p>Unlock growth online</p>
              <h4>seo</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/seo@2x.jpg" alt="">
            </picture>
            <article class="s-b-x-cont-2">
              <p>Color your dreams</p>
              <h4>IIIustration</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/illustration2x.jpg" alt="">
            </picture>
            <article class="s-b-x-cont-3">
              <p>Go global</p>
              <h4>Translation</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/translation2x.jpg" alt="">
            </picture>
            <article class="s-b-x-cont-4">
              <p>Learn your business</p>
              <h4>Data entry</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/data-entry2x.jpg" alt="">
            </picture>
            <article class="s-b-x-cont-5">
              <p>Showcase your story</p>
              <h4>Book covers</h4>
            </article>
            <picture class="service-img">
              <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_250,dpr_1.0/general_assets/logged_out_homepage/assets/sub_category/books2x.jpg" alt="">
            </picture>
          </div>
        </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    </div>
  </section>



      <!--professional services section-->
      <div class="row">
        <div class="row align-items-center" style="height: 100px;">
            <h2 class="heading-caption">Popular professional services</h2>
        </div>
        <div class="row px-0 m-0 align-items-center justify-content-center">
                        <!--slider for mobile-->
                        <!--slider-->
                        <div class="row d-flex align-items-center d-sm-none">
                            <div class="col-1 d-flex align-items-center justify-content-center px-0">
                               <a class="caro_btn" role="button" data-bs-target="#carouselExampleIndicatorMobile" data-bs-slide="prev">
                                  <div class="carousel-nav-icon">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
                                     </svg>
                                  </div>
                               </a>
                            </div>
                            <div class="col-10">
                               <!--Start carousel-->
                               <div id="carouselExampleIndicatorMobile" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">

                                  <div class="carousel-inner">
                                     <div class="carousel-item active">
                                        <div class="row mx-0">

                                            <div style="padding-inline: 0px; min-width: 130px;" class="col col-md cart-view">
                                                <div class="cart-img-container align-self-start" style="height: 180px;">
                                                    <a href="#"><img src="{{ asset('image.png') }}" class="cart-img" ></a>
                                                </div>
                                                <div class="cart-product-details " style=" color:black;margin-block:10px;font-family: Source Sans Pro,sans-serif;font-style: normal;">
                                                    <div class="d-flex justify-content-between mb-1" style="font-size: 18px;"><span >Seller name </span><span class="text-end">Level 2</span></div>
                                                    <p class="text-start gig_title mb-4">I will create web design</p>

                                                    <div class="d-flex mb-4">
                                                        <span class=" review">
                                                            <i class="fa fa-star" aria-hidden="true"></i>5<span style="color:#56575a; ">(30)</span>
                                                        </span>
                                                    </div>
                                                    <p>From $20</p>
                                                </div>
                                            </div>

                                        </div>
                                     </div>

                                    @for($i=1; $i<=4; $i++)
                                     <div class="carousel-item">
                                        <div class="row mx-0">

                                            <div style="padding-inline: 0px; min-width: 130px;" class="col col-md cart-view">
                                                <div class="cart-img-container align-self-start" style="height: 180px;">
                                                    <a href="#"><img src="{{ asset('image.png') }}" class="cart-img" ></a>
                                                </div>
                                                <div class="cart-product-details " style=" color:black;margin-block:10px;font-family: Source Sans Pro,sans-serif;font-style: normal;">
                                                    <div class="d-flex justify-content-between mb-1" style="font-size: 18px;"><span >Seller name {{$i}}</span><span class="text-end">Level 2</span></div>
                                                    <p class="text-start gig_title mb-4">I will create web design {{$i}}</p>

                                                    <div class="d-flex mb-4">
                                                        <span class=" review">
                                                            <i class="fa fa-star" aria-hidden="true"></i>5<span style="color:#56575a; ">(3{{$i}})</span>
                                                        </span>
                                                    </div>
                                                    <p>From $20</p>
                                                </div>
                                            </div>

                                        </div>
                                     </div>
                                     @endfor

                                  </div>
                               </div>
                               <!--End carousel-->
                            </div>
                            <div class="col-1 d-flex align-items-center justify-content-center px-0"><a class="caro_btn" role="button" data-bs-target="#carouselExampleIndicatorMobile" data-bs-slide="next">
                               <div class="carousel-nav-icon">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                     <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
                                  </svg>
                               </div>
                               </a>
                            </div>
                         </div>
                        <!--end slider-->
                        <!--end of slider for mobile-->

                        <!--for large screen section-->
                        <!--slider-->
                        <div class="row align-items-center laptop">
                            <div class="col-1 d-flex align-items-center justify-content-center px-0">
                               <a class="caro_btn" role="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="prev">
                                  <div class="carousel-nav-icon">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
                                     </svg>
                                  </div>
                               </a>
                            </div>
                            <div class="col-10">
                               <!--Start carousel-->
                               <div id="carouselExampleIndicator" class="carousel slide" data-bs-ride="carousel" >

                                  <div class="carousel-inner">
                                     <div class="carousel-item active">
                                        <div class="row mx-0">

                                          @for($i=1; $i<=6;$i++)
                                            <div style="padding-inline: 6px; min-width: 130px;" class="col col-md cart-view">
                                                <div class="cart-img-container align-self-start" style="height: 180px;">
                                                    <a href="#"><img src="{{ asset('image.png') }}" class="cart-img" ></a>
                                                </div>
                                                <div class="cart-product-details " style=" color:black;margin-block:10px;font-family: Source Sans Pro,sans-serif;font-style: normal;">
                                                  <div class="d-flex justify-content-between mb-1" style="font-size: 18px;"><span >Seller name {{$i}} </span><span class="text-end">Level 2</span></div>
                                                  <a class="text-start gig_title mb-4" href="#">I will create web design {{$i}}</a>

                                                  <div class="d-flex mb-4">
                                                      <span class=" review">
                                                          <i class="fa fa-star" aria-hidden="true"></i>5<span style="color:#56575a; ">(3{{$i}})</span>
                                                      </span>
                                                  </div>
                                                  <p>From $2{{$i}}</p>
                                                </div>
                                            </div>
                                          @endfor


                                        </div>
                                     </div>
                                     <div class="carousel-item">
                                        <div class="row mx-0">

                                            @for($i=7; $i<=12;$i++)
                                            <div style="padding-inline: 6px; min-width: 130px;" class="col col-md cart-view">
                                                <div class="cart-img-container align-self-start" style="height: 180px;">
                                                    <a href="#"><img src="{{ asset('image.png') }}" class="cart-img" ></a>
                                                </div>
                                                <div class="cart-product-details " style=" color:black;margin-block:10px;font-family: Source Sans Pro,sans-serif;font-style: normal;">
                                                  <div class="d-flex justify-content-between mb-1" style="font-size: 18px;"><span >Seller name {{$i}} </span><span class="text-end">Level 2</span></div>
                                                  <a class="text-start gig_title mb-4" href="#">I will create web design {{$i}}</a>

                                                  <div class="d-flex mb-4">
                                                      <span class=" review">
                                                          <i class="fa fa-star" aria-hidden="true"></i>5<span style="color:#56575a; ">(3{{$i}})</span>
                                                      </span>
                                                  </div>
                                                  <p>From $2{{$i}}</p>
                                                </div>
                                            </div>
                                            @endfor


                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!--End carousel-->
                            </div>
                            <div class="col-1 d-flex align-items-center justify-content-center px-0"><a class="caro_btn" role="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="next">
                               <div class="carousel-nav-icon">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                     <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
                                  </svg>
                               </div>
                               </a>
                            </div>
                         </div>
                        <!--end slider-->

        </div>
    </div>
    <!--end of professional services section-->



  <section class="work">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="work-left">
            <div class="part">
              <h2>Get work done faster, with confidence</h2>
              <span><i class="far fa-check-circle mr-2"></i>Payment protection, guaranteed</span>
              <p>Payment is released to the freelancer once you’re pleased and approve <br> the work you get.</p>
            </div>
            <div class="part">
              <span><i class="far fa-check-circle mr-2"></i>Payment protection, guaranteed</span>
              <p>Payment is released to the freelancer once you’re pleased and approve <br> the work you get.</p>
            </div>
            <div class="part">
              <span><i class="far fa-check-circle mr-2"></i>Payment protection, guaranteed</span>
              <p>Payment is released to the freelancer once you’re pleased and approve <br> the work you get.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="work-right">
            <picture class="work-right-img">
              <img class="video_image" src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_700,dpr_1.0/general_assets/logged_out_homepage/assets/selling_proposition/1400-selling-proposition-2x.png" alt="">
            </picture>
            <article class="video-play">
              <span><i class="fas fa-play"></i></span>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="market">
    <article class="market-content">
      <h4>Explore the marketplace</h4>
    </article>
    <div class="market-boxes text-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <div class="market-box">
              <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/graphics-design.d32a2f8.svg" alt="">
              <h5></h5>
              <p>Graphics & Design</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="market-box">
              <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/online-marketing.74e221b.svg" alt="">
              <h5></h5>
              <p>Digital Marketing</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="market-box">
              <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/writing-translation.32ebe2e.svg" alt="">
              <h5></h5>
              <p>Writing & Translation</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="market-box">
              <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/video-animation.f0d9d71.svg" alt="">
              <h5></h5>
              <p>Video & Animation</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="market-box">

              <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/music-audio.320af20.svg" alt="">
              <h5></h5>
              <p>Music & Audio</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="market-box">
              <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/programming.9362366.svg" alt="">
              <h5></h5>
              <p>Programming & Tech</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="market-box">
              <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/business.bbdf319.svg" alt="">
              <h5></h5>
              <p>Business</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="market-box">
              <img src="https://fiverr-res.cloudinary.com/npm-assets/@fiverr/logged_out_homepage_perseus/apps/lifestyle.745b575.svg" alt="">
              <h5></h5>
              <p>Lifestyle</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="project">
    <article class="project-content">
      <h2>Get inspired with projects made by our freelancers</h2>
    </article>
    <div class="container-fluid">
      <div class="project-boxes">
        <div class="row">
          <div class="col-lg-3">
            <div class="project-box">
              <picture class="p-b-img">
                <img style="width:100%;object-fit: cover;object-position: center center;"
                  src="https://fiverr-res.cloudinary.com/q_auto,f_auto,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/carmelacaldart0.jpg" alt="">
              </picture>
              <article class="p-b-cont">
                <span><a href="#"><img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/bc8d9342a981e3e7f42c4c3e15b30e7d-1555596582200/4754a943-ba33-4953-b84a-033fd3d36350.jpg" alt="">IIIustration <p>camelacaldarto</p></a></span>
              </article>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="project-box">
              <picture class="p-b-img">
                <img style="width:100%;object-fit: cover;object-position: center center;"
                src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/spickex.jpg" alt="">
              </picture>
              <article class="p-b-cont">
                <span><a href="#"><img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/profile/photos/22711136/original/fiverr_profile.jpg" alt="">Flyer Design <p>by spickex</p></a></span>
              </article>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="project-box">
              <picture class="p-b-img">
                <img style="width:100%;object-fit: cover;object-position: center center;"
                src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/artsi3d.png" alt="">
              </picture>
              <article class="p-b-cont">
                <span><a href="#"><img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/a832de173d05a95cd49903ba5b7dad13-1533185904165/f601e668-0887-4bf6-be52-ff28be45a1e3.jpg" alt="">3 d Models & Product Design <p>by artsi3d</p></a></span>
              </article>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="project-box">
              <picture class="p-b-img">
                <img style="width:100%;object-fit: cover;object-position: center center;"
                src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_320,dpr_1.0/general_assets/logged_out_homepage/assets/made_on_fiverr/dvincentgomes.jpg" alt="">
              </picture>
              <article class="p-b-cont">
                <span><a href="#"><img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/01b6ce5dc58e320d3e1e27d9c6a10143-1556123965312/c675e6f4-303e-4fab-9854-314669dda095.jpg" alt="">IIIustration <p>dvincentgomes</p></a></span>
              </article>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="testi">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="work-right">
            <picture class="work-right-img">
              <img class="video_image" src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_600,dpr_1.0/general_assets/logged_out_homepage/assets/testimonials/1440-haerfest-2x.jpg" alt="">
            </picture>
            <article class="video-play">
              <span><i class="fas fa-play"></i></span>
            </article>
          </div>
        </div>
        <div class="col-lg-6 p-0">
          <div class="testi-right">
            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Voluptate corporis maiores, quaerat voluptatibus vitae provident veniam <br> cumque voluptates dolorum voluptas! Lorem ipsum dolor <br> sit amet consectetur adipisicing elit. Ullam sint sapiente <br> nesciunt eos vel eligendi in minus aliquid <br> laboriosam deleniti?"</p>
            <h5>Tim and Dan Joo, Co-funders</h5>
            <span>HERFEST</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="fiver-pro">
    <div class="container-fluid">
      <div class="pro-img">
        <img style="width:100%;min-height:300px;object-fit: cover;object-position: center center;"
         src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_1400,dpr_1.0/general_assets/logged_out_homepage/assets/pro/pro_banner_1400px-2x.jpg" alt="">
      </div>
      <div class="pro-content">
        <h4>Try Fiverr pro</h4>
        <h2>Unrivaled experts, trusted by the world's <br> biggest brands</h2>
        <a href="#">Explore Pro Service</a>
      </div>
    </div>
  </section>
  <section class="tools">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="work-left">
            <div class="part">
              <h2>Give your business the right tools</h2>
              <span><i class="far fa-check-circle mr-2"></i>Full transparency</span>
              <p>A new shared dashboard allows you to track your team's activity, so that <br> everyone is always in sync.</p>
            </div>
            <div class="part">
              <span><i class="far fa-check-circle mr-2"></i>VIP customer support</span>
              <p>Quick response time and upgraded support solutions will help you to get <br> what you need, when you need it.</p>
            </div>
            <div class="part">
              <span><i class="far fa-check-circle mr-2"></i>Improved billing options</span>
              <p>One team - one payment method. You can now add a card on file that every <br> team member can use.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="tools-right">
            <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_700,dpr_1.0/general_assets/logged_out_homepage/assets/business_tools/ipadX2.gif" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="guide">
    <div class="container-fluid">
      <h2 class="px-4">Fiverr guides</h2>
      <div class="row">
        <div class="guide-boxes">
          <div class="row">
            <div class="col-lg-4 text-center">
              <div class="guide-box">
                <div class="g-b-img">
                  <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_450,dpr_1.0/general_assets/logged_out_homepage/assets/fiverr_guides/1440-create-website-2x.jpg" alt="">
                </div>
                <div class="g-b-cont">
                  <h4>Start an online business and work from home</h4>
                  <p>A complete guide to starting a small business online</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 text-center">
              <div class="guide-box">
                <div class="g-b-img">
                  <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_450,dpr_1.0/general_assets/logged_out_homepage/assets/fiverr_guides/1440-digital-marketing-2x.jpg" alt="">
                </div>
                <div class="g-b-cont">
                  <h4>Digital marketing made easy</h4>
                  <p>A practical guide to understand what is digital marketing</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 text-center">
              <div class="guide-box">
                <div class="g-b-img">
                  <img src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_450,dpr_1.0/general_assets/logged_out_homepage/assets/fiverr_guides/1440-strong-brand-2x.jpg" alt="">
                </div>
                <div class="g-b-cont">
                  <h4>Create a logo for your business</h4>
                  <p>A step-by-step guide to create a memorable business logo</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
