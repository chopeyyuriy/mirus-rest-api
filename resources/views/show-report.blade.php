@extends('layouts.master')
@section('title') Add Report {{ Str::limit($report->message, 100, $end='...') }} @endsection

@section('css')
    <!-- main css -->
    <link href="{{ URL::asset('/assets/css/main.css') }}" rel="stylesheet" type="text/css"/>

    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- ckeditor5 css -->
    <link type="text/css" href="{{ URL::asset('/assets/libs/ckeditor5/sample/css/sample.css') }}" rel="stylesheet" media="screen"/>

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Report @endslot
        @slot('title') Report {{ Str::limit($report->message, 100, $end='...') }} @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <main class="px-3">
                            <h1>{{ $report->email }}</h1>
                            <p class="lead">{{ $report->message }}</p>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>

    <!-- select 2 plugin -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-select2.init.js') }}"></script>

@endsection
