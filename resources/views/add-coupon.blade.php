@extends('layouts.master')

@section('title') Add Discount @endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Discount @endslot
        @slot('title') Add Discount @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('discount.store') }}" {{-- enctype="multipart/form-data" --}}>
                @csrf
                @include('coupons-form')
            </form>
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
    <script>
        function getData(event) {
            var ar = '';
            event.target.files.forEach(element => {
                ar += element.name + '<br>';
            });;
            event.target.nextElementSibling.nextElementSibling.innerHTML = ar;
        }

    </script>
@endsection
