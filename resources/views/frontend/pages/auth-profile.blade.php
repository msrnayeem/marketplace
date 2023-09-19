@extends('frontend.layouts.frontend')
     
@section('title', 'Profile-'. $user->name)

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/') }}">

@endpush
 
@section('content')
<div class="container" style="margin-top: 150px; position: relative;">
    {{ Auth::user()->name}}
</div>
@push('scripts')
<script src="{{ asset('frontend/custom_js/') }}"></script>
@endpush

@endsection