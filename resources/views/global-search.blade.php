@extends('layouts.master')

@section('title') Users & Products @endsection

@section('content')

    @component('components.breadcrumb')
        {{-- @slot('add') Add User @endslot --}}
        @slot('li_1') Contacts @endslot
        @slot('title') Users & Product List @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
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
                                                @if (!$p->f_img)
                                                    <img src="{{ URL::asset('/assets/images/product/img-3.png') }}" alt=""
                                                        class="img-fluid mx-auto d-block">
                                                @else
                                                    <img src="{{ URL::asset($p->f_img) }}" alt=""
                                                        class="img-fluid mx-auto d-block">
                                                @endif

                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="#"
                                                    class="text-dark">{{ $p->title }}</a></h5>
                                        </td>
                                        <td>
                                            {{ $p->sale_type }}
                                        </td>
                                        <td>{{ $p->expiration_date }}</td>
                                        <td>{{ $p->seller_name }}</td>

                                        <td>
                                            {{ $p->status }}
                                        </td>
                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                <li class="list-inline-item px-2">
                                                    <a href="{{ route('products.edit', $p->id) }}" title="Edit"><i
                                                            class="bx bx-pencil"></i></a>
                                                </li>

                                                <form action="{{ route('products.destroy', $p->id) }}" method="post">
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
                    <div class="row">
                        <div class="col-lg-12">
                            @if ($products->total() > 5)
                                <a href="{{route('products.index')}}" class="btn text-white btn-info">SEE MORE PRODUCTS</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">Avatar</th>
                                    <th scope="col">Display Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)

                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                @if ($user->avatar)
                                                    <img id="original" src="{{ url($user->avatar) }}" height="50"
                                                        width="50">
                                                @endif

                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="#"
                                                    class="text-dark">{{ $user->display_name }}</a></h5>
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            {{ $user->user_status }}
                                        </td>
                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                <li class="list-inline-item px-2">
                                                    <a href="{{ route('users.edit', $user->id) }}" title="Edit"><i
                                                            class="bx bx-pencil"></i></a>
                                                </li>

                                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
                    <div class="row">
                        <div class="col-lg-12">
                            @if ($users->total() > 5)
                                <a href="{{route('users.index')}}" class="btn text-white btn-info">SEE MORE USERS</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
