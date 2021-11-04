<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                {{-- <div class="mb-3">
                    <label for="productname">Select Product</label>
                    <select name="product_ids[]" multiple class="select2 form-control select2-multiple"
                        data-placeholder="Choose ...">
                        <option value=""></option>
                        @php
                            $arr = old('product_ids', json_decode($dis->products));
                            if (!is_array($arr)) {
                                $arr = [];
                            }
                        @endphp
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" {{ in_array($product->id, $arr) ? 'selected' : '' }}>
                                {{ $product->title }}</option>
                        @endforeach
                    </select>
                    @error('product_ids')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> --}}
                <div class="mb-3">
                    <label class="control-label">Discount Code</label>
                    <input type="text" name="discount_code" value="{{ old('discount_code', $dis->discount_code) }}"
                        class="form-control">
                    @error('discount_code')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="control-label">Start Date</label>
                    <input type="date" name="start_date" value="{{ old('start_date', $dis->start_date) }}"
                        class="form-control">
                    @error('start_date')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="control-label">Restrictions</label>
                    <div class="form-inline">
                        <input style="margin-top: -3px;width:38px;height:38px" name="restriction" type="checkbox"
                            class="form-check-input"
                            {{ old('restriction', $dis->restriction) == 'on' ? 'checked' : '' }}>
                        <span class="">&nbsp; Limit One Per Person</span>
                    </div>
                    @error('restriction')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="control-label">Minimum Purchase ($)</label>
                    <input type="text" name="min_purchase" value="{{ old('min_purchase', $dis->min_purchase) }}"
                        class="form-control">
                    @error('min_purchase')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label class="control-label">Discount Amount</label>
                    <input type="text" name="discount_amount"
                        value="{{ old('discount_amount', $dis->discount_amount) }}" class="form-control">
                    @error('discount_amount')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="control-label">End Date</label>
                    <input type="date" name="end_date" value="{{ old('end_date', $dis->end_date) }}"
                        class="form-control">
                    @error('end_date')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="control-label">Categories</label>
                    <select name="categories[]" multiple class="select2 form-control select2-multiple"
                        data-placeholder="Choose ...">
                        <option value=""></option>
                        @php
                            $arr = old('categories', json_decode($dis->categories));
                            if (!is_array($arr)) {
                                $arr = [];
                            }
                        @endphp
                        <option value="all" {{(in_array('all', $arr)) ? 'selected':''}} >All</option>

                        @foreach ($cat as $c)
                            <option value="{{ $c->id }}" {{ in_array($c->id, $arr) ? 'selected' : '' }}>
                                {{ $c->name }}</option>
                        @endforeach
                    </select>
                    @error('categories')
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
                <div class="mb-3">
                    <label for="metakeywords">Coupon Status</label>
                    <select name="active" class="select2 form-control select2-multiple" data-placeholder="Choose ...">
                        <option value=""></option>
                        <option value="1" {{ old('active', $dis->active) === 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('active', $dis->active) === 0 ? 'selected' : '' }}>Suspended
                        </option>
                    </select>
                    @error('active')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="metadescription">Discount Type</label>
                    <select name="discount_type" class="form-control">
                        <option value=""></option>
                        <option value="fixed"
                            {{ old('discount_type', $dis->discount_type) == 'fixed' ? 'selected' : '' }}>Fixed
                        </option>
                        <option value="percentage"
                            {{ old('discount_type', $dis->discount_type) == 'percentage' ? 'selected' : '' }}>
                            Percentage
                        </option>
                    </select>
                    @error('discount_type')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap gap-2">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
            <button type="reset" class="btn btn-secondary waves-effect waves-light">Cancel</button>
        </div>
    </div>
</div>
