@extends('frontend.layouts.frontend')

@section('title', 'Miver || Orders')


@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/order-timeline.css') }}">
    <style>
        .main-div {
            display: flex;
            position: relative;
        }

        .sticky-column {
            position: sticky;
            height: max-content;

        }

        .non-sticky {
            height: max-content;
        }
    </style>
@endpush

@section('content')
    @php
        $allTimelineGroups = [];
        foreach ($timelines as $date => $timelineGroup) {
            $allTimelineGroups[] = $timelineGroup;
        }
        $lastChangedByName = null;

    @endphp


    <div class="container mt-4 ">
        <div class="row main-div">

            <div class="col-md-4 col-sm-12 sticky-column">
                <div class="row justify-content-center align-items-start">
                    @if ($StatusId == 4 || $StatusId == 9)
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
                        @elseif($StatusId == 9)
                            <div class="col-12 mt-4">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Completed</h4>
                                    <p>Order completed 100%</p>

                                </div>
                            </div>
                        @endif
                    @else
                        @if ($StatusId == 2)
                            <form class="col-12 mt-3" method="POST" action="{{ route('order-details.store') }}"
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
                        @elseif($StatusId >= 1 && $StatusId <= 3)
                            <form class="col-12 mt-3" method="POST" action="{{ route('order-details.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="order_id" value="{{ $order_id }}" readonly>

                                <div class="card p-4">
                                    <div class="form-group mb-4">
                                        <label for="timeline_status_id">Update status now:</label>
                                        <select id="timeline_status_id" name="timeline_status_id" class="form-control mt-2">
                                            <option value="5">Accept</option>
                                            <option value="4">Cancel</option>
                                        </select>
                                    </div>
                                    <div class="text-end mb-2 mt-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        @elseif($StatusId == 5)
                            <form class="col-12 mt-3" method="POST" action="{{ route('order-details.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="order_id" value="{{ $order_id }}" readonly>

                                <div class="card p-4">
                                    <h4> Order completed ?</h4>
                                    <div class="form-group mb-4">
                                        <input type="hidden" name="timeline_status_id" value="8">
                                        <div class="mb-3">
                                            <label for="formFileMultiple" class="form-label">Send files-</label>
                                            <input class="form-control" type="file" id="formFileMultiple" name="file"
                                                accept=".jpg, .jpeg, .png, .pdf">

                                        </div>
                                    </div>
                                    <div class="text-end mb-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        @elseif($StatusId == 8)
                            <div class="col-12 mt-4">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Completed</h4>
                                    <p>Now wait for the buyer to accept the order.</p>

                                </div>
                            </div>
                        @endif

                    @endif
                </div>

            </div>
            <div class="col-md-8 col-sm-12 p-3 non-sticky">
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
                                            @if ($timeline->timelineStatus->id != 4 && $timeline->file !== null)
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


        </div>
    </div>

@endsection

@push('scripts')
@endpush
