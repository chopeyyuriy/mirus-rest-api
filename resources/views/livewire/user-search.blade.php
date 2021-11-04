<div>
    <div class="row mb-2">
        <div class="col-lg-5">
            <label for="">Search</label>
            <div class="input-group">
                <input class="form-control border-end-0 border " placeholder="(First / Last or Display Name) and email"
                    type="text" wire:model="name_email" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-start-0 border  ms-n3" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Filter by user type</label>
            <div class="input-group">
                <select name="user_type" id="" class="form-control border" wire:model="user_type">
                    <option value="">Select Type</option>
                    <option value="Admin">Admin</option>
                    <option value="Buyer">Buyer</option>
                    <option value="Seller">Seller</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Filter by status</label>
            <div class="input-group">
                <select name="user_status" id="" wire:model="status" class="form-control border">
                    <option value="">select Status</option>
                    <option value="Active">Active</option>
                    <option value="On Hold">On Hold</option>
                    <option value="Suspended">Suspended</option>
                    <option value="Archived">Archived</option>
                </select>
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
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                
                    <div class="table-responsive">
                    <div wire:loading.remove>
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
                                                    <img id="original" src="{{ $user->getAvatar() }}" height="50" width="50">
                                                @endif
                                            </div>
                                        </td>
                                        <td><h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{ $user->first_name }}</a></h5></td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->user_status }}</td>
                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                <li class="list-inline-item px-2">
                                                    <a href="{{ route('users.edit', $user->id) }}" title="Edit"><i class="bx bx-pencil"></i></a>
                                                </li>
                                                @if (!$user->hasRole('admin'))                                                    
                                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <li class="list-inline-item px-2">
                                                        <button class="bg-light border-0 py-1 px-0"><i
                                                                class="fas fa-user-slash"></i></button>
                                                    </li>
                                                </form>
                                                @endif


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
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
