@extends('layouts.master')

@section('title') @lang('translation.Add_user') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Edit User @endslot
    @endcomponent

    {{-- {{dd($user_info->created)}} --}}
    <div class="row">
        <div class="col-xl-12">
            <form action="{{ route('users.update', $user_info->id) }}" method="POST" enctype="multipart/form-data"
                name="update_product">
                @csrf
                @method('PATCH')
                <div class="card">
                    <div class="mt-2">

                        <h2 class="mt-2 px-2">Administrative Controls</h2>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="type" class="form-label">User Type</label>
                                    <select name="user_type" id="" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="admin" {{ ($user_info->user_type == 'Admin' || $user_info->user_type == 'admin' ) ? 'selected' : '' }}>
                                            Admin
                                        </option>
                                        <option value="buyer" {{ $user_info->user_type == 'Buyer' || $user_info->user_type == 'buyer' ? 'selected' : '' }}>
                                            Buyer
                                        </option>
                                        <option value="seller" {{ $user_info->user_type == 'Seller' || $user_info->user_type == 'seller' ? 'selected' : '' }}>
                                            Seller
                                        </option>
                                    </select>
                                    @error('user_type')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label for="user_status" class="form-label">User Status</label>
                                    <select name="user_status" id="" class="form-control">
                                        <option value="">Select Status</option>
                                        <option value="active"
                                            {{ $user_info->user_status == 'Active' || $user_info->user_status == 'active' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="on_hold"
                                            {{ $user_info->user_status == 'On Hold' || $user_info->user_status == 'on_hold' ? 'selected' : '' }}>On Hold</option>
                                        <option value="suspended"
                                            {{ $user_info->user_status == 'Suspended' || $user_info->user_status == 'suspended' ? 'selected' : '' }}>Suspended
                                        </option>
                                        <option value="archived"
                                            {{ $user_info->user_status == 'Archived' || $user_info->user_status == 'archived' ? 'selected' : '' }}>Archived
                                        </option>
                                    </select>
                                    @error('user_status')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <h2 class="mt-2 px-2">Profile Info</h2>
                    </div>
                    <div class="card-body">
                        @php
                            $user_name = explode(' ', $user_info->name);
                        @endphp
                        <div class="row">
                            <div class="col-xl-10 col-12">
                                <div class="mb-3 row mx-0">
                                    <div class="col-4">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                            id="fname" value="{{ $user_info->first_name }}" parsley-type="fname" name="fname"
                                            placeholder="Enter First Name" autofocus required>
                                        @error('fname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="mname" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control @error('middle_name') is-invalid @enderror"
                                            id="mname" name="mname" value="{{ $user_info->middle_name }}"
                                            placeholder="Enter Middle Name(optional)" autofocus>
                                        @error('mname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                            id="lname" name="lname" value="{{ $user_info->last_name }}"
                                            placeholder="Enter Last Name" autofocus>
                                        @error('lname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="admission_date" class="form-label">Display Name</label>
                                        <input type="text" class="form-control @error('display_name') is-invalid @enderror"
                                            id="display_name" name="display_name" value="{{ $user_info->first_name . ' ' . $user_info->middle_name . ' ' . $user_info->last_name  }}"
                                            placeholder="Enter Display Name" autofocus>
                                        @error('admission_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ $user_info->email }}"
                                            placeholder="Enter Email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="userpassword" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="userpassword" name="password" placeholder="Enter password" autofocus>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- <div class="col-4">
                                                                <label for="rel_status" class="form-label">Relationship Status</label>
                                                                <select name="rel_status" id="" class="form-control ">
                                                                    <option value="">Select Type</option>
                                                                    <option value="married" {{ old('rel_status') == 'married' ? 'selected' : '' }}>Married</option>
                                                                    <option value="single" {{ old('rel_status') == 'single' ? 'selected' : '' }}>Single</option>
                                                                </select>
                                                                @error('rel_status')
                                                                                            <span class="text-danger" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                @enderror
                                                            </div> -->
                                    <div class="col-4">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob"
                                            name="dob" value="{{ $user_info->dob }}" placeholder="Enter Date Of Birth"
                                            autofocus>
                                        @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select name="gender" id="" class="form-control ">
                                            <option value="">Select Gender</option>
                                            <option value="male" {{ $user_info->gender == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female"{{ $user_info->gender == 'female' ? 'selected' : '' }}>Female</option>
                                            <option value="preferred_not_say" {{ $user_info->gender == 'preferred_not_say' ? 'selected' : '' }}>Prefferd Not Say</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="race" class="form-label">Race</label>
                                        <input type="race" class="form-control @error('race') is-invalid @enderror"
                                            id="race" name="race" value="{{ $user_info->race }}" placeholder="Enter Race"
                                            autofocus>
                                        @error('race')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <livewire:number-function :user='$user_info->id' />
                                </div>
                                <div class="row mx-0">
                                    <div class="col-12"><button type="submit"
                                            class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                        <a href="/contacts-list">
                                            <button class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-12">
                                <div class="mb-3">
                                    <label for="avatar">Avatar</label>
                                    <div class="input-group">
                                        @if ($user_info->avatar)
                                            <img class="rounded-circle" src="{{ $user_info->getAvatar() }}" width="150px"
                                                height="150px" alt="Profile Avatar">
                                        @else
                                            <img class="rounded-circle"
                                                src="{{ asset('/assets/images/users/no_image.png') }}" width="150px"
                                                height="150px" alt="Profile Avatar">
                                        @endif
                                        <input type="file" style="display: none"
                                            class="form-control @error('avatar') is-invalid @enderror" id="inputGroupFile02"
                                            name="avatar" autofocus>
                                        <label class=" mt-4 input-group-text" for="inputGroupFile02">Upload New
                                            Image</label>
                                    </div>
                                    @error('avatar')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div> <!-- end col -->
        <div class="col-12 row mx-0">
            <div class="col-sm-3 row mx-0 bg-white py-3 mb-3 shadow-lg"
                style="margin-left: -10px !important;margin-right: 10px !important">
                <div class="col-9 px-0 mx-0">
                    <h4>My Reputaion</h4>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="col-3 px-0 mx-0">
                    <div class="text-white" style="width: 50px; height:50px; border-radius: 100%;background-color: blue">
                        <i class="far fa-check-circle" style="padding: 10px;font-size: 30px"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 row mx-0 bg-white py-3 mb-3 shadow-lg"
                style="margin-left: -5px !important;margin-right: 0px !important">
                <div class="col-9 px-0 mx-0">
                    <h5 style="line-height: .8">Sales</h5>
                    <h5 style="line-height: .8; margin-bottom: 0px">$0000000</h5>
                    <a href="#" style="line-height: .8">view all ?</a>
                </div>
                <div class="col-3 px-0 mx-0">
                    <div class="text-white" style="width: 50px; height:50px; border-radius: 100%;background-color: blue">
                        <i class="fas fa-box" style="padding: 10px;font-size: 30px"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 row mx-0 bg-white py-3 mb-3 shadow-lg"
                style="margin-left: 5px !important;margin-right: -5px !important">
                <div class="col-9 px-0 mx-0">
                    <h5 style="line-height: .8">Purchases</h5>
                    <h5 style="line-height: .8; margin-bottom: 0px">$0000000</h5>
                    <a href="#" style="line-height: .8">view all ?</a>
                </div>
                <div class="col-3 px-0 mx-0">
                    <div class="text-white" style="width: 50px; height:50px; border-radius: 100%;background-color: blue">
                        <i class="fas fa-box" style="padding: 10px;font-size: 30px"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 row mx-0 bg-white py-3 mb-3 shadow-lg"
                style="margin-left: 10px !important;margin-right: -10px !important">
                <div class="col-9 px-0 mx-0">
                    <h5 style="line-height: .8">Totals</h5>
                    <h5 style="line-height: .8; margin-bottom: 0px">$0000000</h5>
                    <a href="#" style="line-height: .8">view all ?</a>
                </div>
                <div class="col-3 px-0 mx-0">
                    <div class="text-white" style="width: 50px; height:50px; border-radius: 100%;background-color: blue">
                        <i class="fas fa-box" style="padding: 10px;font-size: 30px"></i>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
@endsection
