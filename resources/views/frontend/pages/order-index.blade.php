@extends('frontend.layouts.frontend')

@section('title', 'Miver || Orders')


@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.2.0/css/scroller.dataTables.min.css">
@endpush

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Manage Orders</h2>
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-hover" id="order_table">
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
                                @for ($i = 0; $i < 10; $i++)
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td> {{ $order->id }} </td>
                                            <td> {{ $order->buyer->name }} </td>
                                            <td> {{ $order->amount }} </td>
                                            <td> {{ $order->created_at }} </td>
                                            <td> {{ $order->delivery_date }} </td>
                                            <td> {{ $order->status }} </td>
                                        </tr>
                                    @endforeach
                                @endfor
                            @else
                                <tr>
                                    <td colspan="6">No users found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>



                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>



    <script>
        $(document).ready(function() {
            $('#order_table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "fixedHeader": true,
                "scrollCollapse": true,
            });

        });
    </script>
@endpush
