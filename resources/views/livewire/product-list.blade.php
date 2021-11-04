<div>
    <div class="row mb-2">
        <div class="col-lg-3">
            <label for="">Search</label>
            <div class="input-group">
                <input wire:model="title_sku" class="form-control border-end-0 border " type="text"
                    id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-start-0 border  ms-n3" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Filter by category</label>
            <div class="input-group">
                <select name="" wire:model="category" id="" class="form-control border">
                    <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Filter by Sale type</label>
            <div class="input-group">
                <select name="" wire:model="sale_type" id="" class="form-control border">
                    <option value=""></option>
                    <option value="Auction">Auction</option>
                    <option value="Fixed">Fixed</option>
                </select>
            </div>
        </div>

        <div class="col-lg-3">
            <label for="">Filter by seller name</label>
            <div class="input-group">
                <input class="form-control border-end-0 border" wire:model="seller_name" type="text"
                    id="example-search-input">
            </div>
        </div>

        <div class="col-lg-3">
            <label for="">Filter by product status</label>
            <div class="input-group">
                <select name="" id="" wire:model="status" class="form-control  border">
                    <option value=""></option>
                    <option value="Draft">Draft</option>
                    <option value="Published">Published</option>
                    <option value="Sold">Sold</option>
                    <option value="Paused">Paused</option>
                    <option value="Suspended">Suspended</option>
                    <option value="Archived">Archived</option>
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
            @error('msg')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
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
                                        <th scope="col" style="width: 70px;">Product Thumbnail</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Sale Type</th>
                                        <th scope="col">Expiration Date</th>
                                        <th scope="col">Seller Name</th>
                                        <th scope="col">Product Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $p)
                                        <tr>
                                            <td>
                                                <div class="avatar-xs">
                                                     <img src="{{ isset($p->gallery[0]->image) ? $p->getPicture($p->gallery[0]->image) : URL::asset('/assets/images/users/no_image.png') }}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{ $p->title }}</a></h5>
                                            </td>
                                            <td>{{ $p->sale_type }}</td>
                                            <td>{{ date('d.m.Y', strtotime($p->expiration_date)) }}</td>
                                            <td>{{ $p->seller_name }}</td>
                                            <td>{{ $p->status }}</td>
                                            <td>
                                                <ul class="list-inline font-size-20 contact-links mb-0">
                                                    <li class="list-inline-item px-2">
                                                        <a href="{{ route('products.edit', $p->id) }}" title="Edit"><i
                                                                class="bx bx-pencil"></i></a>
                                                    </li>

                                                    <form action="{{ route('products.destroy', $p->id) }}"
                                                        method="post">
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
                            {{ $products->links() }}
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
