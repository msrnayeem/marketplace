@extends('frontend.layouts.frontend')
     
@section('title', 'Services -')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/') }}">

@endpush
 
@section('content')
<!-- Breadcrumbs container -->
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="custom-active" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <a class="black" href="">category->name</a>
            </li>
        </ol>
    </nav>
</div>
<!-- Breadcrumbs container END--> 


@push('scripts')
<script src="{{ asset('frontend/custom_js/') }}"></script>
@endpush

@endsection