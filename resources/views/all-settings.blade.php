@extends('layouts.master')

@section('title')System Settings @endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Settings @endslot
        @slot('title') System Settings @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    <div class="row mx-0">
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="fas text-muted fa-3x fa-cog"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">General</a>
                                <p class="text-muted">View and Update Your Store Details</p>
                            </div>
                        </div>
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="fas text-muted fa-3x fa-shipping-fast"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">Easy Ship Settings</a>
                                <p class="text-muted">Manage how you ship orders to customer</p>
                            </div>
                        </div>
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="fas text-muted fa-3x fa-file-invoice-dollar"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">Payment Gateway</a>
                                <p class="text-muted">Manage your billing information and view your invoices </p>
                            </div>
                        </div>
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="far text-muted fa-3x fa-question-circle"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">Support Settings</a>
                                <p class="text-muted">Manage your support </p>
                            </div>
                        </div>
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="far text-muted fa-3x fa-envelope"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">Email Settings</a>
                                <p class="text-muted">Manage your emails </p>
                            </div>
                        </div>
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="fas text-muted fa-3x fa-cog"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">Orders</a>
                                <p class="text-muted">View and Update Your Store Details</p>
                            </div>
                        </div>
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="fas text-muted fa-3x fa-shipping-fast"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">Products</a>
                                <p class="text-muted">Manage how you ship orders to customer</p>
                            </div>
                        </div>
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="fas text-muted fa-3x fa-file-invoice-dollar"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">Notification</a>
                                <p class="text-muted">Manage your billing information and view your invoices </p>
                            </div>
                        </div>
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="far text-muted fa-3x fa-question-circle"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">Users</a>
                                <p class="text-muted">Manage your support </p>
                            </div>
                        </div>
                        <div class="col-12 my-3 row mx-0 col-sm-4">
                            <div class="col-3">
                                <span class="btn p-0">
                                    <i class="far text-muted fa-3x fa-envelope"></i>
                                </span>
                            </div>
                            <div class="col-9">
                                <a href="#" class="fw-bold fs-5">Tax</a>
                                <p class="text-muted">Manage your emails </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- select 2 plugin -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

    <!-- dropzone plugin -->
    {{-- <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script> --}}

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-select2.init.js') }}"></script>
@endsection
