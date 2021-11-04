@extends('layouts.master')

@section('title') Notification @endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/libs/toastr/toastr.min.css') }}">
    <style>
        .toast-success{
            background-color: green !important;
        }
    </style>
    @endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Notifications @endslot
        @slot('title') Notifications @endslot
    @endcomponent



    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <livewire:l-w-notification />
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('script')
    <script src="{{ URL::asset('/assets/libs/toastr/toastr.min.js') }}"></script>

    <script>
        function saveData(event) {
            var id = $(event.target).data('id');
            var col = $(event.target).data('col');
            var val = $(event.target).val();
            if (col == 'status') {
                val = event.target.checked;
            }
            Livewire.emit('updateVal', id, col, val)
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success('Setting Updated Successfully');
        }

    </script>
@endsection
