@extends('frontend.layouts.frontend')

@section('title', 'Miver || Orders')


@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/order-timeline.css') }}">
@endpush

@section('content')
    @php
        $allTimelineGroups = [];
        foreach ($timelines as $date => $timelineGroup) {
            $allTimelineGroups[] = $timelineGroup;
        }
        $lastChangedByName = null;

    @endphp


    <div class="container mt-4">
        <div class="row d-flex justify-content-start mt-70 mb-70">
            <div class="com-12">
                <h3 class="text-center">Order Timeline For Seller</h3>
            </div>
            <div class="col-md-6 col-sm-12 p-3">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row p-3" style="background:white;">
                    @foreach ($timelines as $date => $timelineGroup)
                        <div class="col-md-3 col-sm-4">
                            <h4 class="timeline-date">{{ $date }}</h4>
                        </div>

                        <div class="col-md-9 col-sm-7">
                            @foreach ($timelines as $date => $statusGroups)
                                @foreach ($statusGroups as $status => $timelineGroup)
                                    <h5 class="status-name">{{ $status }}</h5>
                                    @foreach ($timelineGroup as $timeline)
                                        @if ($timeline->timelineStatus->id == 4)
                                            @php
                                                $lastChangedByName = $timeline->changedBy->name;
                                            @endphp
                                        @endif
                                        <p>
                                            @if ($timeline->changedBy->name !== Auth::user()->name)
                                                {{ $timeline->changedBy->name }}
                                            @else
                                                You
                                            @endif - {{ $timeline->timelineStatus->description }}
                                            at {{ $timeline->created_at->format('H:i A') }}
                                            @if ($timeline->timelineStatus->id == 2 && $timeline->file !== null)
                                                <p>
                                                    <a href="{{ asset($timeline->file) }}" download>Download</a>
                                                </p>
                                            @endif
                                        </p>
                                    @endforeach
                                    <hr>
                                @endforeach
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 p-3">
                <div class="row justify-content-center align-items-start"
                    style="min-height: 300px; border: 2px solid black;">
                    @if ($StatusId == 4)
                        <div class="col-12 mt-4">
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Order Cancelled!</h4>
                                <p>Order has been cancelled by @if (Auth::user()->name !== $lastChangedByName)
                                        {{ $lastChangedByName }}
                                    @else
                                        you
                                    @endif
                                </p>

                            </div>
                        </div>
                    @else
                        @if ($StatusId == 2)
                            <form class="col-6 mt-3" method="POST" action="{{ route('order-details.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="order_id" value="{{ $order_id }}" readonly>


                                <input type="hidden" name="timeline_status_id" value="3">

                                <div @class(['p-4', 'font-bold' => true]) style="background:white;">
                                    <div class="mb-3 text-center">
                                        <p> received requirements from buyer?</p>
                                        <div>
                                            <button type="submit" class="btn btn-outline-primary">yes</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        @endif
                        <form class="col-6 mt-3" method="POST" action="{{ route('order-details.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="order_id" value="{{ $order_id }}" readonly>
                            @if ($StatusId >= 1 && $StatusId <= 3)
                                <div @class(['p-4', 'font-bold' => true]) style="background:white;">
                                    <input type="hidden" name="timeline_status_id" value="4">
                                    <div class="mb-3 text-center">
                                        <p>Want to cancel the order?</p>
                                        <div>
                                            <button type="submit" class="btn btn-outline-primary">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </form>
                    @endif
                </div>

            </div>

        </div>
    </div>

@endsection

@push('scripts')
@endpush
