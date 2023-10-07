@extends('frontend.layouts.frontend')

@section('title', 'Miver || Orders')


@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/responsive.dataTables.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/custom_css/fixedHeader.dataTables.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/order-index.css') }}">
    <style>
        .nav-link.active {
            border-bottom: 4px solid rgb(29, 29, 8);
            /* Define your border-bottom style for the active tab */
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="col-12 p-2" style="border: 2px solid yellow; ">
            <ul class="nav nav-underline" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="buyings-tab" data-bs-toggle="tab" href="#buying" role="tab"
                        aria-controls="buying" aria-selected="true">My buyings</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="selling-tab" data-bs-toggle="tab" href="#selling" role="tab"
                        aria-controls="selling" aria-selected="false">My sellings</a>
                </li>

            </ul>

            <div class="tab-content p-2" id="myTabContent">
                <div class="tab-pane fade show active" id="buying" role="tabpanel" aria-labelledby="buyings-tab">
                    <table class="table table-bordered table-hover table-striped" id="order_table">
                        <thead>
                            <tr>
                                <th>Seller</th>
                                <th>Gig</th>
                                <th>Price</th>
                                <th>Placed at</th>
                                <th>Delivery Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($buyings) > 0)
                                @foreach ($buyings as $order)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($order->buyer->avatar) }}" height="40" width="40"
                                                class="rounded-circle" />
                                            {{ $order->seller->name }}
                                        </td>
                                        <td>
                                            <a
                                                href="{{ route('order-details.show', ['order_detail' => $order->order_id]) }}">{{ $order->gig->title }}
                                            </a>
                                        </td>
                                        <td> {{ $order->amount }} </td>
                                        <td> {{ $order->created_at }} </td>
                                        <td> {{ $order->delivery_date }} </td>
                                        <td> {{ $order->status }} </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="text-center">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>You haven't buy anything yet</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="selling" role="tabpanel" aria-labelledby="selling-tab">
                    <table class="table table-bordered table-hover table-striped" id="order_table">
                        <thead>
                            <tr>
                                <th>Buyer</th>
                                <th>Gig</th>
                                <th>Price</th>
                                <th>Placed at</th>
                                <th>Delivery Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($sellings) > 0)
                                @foreach ($sellings as $order)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($order->buyer->avatar) }}" height="40" width="40"
                                                class="rounded-circle" />
                                            {{ $order->buyer->name }}
                                        </td>
                                        <td>
                                            <a
                                                href="{{ route('order-details.show', ['order_detail' => $order->order_id]) }}">{{ $order->gig->title }}
                                            </a>
                                        </td>
                                        <td> {{ $order->amount }} </td>
                                        <td> {{ $order->created_at }} </td>
                                        <td> {{ $order->delivery_date }} </td>
                                        <td> {{ $order->status }} </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="text-center">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>You haven't sell anything yet</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('frontend/custom_js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('frontend/custom_js/jquerydataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('frontend/custom_js/dataTables.responsive.js') }}"></script>
    {{-- <script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            $('#order_table').DataTable({
                responsive: true, // Enable responsive design
                searching: true, // Enable search functionality
                paging: true, // Enable pagination
                lengthChange: true, // Enable length change option
            });

        });
    </script>
@endpush
