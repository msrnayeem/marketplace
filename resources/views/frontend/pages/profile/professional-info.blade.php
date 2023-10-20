@extends('frontend.layouts.frontend')

@section('title', 'Professional info-' . Auth::user()->name)

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap-select CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.1/dist/css/bootstrap-select.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/professional-info.css') }}">
@endpush
@section('content')

    <div class="container">
    </div>

@endsection

@push('scripts')
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- custom JS -->
    <script src="{{ asset('frontend/custom_js/professional-info.js') }}"></script>
@endpush
