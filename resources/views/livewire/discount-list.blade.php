<div>
    {{-- <div class="row mb-2">
        <div class="col-lg-3">
            <label for="">Search by id</label>
            <div class="input-group">
                <input wire:model="oid_productname" class="form-control border-end-0 border " type="number"
                    id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-start-0 border  ms-n3" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Seller Name</label>
            <div class="input-group">
                <input wire:model="seller_name" class="form-control border-end-0 border " type="text"
                    id="example-search-input">
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Buyer Name</label>
            <div class="input-group">
                <input wire:model="buyer_name" class="form-control border-end-0 border " type="text"
                    id="example-search-input">
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Delivery Date</label>
            <div class="input-group">
                <input type="date" wire:model="delivery_date" class="form-control border-end-0 border"
                    id="example-search-input">
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Order Date</label>
            <div class="input-group">
                <input wire:model="order_date" class="form-control border-end-0 border " type="date"
                    id="example-search-input">
            </div>
        </div>

        <div class="col-lg-3">
            <label for="">Filter by order payment status</label>
            <div class="input-group">
                <select name="" id="" wire:model="status" class="form-control  border">
                    <option value=""></option>
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
                </select>
                <span class='caret caret-right'></span>
            </div>
        </div>
    </div> --}}


    <div class="row justify-content-center">
        <div wire:loading style="width: 110px">
            <div class="spinner-grow text-primary" style="width: 8rem;height:8rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div wire:loading.remove>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Discount Code</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Expiry Date</th>
                                        <th scope="col">Restriction</th>
                                        <th scope="col">Minimum Purchase</th>
                                        {{-- <th scope="col">Product Ids</th> --}}
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($discounts as $d)
                                        <tr>
                                            <td>{{ $d->discount_code }}</td>
                                            <td>{{ $d->discount_type }}</td>
                                            {{-- <td>{{ $d->active == 1 ? 'Active':"Suspendid" }}</td> --}}
                                            <td>{{ $d->discount_amount }}</td>
                                            <td>{{ gmdate('d/m/y', strtotime($d->end_date)) }}</td>
                                            <td>{{ $d->restriction == "on" ? "limit One Per Person" :"No Limit" }}</td>
                                            <td>{{ $d->min_purchase }}</td>
                                            {{-- <td>{{ $d->products }}</td> --}}
                                            <td>
                                                <ul class="list-inline font-size-20 contact-links mb-0">
                                                    <li class="list-inline-item px-2">
                                                        <a href="{{route('discount.edit',$d->id)}}" title="Edit"><i
                                                                class="bx bx-pencil"></i></a>
                                                    </li>

                                                    <form action="{{ route('discount.delete', $d->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <li class="list-inline-item px-2">
                                                            <button class="bg-light border-0 py-1 px-0"><i
                                                                    class="fas fa-user-slash"></i></button>
                                                        </li>
                                                    </form>

                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- {{ $discounts->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
