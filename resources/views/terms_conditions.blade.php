@extends('layouts.master')

@section('title') Add Knowledge Base @endsection

@section('css')
    <!-- main css -->
    <link href="{{ URL::asset('/assets/css/main.css') }}" rel="stylesheet" type="text/css" />

    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- ckeditor5 css -->
    <link type="text/css" href="{{ URL::asset('/assets/libs/ckeditor5/sample/css/sample.css') }}" rel="stylesheet" media="screen" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') @endslot
        @slot('title') Terms and Conditions @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('terms-conditions.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <textarea name="description" class="form-control" id="description" rows="5">{{ $termsConditions ? $termsConditions->description : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-flex flex-wrap gap-2 mb-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                    <a href="{{ route('terms-conditions.index') }}" class="btn btn-secondary waves-effect waves-light">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')

    <!-- ckeditor5 js -->
    <script src="{{ URL::asset('/assets/libs/ckeditor5/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>

    <!-- select 2 plugin -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

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
