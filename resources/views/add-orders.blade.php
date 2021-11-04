@extends('layouts.master')

@section('title') Add Order @endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Orders @endslot
        @slot('title') Add Order @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Select Product</label>
                                    <select name="product_id[]" multiple class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="manufacturername">Select Seller</label>
                                    {{-- <input id="manufacturername" name="seller_name" type="text" class="form-control"> --}}
                                    <select name="seller_id" class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('seller_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="manufacturerbrand">Select Buyer</label>
                                    <select name="user_id" class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('buyer_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="price">($)Total</label>
                                    <input id="price"  name="total" type="text" class="form-control">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label class="control-label">Delivery Date</label>
                                    <input type="date" name="delivery_date" class="form-control">
                                    @error('delivery_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Order Date</label>
                                    <input type="date" name="order_date" class="form-control">
                                    @error('Order_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- <div class="mb-3">
                                    <label class="control-label">Choose a Category</label>                                    
                                    <select name="category_id"  class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <!--<div class="mb-3">
                                    <label class="control-label">Shipping Method</label>
                                   {{--  <select name="shipping_id" class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($shippings as $ship)
                                            <option value="{{ $ship->id }}">{{ $ship->shipping_label }}</option>
                                        @endforeach
                                    </select> --}}
                                    <input type="text" name="shippingLabel" class="form-control">
                                    @error('shipping_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> -->
                                <div class="mb-3">
                                    <label for="productdesc">Order Description</label>
                                    <textarea name="long_desc" class="form-control" id="productdesc" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="productdesc">Discount Code</label>
                                    <input type="text" name="discount_code" class="form-control"
                                        value="{{ old('discount_code') }}">
                                    @error('msg')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                {{-- <div class="mb-3">
                                    <label for="orderstatus">Order Status</label>
                                    <select name="status" class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        <option value="Open">Open</option>
                                        <option value="Close">Close</option>
                                        <option value="New">New</option>
                                        <option value="Cancel">Cancel</option>
                                        <option value="Reinstate">Reinstate</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label for="metakeywords">Payment Status</label>
                                    <select name="payment_status" class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                    </select>
                                    @error('payment_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="metadescription">Order Internal Notes(Staff Only)</label>
                                    <textarea name="order_notes" class="form-control" id="metadescription"
                                        rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Shipping Information</h4>
                        <p class="card-title-desc">Fill all information below</p>

                        {{-- <form> --}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="metatitle">Product Width</label>
                                    <input id="metatitle" name="swidth" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="metakeywords">Product Height</label>
                                    <input id="metakeywords" name="sheight" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="metakeywords">Product Weight</label>
                                    <input id="metakeywords" name="sweight" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="metakeywords">Product Depth</label>
                                    <input id="metakeywords" name="sdepth" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 row  mx-0">
                                <div class="col-3 px-0">

                                    <h2 for="metakeywords">Enable / Disable</h2>
                                </div>
                                <div class="col-4">
                                    <input id="metakeywords" style="width: 100px;height:25px" name="manufacturername" type="checkbox" class="form-check-input">

                                </div>

                            </div>
                            <div class="col-6 mb-3">
                                <label for="metakeywords">Local Pickup</label>
                                <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                            <button type="reset" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                        </div>
                        {{-- </form> --}}

                    </div>
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

    </script>
@endsection
