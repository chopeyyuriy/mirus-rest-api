@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Recover_Password')
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary"> Reset Password</h5>
                                            <p>Re-Password with Skote.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <a href="index">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('/assets/images/logo-light.svg') }}" alt=""
                                                    class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <div class="p-2">
                                    <div class="alert alert-success text-center mb-4" role="alert">
                                        Enter Your Password to Change
                                    </div>
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="form-horizontal" action="{{ route('password.update') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ $request->email }}" id="useremail" placeholder="Enter email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                id="useremail" placeholder="Enter password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation"
                                               id="useremail" placeholder="Enter email">
                                        </div>

                                        <div class="text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                                type="submit">Reset</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p>Remember It ? <a href="login" class="fw-medium text-primary"> Sign In here</a> </p>
                            <p>© <script>
                                    document.write(new Date().getFullYear())

                                </script> Mirus Market. Web Application <i class="mdi mdi-heart text-danger"></i> by
                                FreshinUp </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection
