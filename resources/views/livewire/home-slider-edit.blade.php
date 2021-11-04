<div class="row mx-0 w-100">
    <div class="card">
        <div class="card-body">
            <div class="row mx-0">
                <div class="col-12 d-flex flex-wrap px-0">
                    <h2>Home Slider</h2>
                    <button wire:click="showDialogue()" class="text-white ms-auto btn btn-success">
                        Add Slider
                    </button>
                </div>
                <div class="col-12 row mx-0 px-0 mt-3" id='ui'>
                    @foreach ($sliders as $slide)
                        <div class="col-4" data-id="{{ $slide->id }}">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h4>{{ $slide->name }}</h4>
                                    <div class="row mx-0" style="width:100% ">
                                        <img class="w-100 h-50 px-0" src="{{ asset("/assets/$slide->image") }}"
                                            alt="">

                                    </div>
                                    <div class="row mx-0">
                                        <h6 class="mt-2 px-0">
                                            Status : {{ $slide->status }}
                                        </h6>
                                        <h6 class="mt-2 px-0">
                                            Published At : {{ gmdate('d/m/y', strtotime($slide->created_at)) }}
                                        </h6>
                                        <button wire:click="showDialogue({{ $slide->id }})"
                                            class="btn btn-sm btn-info text-white">Edit</button>
                                        <button wire:click="showDleteDialogue({{ $slide->id }})"
                                            class="btn mt-1 btn-sm btn-danger text-white">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-model :display="$showDialogue">
        <x-slot name='content1'>
            {{-- CROPPER HTML START --}}
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Crop Image For Slider
                            </h5>
                            <button type="button" class="close btn p-0"
                                style="font-size: 25px; position: absolute; right:10px; top: 5px;"
                                onclick="hideCropper()" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="img-container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="preview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="hideCropper()" class="btn btn-secondary"
                                data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" onclick="cropData()"
                                id="fakecrop">Crop</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- CROPPER HTML END --}}
        </x-slot>
        <x-slot name='content2'>
            <button type="button" class="close btn p-0"
                style="font-size: 25px; position: absolute; right:10px; top: -3px;" wire:click="hideDialogue()"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h1>{{ $add_edit_dialogue }} Image</h1>
            <div class="form-group">
                <label for="">Enter Slide Name</label>
                <input type="text" id="slide_name" value="{{ $slide_edit->name ?? '' }}" class="form-control">
                @if ($edit_input)
                    <input type="hidden" id="slide_id" name="slide_edit" value="{{ $slide_edit->id ?? '' }}">
                @endif
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-8">
                        <label for="">Select Image</label>
                        <input type="file" onchange="initCrop(event)" accept="image/*" name="image" id="{{rand()}}"
                            class="form-control image">
                    </div>
                    <div class="col-4 preview px-0" style="width: 160px !important; height:89px !important">
                        @if (isset($slide_edit->image))
                            <img src="{{ asset("/assets/$slide_edit->image") }}" alt="">
                        @else
                            <img src="https://avatars0.githubusercontent.com/u/3456749" alt="">
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Target Page</label>
                <select id="slide_page" class="form-control">
                    <option value="home" @isset($slide_edit->target_page)
                            {{ $slide_edit->target_page == 'home' ? 'selected' : '' }}
                        @endisset>Home</option>
                    <option value="home1" @isset($slide_edit->target_page)
                        {{ $slide_edit->target_page == 'home1' ? 'selected' : '' }}
                    @endisset>Home1</option>
                    <option value="home2" @isset($slide_edit->target_page)
                        {{ $slide_edit->target_page == 'home2' ? 'selected' : '' }}
                    @endisset>Home2</option>
                    <option value="home3" @isset($slide_edit->target_page)
                        {{ $slide_edit->target_page == 'home3' ? 'selected' : '' }}
                    @endisset>Home3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <select id="slide_status" class="form-control">
                    <option value="published" @isset($slide_edit->status)
                        {{ $slide_edit->status == 'published' ? 'selected' : '' }}
                    @endisset>Published
                    </option>
                    <option value="draft"@isset($slide_edit->status)
                        {{ $slide_edit->status == 'draft' ? 'selected' : '' }}
                    @endisset>Draft</option>
                </select>
            </div>
            <button class=" mt-2 btn btn-info" type="button" wire:click="addRecod()" onclick="saveSlider()">
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
            <h2>Are u sure u want to delete the Image ?</h2>
            <button class=" mt-2 btn btn-dark" type="button" wire:click="hideDleteDialogue()">
                No, I am not !
            </button>
            <button class=" mt-2 btn btn-info" type="button" wire:click="deleteRecord()">
                Yes, I am sure !
            </button>
        </x-slot>
    </x-model>
</div>
