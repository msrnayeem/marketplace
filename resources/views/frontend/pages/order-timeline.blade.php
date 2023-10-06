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
    </style>
@endpush

@section('content')
    <div class="container mt-4">
        <div class="row d-flex justify-content-center mt-70 mb-70">

            <div class="col-md-6 col-sm-12 p-3">
                <div class="row">
                    @foreach ($timelines as $date => $timelineGroup)
                        <div class="col-md-3 col-sm-4">
                            <h4 class="timeline-date">{{ $date }}</h4>
                        </div>
                        <div class="col-md-9 col-sm-7">
                            @foreach ($timelineGroup as $timeline)
                                <p> {{ $timeline->changedBy->name }}
                                    {{ $timeline->timelineStatus->description }}
                                    at - {{ $timeline->created_at->format('H:i A') }}
                                </p>
                            @endforeach
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>

            <div class="col-md-6 col-sm-12" style="border: 2px solid yellow; ">
                <p> ok</p>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
