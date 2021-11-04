<div>
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
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div wire:loading.remove>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap table-hover">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($knowledgeBases as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->user->first_name . ' ' . $item->user->last_name }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{!! Str::limit($item->description, 150, $end='...') !!}</td>
                                        <td>{{ $item->type == 'knowledge_base' ? 'Knowledge Base' : 'Support' }}</td>
                                        <td>{{ date('Y-m-d', strtotime($item->date)) }}</td>
                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                <li class="list-inline-item px-2">
                                                    <a href="{{ route('knowledge_base.edit', $item->id) }}" title="Edit"><i class="bx bx-pencil"></i></a>
                                                </li>
                                                <form action="{{ route('knowledge_base.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <li class="list-inline-item px-2">
                                                        <button class="bg-light border-0 py-1 px-0"><i class="fas fa-user-slash"></i></button>
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
                            {{ $knowledgeBases->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Success is as dangerous as failure. --}}
</div>
