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
                <ul class="nav nav-underline" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                  </ul>

                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <h2>Home</h2>
                      <p>This is the home section. Add your home content here.</p>
                    </div>
                    <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                      <h2>About</h2>
                      <p>This is the about section. Add information about your website or yourself here.</p>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <h2>Contact</h2>
                      <p>This is the contact section. Add contact information or a contact form here.</p>
                    </div>
                  </div>

            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
