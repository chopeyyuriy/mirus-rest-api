@extends('layouts.master')

@section('title') @lang('translation.Add_Product') @endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Ecommerce @endslot
        @slot('title') Add Product @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Basic Information</h4>
                        <p class="card-title-desc">Fill all information below</p>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Product Title</label>
                                    <input id="productname" required name="title" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="control-label">Sale Type</label>

                                    <select id="pr_type" onchange="updateInput()" name="sale_type" required
                                        class="select2 form-control select2-multiple" data-placeholder="Choose ...">
                                        <option value=""></option>
                                        <option value="auction">Auction</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                                </div>
                                <div class="mb-3" id="exp_c">
                                    <label class="control-label">Expiration Date</label>
                                    <input type="date" id="exp" class="form-control" name="expiration_date">
                                </div>
                                <div class="mb-3">
                                    <label class="control-label">Product Status</label>

                                    <select name="status" required class="select2 form-control select2-multiple" data-placeholder="Choose ...">
                                        <option value=""></option>
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                        <option value="sold">Sold</option>
                                        <option value="paused">Paused</option>
                                        <option value="suspended">Suspended</option>
                                        <option value="archived">Archived</option>
                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label for="price">Sale Price</label>
                                    <input id="price" required name="sale_price" type="number" class="form-control">
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Product Category</label>
                                    <select name="category_id" required class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="price">Featured Items</label>
                                    <br>
                                    <input id="price" style="margin-top: -3px;width:38px;height:38px" name="feature_item" type="checkbox" class="form-check-input">
                                </div>
                                <div class="mb-3">
                                    <label class="control-label">Seller Name</label>
                                    <input type="text" id="exp" class="form-control" name="seller_name">
                                </div>

                                <div class="mb-3">
                                    <label for="productdesc">Addiotinal Fields</label>
                                    <textarea name="long_desc" class="form-control" id="productdesc" rows="5"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Product Images</h4>
                        <div class="row mx-0">
                            <div class="fallback dropzone col-12">
                                <h4>Images <br> click to upload.</h4>
                                <label for="otherImages"><i class="display-4 text-muted bx bxs-cloud-upload"></i></label>
                                <input name="picture[]" onchange="getData(event)" type="file" id="otherImages"
                                    accept="image/*" multiple style="display: none" />
                                <br>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card-->
                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                    <button type="reset" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                </div>
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

        function updateInput() {
            if ($('#pr_type').val() == "Auction") {
                $('#exp_c').show();
            } else {
                $('#exp_c').hide();
                $('#exp').val('');
            }
        }
        $(document).ready(function() {
            updateInput();
        });

    </script>
@endsection
