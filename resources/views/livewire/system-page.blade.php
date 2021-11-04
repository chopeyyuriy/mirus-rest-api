<div>
    <div class="row mb-2">
        <div class="col-lg-5">
            <label for="">Search</label>
            <div class="input-group">
                <input class="form-control border-end-0 border " placeholder="Search by title" type="text"
                    wire:model="search_title" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-start-0 border  ms-n3" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Filter by Last updated</label>
            <div class="input-group">
                <input type="date" wire:model="last_updated" class="form-control">
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Filter by Author and Type</label>
            <div class="input-group">
                <input type="text" placeholder="(Author/Type)" wire:model="search_author" class="form-control">
            </div>
        </div>
        <div class="col-lg-3">
            <label for="">Filter by status</label>
            <div class="input-group">
                <select name="status" id="" wire:model="search_status" class="form-control border">
                    <option value="">select status</option>
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                    <option value="archived">Archived</option>
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
                                        <th scope="col" style="width: 70px;">Title</th>
                                        <th scope="col">Author Name</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Last Updated</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $p)

                                        <tr>
                                            <td>{{ $p->title }}</td>
                                            <td>{{ $p->author }}</td>
                                            <td>{{ $p->url }}</td>
                                            <td>{{ $p->type }}</td>
                                            <td>{{ $p->updated_at }}</td>
                                            <td>{{ $p->status }}</td>
                                            <td>
                                                <ul class="list-inline font-size-20 contact-links mb-0">
                                                    <li class="list-inline-item px-2">
                                                        <a href="javascript:void()" title="Edit" wire:click="showEditDialogue({{$p->id}})"><i class="bx bx-pencil"></i></a>
                                                    </li>
                                                    <li class="list-inline-item px-2">
                                                        <a href="javascript:void()" title="Delete" wire:click="showDleteDialogue({{$p->id}})"><i class="fas fa-trash"></i></a>
                                                    </li>
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
                        <div class="float-end">
                            <button class="btn btn-success text-white" wire:click="showDialogue()">Add New Page</button>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{ $pages->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- MODELSSSSSS --}}
    <!-- The Add Modal -->
    <x-model :display="$showDialogue">
        <x-slot name='content1'>
            <button type="button" class="close btn p-0"
                style="font-size: 25px; position: absolute; right:10px; top: -3px;" wire:click="hideDialogue()"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h1>{{ $add_edit_dialogue }} Page</h1>
            <div class="form-group">
                <label for="">Enter page title</label>
                <input type="page" wire:model.defer="page.title" id="" class="form-control">
            </div>
            @error('page.page')
                <div class="px-2 text-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="">Enter page url</label>
                <input type="page" wire:model.defer="page.url" id="" class="form-control">
            </div>
            @error('page.url')
                <div class="px-2 text-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="">Author Name</label>
                <input type="page" wire:model.defer="page.author" id="" class="form-control">
            </div>
            @error('page.author')
                <div class="px-2 text-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="">Enter page type</label>
                <input type="page" wire:model.defer="page.type" id="" class="form-control">
            </div>
            @error('page.type')
                <div class="px-2 text-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="">Status</label>
                <select id="" required wire:model.defer="page.status" class="form-control">
                    <option value="">select status</option>
                    <option value="draft" {{ $page['status'] == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ $page['status'] == 'published' ? 'selected' : '' }}>Published</option>
                    <option value="archived" {{ $page['status'] == 'archived' ? 'selected' : '' }}>Archived</option>
                </select>
            </div>
            @error('page.status')
                <div class="px-2 text-danger">{{ $message }}</div>
            @enderror

            <button class=" mt-2 btn btn-info" type="button" wire:click="addRecod()">
                Save Record
            </button>
        </x-slot>
    </x-model>
    <!-- The Delete Modal showDleteDialogue-->
    <x-model :display="$showDleteDialogue">
        <x-slot name='content1'>
            <button type="button" class="close btn p-0"
                style="font-size: 25px; position: absolute; right:10px; top: -3px;" wire:click="hideDleteDialogue()"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h2>Are u sure u want to delete the page ?</h2>
            <button class=" mt-2 btn btn-dark" type="button" wire:click="hideDleteDialogue()">
                No, I am not !
            </button>
            <button class=" mt-2 btn btn-info" type="button" wire:click="delete_record()">
                Yes, I am sure !
            </button>
        </x-slot>
    </x-model>
    {{-- MODELSSSSSS --}}

</div>
{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
