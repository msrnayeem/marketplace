@extends('frontend.layouts.frontend')

@section('title', 'Miver || Orders')


@push('styles')
    <style>
        body {
            background-color: #eee;
        }

        .list-group-item {
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .list-group-item span {
            font-weight: bold;
            color: #333;
        }

        .timeline-date {
            color: #dd3b3b;
            margin-bottom: 5px;
        }


        .container {
            border: 2px solid red;
        }

        .nav-underline .nav-link.active {
            color: #0f85b0;
            border-bottom: 3px solid #0f85b0;
        }
    </style>
@endpush

@section('content')
    @php
        $allTimelineGroups = [];
        foreach ($timelines as $date => $timelineGroup) {
            $allTimelineGroups[] = $timelineGroup;
        }
    @endphp


    <div class="container mt-4">
        <div class="row d-flex justify-content-start mt-70 mb-70">

            <div class="col-md-6 col-sm-12 p-3">
                <div class="row">
                    @foreach ($timelines as $date => $timelineGroup)
                        <div class="col-md-3 col-sm-4">
                            <h4 class="timeline-date">{{ $date }}</h4>
                        </div>
                        <div class="col-md-9 col-sm-7">
                            @foreach ($timelineGroup as $timeline)
                                <p>
                                    @if ($timeline->changedBy->id == Auth::user()->id)
                                        You -
                                    @else
                                        {{ $timeline->changedBy->name }} -
                                    @endif
                                    {{ $timeline->timelineStatus->description }}
                                    at - {{ $timeline->created_at->format('H:i A') }}
                                </p>
                            @endforeach
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 p-3">
                <div class="row">
                    <form class="form-control mb-3" method="POST" action="{{ route('order-details.store') }}">
                        <select class="form-select form-select-md mb-3">
                            @if (count($allTimelineGroups) == 1 && $seller == false)
                                <option value="1" selected>Send requirements</option>
                            @else
                                <option value="1" selected>Ask for requirements</option>
                            @endif

                        </select>
                        <div class="mb-3 @if ($seller == true) d-none @endif">
                            <label for="formFileMultiple" class="form-label">Send File</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Change Now</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('scripts')
@endpush
