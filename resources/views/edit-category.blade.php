@extends('layouts.master')

@section('title') Add Category @endsection

@section('css')
    <!-- main css -->
    <link href="{{ URL::asset('/assets/css/main.css') }}" rel="stylesheet" type="text/css"/>

    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- ckeditor5 css -->
    <link type="text/css" href="{{ URL::asset('/assets/libs/ckeditor5/sample/css/sample.css') }}" rel="stylesheet"
          media="screen"/>

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Category @endslot
        @slot('title') Add Category @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $category->title }}" required>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-2 col-12">
                                <div class="mb-3">
                                    <label for="image">Image</label>
                                    <div class="input-group">
                                        <img class="rounded-circle category_image" src="{{ $category->getImage() }}" width="150px" height="150px" alt="Image">
                                        <input type="file" style="display: none" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile02" name="image" accept="image/*" autofocus>
                                        <label class="mt-4 input-group-text upload_new_image" for="inputGroupFile02">Upload New Image</label>
                                    </div>
                                    @error('image')
                                    <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-flex flex-wrap gap-2 mb-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                    <a href="{{ route('category.index') }}" class="btn btn-secondary waves-effect waves-light">Cancel</a>
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

    <script>
        $(document).ready(function () {

            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    console.log('reader ', reader);
                    reader.onload = function (e) {
                        //$('.dz-message').replaceWith();
                        $('.category_image').attr('src', e.target.result);

                    }

                    console.log('input.files[0] ', input.files[0]);
                    reader.readAsDataURL(input.files[0]);
                }
            }



            $(document).on('change', '#inputGroupFile02', function () {
                readURL(this);
            });

        });


    </script>

    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>

    <!-- select 2 plugin -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-select2.init.js') }}"></script>
    <script>
        function getData(event) {
            var ar = '';
            event.target.files.forEach(element => {
                ar += element.name + '<br>';
            });
            ;
            event.target.nextElementSibling.nextElementSibling.innerHTML = ar;
        }

    </script>
@endsection
