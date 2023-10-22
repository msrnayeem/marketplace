@extends('frontend.layouts.frontend')

@section('title', 'Package Info')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/custom_css/gig-package.css') }}">
@endpush
@section('content')
    <style>

    </style>
    <div class="container p-4">
        <form method="POST" action="{{ route('gig-packages.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card p-4">
                <input type="hidden" name="gig_id" value="{{ $gig_id }}">
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="fw-bold my-3" style="color:#62646a;">Package Info</h3>
                        <table class="table" id="priceTable">
                            <thead>
                                <tr>
                                    <th scope="col">Basic</th>
                                    <th scope="col">Standard</th>
                                    <th scope="col">Premium</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="basicPrice"
                                            placeholder="Enter Price">
                                    </td>

                                    <td>
                                        <input type="text" class="form-control" name="standardPrice"
                                            placeholder="Enter Price">
                                    </td>

                                    <td>
                                        <input type="text" class="form-control" name="premiumPrice"
                                            placeholder="Enter Price">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="basicTime"
                                            placeholder="Enter Time">
                                    </td>

                                    <td>
                                        <input type="text" class="form-control" name="standardTime"
                                            placeholder="Enter Time">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="premiumTime"
                                            placeholder="Enter Time">
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                        <br><br>
                        <h3 class="fw-bold my-3" style="color:#62646a;">Package Details</h3>
                        <table class="table" id="detailsTable">
                            <thead>
                                <tr>
                                    <th scope="col">Basic</th>
                                    <th scope="col">Standard</th>
                                    <th scope="col">Premium</th>
                                    <th scope="col"><button type="button" class="btn btn-primary add-detail">+</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="detail-row">
                                    <td>
                                        <input type="text" class="form-control" name="basicDescription"
                                            placeholder="Enter Description">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="standardDescription"
                                            placeholder="Enter Description">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="premiumDescription"
                                            placeholder="Enter Description">
                                    </td>
                                    <td><button type="button" class="btn btn-warning remove-info">-</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br><br>
                <div class="my-2 py-2 text-end">
                    <button type="submit" class="btn btn-success"
                        style="background-color:#1dbf73; color:white;">Continue</button>
                </div>

                <div class="row">
                    <div class="col-12 d-flex flex-row flex-wrap justify-content-start" id="selected-images"></div>
                </div>

            </div>
        </form>
    @endsection

    @push('scripts')
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- custom JS -->
        <script src="{{ asset('frontend/custom_js/gig-package.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.add-detail').on('click', function() {
                    var newRow = $('.detail-row:first').clone();
                    newRow.find('input').val('');
                    $('#detailsTable tbody').append(newRow);
                });

                $('#detailsTable').on('click', '.remove-info', function() {
                    // Check if there is more than one row, then remove
                    if ($('#detailsTable tbody tr').length > 1) {
                        $(this).closest('tr').remove();
                    }
                });
            });
        </script>
    @endpush
