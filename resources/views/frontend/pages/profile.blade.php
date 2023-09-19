@extends('frontend.layouts.frontend')
     
@section('title', 'Profile')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/') }}">

@endpush
 
@section('content')

@push('scripts')
<script src="{{ asset('frontend/custom_js/') }}"></script>
@endpush

@endsection