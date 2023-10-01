@extends('frontend.layouts.frontend')

@section('title', 'Miver || Orders')


@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/responsive.dataTables.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/custom_css/fixedHeader.dataTables.min.css') }}"> --}}
    <style>
        #order_table {
            width: 100%;
        }

        #order_table thead {
            cursor: default;
        }

        #order_table tr {
            border: 1px solid black;
        }

        /* Custom DataTable Pagination Style */
        .dataTables_paginate {
            margin-top: 10px;
            /* Adjust the top margin */
        }

        .dataTables_paginate .pagination {
            margin: 0;
            /* Remove default margin */
            display: flex;
            list-style: none;
        }

        .dataTables_paginate .paginate_button {
            border: 1px solid #ccc;
            /* Border color for the buttons */
            margin: 0 2px;
            /* Adjust the space between buttons */
            padding: 5px 10px;
            /* Adjust button padding */
            cursor: pointer;
            border-radius: 5px;
            /* Optional: Add border radius to buttons */
        }

        .dataTables_paginate .paginate_button:hover {
            background-color: #f2f2f2;
            /* Background color on hover */
        }

        .dataTables_paginate .paginate_button.current {
            background-color: #007bff;
            /* Background color of the current page button */
            color: white;
            /* Text color of the current page button */
            border-color: #007bff;
            /* Border color of the current page button */
        }

        .dataTables_paginate .paginate_button.disabled {
            color: #ccc;
            /* Text color of disabled buttons */
            pointer-events: none;
            /* Disable pointer events for disabled buttons */
        }

        /* Custom style for DataTables info */
        /* Custom style for DataTables length change and search input */
        .dataTables_length select,
        .dataTables_filter input {
            margin-top: 10px;
            /* Adjust the top margin */
            font-size: 14px;
            /* Adjust font size */
            color: #555;
            /* Text color */
            border: 1px solid #ccc;
            /* Border color */
            border-radius: 5px;
            /* Optional: Add border radius to inputs */
            padding: 5px;
            /* Adjust input padding */
        }

        /* Style for length change and search input on focus */
        .dataTables_length select:focus,
        .dataTables_filter input:focus {
            outline: none;
            /* Remove outline on focus */
            border-color: #007bff;
            /* Border color on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Optional: Add box shadow on focus */
        }
    </style>
@endpush

@section('content')

    <div class="container">
        <table class="table table-bordered table-hover table-striped" id="order_table">
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Buyer</th>
                    <th>Price</th>
                    <th>Placed at</th>
                    <th>Delivery Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if (count($orders) > 0)
                    @foreach ($orders as $order)
                        <tr>
                            <td> {{ $order->id }} </td>
                            <td>
                                <img src="{{ asset($order->buyer->avatar) }}" height="40" width="40"
                                    class="rounded-circle" />
                                {{ $order->buyer->name }}
                            </td>
                            <td> {{ $order->amount }} </td>
                            <td> {{ $order->created_at }} </td>
                            <td> {{ $order->delivery_date }} </td>
                            <td> {{ $order->status }} </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center">
                        <td colspan="6">You haven't receive any order yet</td>
                    </tr>
                @endif
            </tbody>
        </table>
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
