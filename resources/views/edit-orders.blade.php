@extends('layouts.master')

@section('title') Edit Order @endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Orders @endslot
        @slot('title') Edit Order @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('orders.update', $orders->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="hidden" name="pArr" value="{{ json_encode($pArr) }}">
                                    <label for="productname">Select Product</label>
                                    <select name="product_id[]" multiple required
                                        class="select2 form-control select2-multiple" data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}"
                                                {{ in_array($product->id, $pArr) ? 'selected' : '' }}>
                                                {{ $product->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="manufacturername">Seller Name</label>
                                    {{-- <input id="manufacturername" required name="seller_name" type="text" class="form-control" value="{{ $orders->seller_name }}"> --}}
                                    <select name="seller_id" required class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $user->id == $orders->seller_id ? 'selected' : '' }}>
                                                {{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('seller_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="manufacturerbrand">Select Buyer</label>
                                    <select name="user_id" required class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ $user->id == $orders->user_id ? 'selected' : '' }}>
                                                {{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="price">($)Total</label>
                                    <input id="price" required name="total" type="text" value="{{ $orders->total }}" class="form-control">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label class="control-label">Delivery Date</label>
                                    <input type="date" name="delivery_date" required value="{{ $orders->delivery_date }}"
                                        class="form-control">
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
                                    <input type="date" name="order_date" required class="form-control"
                                        value="{{ $orders->order_date }}">
                                    @error('order_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- <div class="mb-3">
                                    <label class="control-label">Choose a Category</label>
                                    
                                    <select name="category_id" required class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $orders->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <!-- <div class="mb-3">
                                                <label class="control-label">Shipping Method</label>
                                                <input type="text" name="shippingLabel" class="form-control">
                                                {{-- <select name="shipping_id" required class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        @foreach ($shippings as $ship)
                                        <option value="{{ $ship->id }}" {{ $ship->id == $orders->shipping_id ? 'selected' : '' }}>{{ $ship->shipping_label }}</option>
                                        @endforeach
                                    </select> --}}
                                                @error('shippingLabel')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                @enderror
                                            </div> -->
                                <div class="mb-3">
                                    <label for="productdesc">Order Description</label>
                                    <textarea name="long_desc" class="form-control" id="productdesc"
                                        rows="5">{{ $orders->long_desc }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="productdesc">Discount Code</label>
                                    <input type="text" name="discount_code" class="form-control"
                                        value="{{ $orders->discount_code }}">
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
                                    <select name="status" required class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>                                        
                                        <option value="Open" {{ $orders->status == 'Open' ? 'selected' : '' }}>Open</option>                                        
                                        <option value="Close" {{ $orders->status == 'Close' ? 'selected' : '' }}>Close</option>                                        
                                        <option value="New" {{ $orders->status == 'New' ? 'selected' : '' }}>New</option>                                        
                                        <option value="Cancel" {{ $orders->status == 'Cancel' ? 'selected' : '' }}>Cancel</option>                                        
                                        <option value="Reinstate" {{ $orders->status == 'Reinstate' ? 'selected' : '' }}>Reinstate</option>                                        
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label for="metakeywords">Payment Status</label>
                                    <select name="payment_status" required class="select2 form-control select2-multiple"
                                        data-placeholder="Choose ...">
                                        <option value=""></option>
                                        <option value="Paid" {{ $orders->payment_status == 'Paid' ? 'selected' : '' }}>
                                            Paid</option>
                                        <option value="Unpaid"
                                            {{ $orders->payment_status == 'Unpaid' ? 'selected' : '' }}>Unpaid</option>
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
                                        rows="5">{{ $orders->order_notes }}</textarea>
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
                                            <input id="metatitle" name="swidth" value="{{ $s->width ?? '' }}" type="text"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="metakeywords">Product Height</label>
                                            <input id="metakeywords" name="sheight" type="text"
                                                value="{{ $s->height ?? '' }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="metakeywords">Product Weight</label>
                                            <input id="metakeywords" name="sweight" value="{{ $s->weight ?? '' }}"
                                                type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="metakeywords">Product Depth</label>
                                            <input id="metakeywords" name="sdepth" type="text"
                                                value="{{ $s->depth ?? '' }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 row  mx-0">
                                        <div class="col-3 px-0">

                                            <h2 for="metakeywords">Enable / Disable</h2>
                                        </div>
                                        <div class="col-4">
                                            <input id="metakeywords" style="width: 100px;height:25px"
                                                name="manufacturername" type="checkbox" class="form-check-input">

                                        </div>

                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="metakeywords">Local Pickup</label>
                                        <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                            <button type="reset" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                        </div>


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
