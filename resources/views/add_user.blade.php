@extends('layouts.master')

@section('title') @lang('translation.Add_user') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Add User @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <form method="POST" class="form-horizontal" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="mt-2">

                        <h2 class="mt-2 px-2">Administrative Controls</h2>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="type" class="form-label">User Type</label>
                                    <select name="user_type" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="admin">Admin</option>
                                        <option selected value="buyer">Buyer</option>
                                        <option value="seller">Seller</option>
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
                                        <option selected value="active">Active</option>
                                        <option value="on_hold">On Hold</option>
                                        <option value="suspended">Suspended</option>
                                        <option value="archived">Archived</option>
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

                        <div class="row">
                            <div class="col-xl-10 col-12">
                                <div class="mb-3 row mx-0">
                                    <div class="col-4">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" class="form-control @error('fname') is-invalid @enderror"
                                            id="fname" value="{{ old('fname') }}" parsley-type="fname" name="fname"
                                            placeholder="Enter First Name" autofocus required>
                                        @error('fname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="mname" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control @error('mname') is-invalid @enderror"
                                            id="mname" name="mname" value="{{ old('mname') }}"
                                            placeholder="Enter Middle Name(optional)" autofocus>
                                        @error('mname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control @error('lname') is-invalid @enderror"
                                            id="lname" name="lname" value="{{ old('lname') }}"
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
                                            id="display_name" name="display_name" value="{{ old('display_name') }}" placeholder="Enter Display Name"
                                            autofocus>
                                        @error('admission_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email"
                                            autofocus>
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
                                            name="dob" value="{{ old('dob') }}" placeholder="Enter Date Of Birth"
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
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="preferred_not_say">Prefferd Not Say</option>
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
                                            id="race" name="race" value="{{ old('race') }}" placeholder="Enter Race"
                                            autofocus>
                                        @error('race')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 row px-0 mx-0 pb-2">
                                    <div class="row mx-0 px-0 col-9">
                                        <div class="col-5 pe-0 me-n3">
                                            <label for="">Phone Number</label>
                                            <input type="number" name="num[]" placeholder="Enter Number"
                                                class="form-control" id="">
                                        </div>
                                        <div class="col-4 ms-3">
                                            <label for="">Type</label>
                                            <select name="num_type[]" id="" class="form-control">
                                                <option value="work">Work</option>
                                                <option value="home">Home</option>
                                            </select>
                                        </div>
                                        <div class="col-3 pt-1 ">
                                            <button class="mt-4 btn btn-secondary" onclick="deleteCurrentRow(event)"
                                                type="button">DELETE
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-3 pt-1">
                                        <button type="button" class="mt-4 btn btn-success text-white"
                                            onclick="addNewNumField(event)">Add
                                            New Number</button>
                                    </div>
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
                                        <img class="rounded-circle" src="{{ asset('/assets/images/users/no_image.png') }}" width="150px" height="150px" alt="Profile Avatar">
                                        <input type="file" style="display: none"
                                            class="form-control @error('avatar') is-invalid @enderror" id="inputGroupFile02" name="avatar" autofocus>
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
        </div> <!-- end col -->
        </form>

    </div> <!-- end row -->

@endsection
@section('script')
    <script>
        function addNewNumField(event) {
            var html = `
                        <div class="row mx-0 px-0 col-9">
                            <div class="col-5 pe-0 me-n3">
                                <label for="">Phone Number</label>
                                <input type="number" name="num[]" placeholder="Enter Number"
                                    class="form-control" id="">
                            </div>
                            <div class="col-4 ms-3">
                                <label for="">Type</label>
                                <select name="num_type[]" id="" class="form-control">
                                    <option value="work">Work</option>
                                    <option value="home">Home</option>
                                </select>
                            </div>
                            <div class="col-3 pt-1 ">
                                <button class="mt-4 btn btn-secondary" onclick="deleteCurrentRow(event)" type="button">DELETE </button>
                            </div>
                        </div>
                    `;

            $(event.target).parent().parent().prepend(html);
        }

        function deleteCurrentRow(event) {
            console.log($(event.target).parent().parent().remove())
        }

    </script>

    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
@endsection
