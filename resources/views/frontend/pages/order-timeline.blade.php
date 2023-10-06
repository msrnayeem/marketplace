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
            color: #007bff;
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

            <div class="col-md-6 p-3">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        @foreach ($timelines as $date => $timelineGroup)
                            <h4>{{ $date }}</h4>
                        @endforeach
                    </div>
                    <div class="col-md-9 col-sm-7">
                        @foreach ($timelines as $date => $timelineGroup)
                            <ul class="list-group">
                                @foreach ($timelineGroup as $timeline)
                                    <li class="list-group-item">
                                        <b>{{ $timeline->buyer->name }}</b> {{ $timeline->description }} at -
                                        {{ $timeline->created_at->format('H:i A') }}
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="border: 2px solid yellow; ">
                <p> ok</p>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
