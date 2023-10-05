@extends('frontend.layouts.frontend')

@section('title', 'Miver || Orders')


@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/responsive.dataTables.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/custom_css/fixedHeader.dataTables.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/custom_css/order-index.css') }}">
@endpush

@section('content')

    <div class="container">
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
                @if (count($orders) > 0)
                    @foreach ($orders as $order)
                        <tr>
                            <td>
                                <img src="{{ asset($order->buyer->avatar) }}" height="40" width="40"
                                    class="rounded-circle" />
                                {{ $order->buyer->name }}
                            </td>
                            <td>
                                <a href="{{ route('orders.show', ['order' => $order->id]) }}">{{ $order->gig->title }} </a>
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
                        <td>You haven't receive any order yet</td>
                        <td></td>
                        <td></td>
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
