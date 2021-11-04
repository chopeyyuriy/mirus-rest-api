<div>
    <div class="row mb-2">
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
        {{-- <div class="col-lg-3">
            <label for="">Filter by category</label>
            <div class="input-group">
                <select name="" wire:model="category" id="" class="form-control border">
                    <option value=""></option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}
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
    </div>


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
                                        <th scope="col">Order ID</th>
                                        {{-- <th scope="col">Product Name</th> --}}
                                        <th scope="col">Seller Name</th>
                                        <th scope="col">Buyer Name</th>
                                        {{-- <th scope="col">Category</th> --}}
                                        <th scope="col">Order Date</th>
                                        <th scope="col">Delivery Date</th>
                                        <th scope="col">Total(Inc Shipping and taxes)</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $o)
                                        <tr>
                                            <td>{{ $o->id }}</td>
                                            {{-- <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$o->title}}</a></h5></td> --}}
                                            <td>{{ $o->seller_name }}</td>
                                            <td>{{ $o->buyer_name }}</td>
                                            {{-- <td>{{$o->category_name}}</td> --}}
                                            <td>{{ $o->order_date }}</td>
                                            <td>{{ $o->delivery_date }}</td>
                                            <td>{{ $o->total }}</td>
                                            <td>
                                                <ul class="list-inline font-size-20 contact-links mb-0">
                                                    <li class="list-inline-item px-2">
                                                        <a href="{{ route('orders.edit', $o->id) }}" title="Edit"><i
                                                                class="bx bx-pencil"></i></a>
                                                    </li>

                                                    <form action="{{ route('orders.destroy', $o->id) }}" method="post">
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
                            {{ $orders->links() }}
                            {{-- <ul class="pagination pagination-rounded justify-content-center mt-4">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Success is as dangerous as failure. --}}
</div>
