@extends('frontend.layouts.frontend')
     
@section('title', 'Profile-'. $user->name)

@push('styles')
<style>
.main{
    margin-top: 150px; 
    position: relative;
}

.btn-green{
    font-size: 16px;     
    background-color: #1dbf73;
    font-weight: 700;
    color: #fff!important;
    padding: 10px;   
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#become-seller a{
    text-decoration: none;
    color: #fff;
}

</style>

@endpush
 
@section('content')
<div class="container main">
    <div class="row align-items-start">
        <div class="col sm-1 col-md-5 col-xl-3 mb-3 mb-sm-3 p-4">
            <div class="row mb-4">
                <div class="card text-center">
                    <div class="img container text-center ">
                        <img src="{{Auth::user()->imagePath }}"  class="rounded-circle mt-2" alt="profile" width="140" height="150">
                        <h3  class="m-0 mt-1">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-outline-primary">Preview Miver Profile</a>
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">An item</li>
                            <li class="list-group-item border-0">A second item</li>
                            <li class="list-group-item border-0">A third item</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                 <div class="card">
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">Description</h5>
                            </div>
                            <div class="col-md-6 d-none d-md-inline text-right">
                                <a class="card-text" href="#">Edit Description</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                With supporting text below as a natural lead-in to additional content
                                </p>
                            </div>
                            <hr>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Languages</h5>
                                    </div>
                                    <div class="col-md-6 d-none d-md-inline text-right">
                                        <a class="card-text" href="#">Add New</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">English - Fluent</li>
                                                <li class="list-group-item">English - Fluent</li>
                                                <li class="list-group-item">English - Fluent</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Skills</h5>
                                    </div>
                                    <div class="col-md-6 d-none d-md-inline text-right">
                                        <a class="card-text" href="#">Add New</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Web Development - Fluent</li>
                                                <li class="list-group-item">SEO - Fluent</li>
                                                <li class="list-group-item">GFX - Fluent</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Shared activity information</h5>
                        <p class="card-text mt-2">
                            In order to provide the best possible work and service, 
                            some information about your activity on Fiverr may be shared with sellers.
                             Manage settings
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        
      
        <!-- right column become seller-->
        <!-- <div class="col sm-1 col-md-7 col-xl-9 mb-sm-3 p-3 p-md-4 p-xl-4" style="height:400px;">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> -->

        <!-- right column gigs-->
        <div class="col sm-1 col-md-7 col-xl-9 mb-sm-3 p-3 p-md-4 p-xl-4 d-none d-sm-block" style="height:400px;">
            <div class="card h-100">
                <div class="card-body">
                    <a href="#" class="btn-standard btn-green rounded">Become Seller</a>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script src="{{ asset('frontend/custom_js/profile.js') }}"></script>
@endpush

@endsection