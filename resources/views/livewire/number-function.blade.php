<div class="col-12 row px-0 mx-0 pb-2">
    @foreach ($nums as $num)
        <div class="row mx-0 px-0 col-9">
            <div class="col-4 pe-0 me-n3">
                <label for="">Phone Number</label>
                <input type="number" disabled value="{{ $num->number }}" placeholder="Enter Number"
                    class="form-control">
            </div>
            <div class="col-4 ms-3">
                <label for="">Type</label>
                <input type="text" value="{{ $num->type }}" class="form-control" disabled>
            </div>
            <div class="col-4 pt-1 ">
                <button class="mt-4 btn btn-danger" wire:click="showDleteDialogue({{ $num->id }})"
                    type="button">DELETE
                </button>
                <button class="mt-4 btn ms-3 btn-dark text-white"
                    wire:click="showEditDialogue({{ $num->id }},{{ $num->number }},'{{ $num->type }}')"
                    type="button">Edit
                </button>
            </div>
        </div>
    @endforeach
    <div class="col-3 pt-1">
        <button type="button" class="mt-4 btn btn-success text-white" wire:click="showDialogue()">Add
            New Number</button>
    </div>
    <!-- The Add Modal -->
    <x-model :display="$showDialogue">
        <x-slot name='content1'>
            <button type="button" class="close btn p-0"
                style="font-size: 25px; position: absolute; right:10px; top: -3px;" wire:click="hideDialogue()"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h1>{{ $add_edit_dialogue }} Number</h1>
            <div class="form-group">
                <label for="">Enter Number</label>
                <input type="number" wire:model.defer="number.number" id="" class="form-control">
            </div>
            @error('number.number')
                <div class="px-2 text-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="">Type</label>
                <select id="" required wire:model.defer="number.type" class="form-control">
                    <option value="home" {{ $number['type'] == 'home' ? 'selected' : '' }}>Home</option>
                    <option value="work" {{ $number['type'] == 'work' ? 'selected' : '' }}>Work</option>
                </select>
            </div>
            @error('number.type')
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
            <h2>Are u sure u want to delete the number ?</h2>
            <button class=" mt-2 btn btn-dark" type="button" wire:click="hideDleteDialogue()">
                No, I am not !
            </button>
            <button class=" mt-2 btn btn-info" type="button" wire:click="delete_record()">
                Yes, I am sure !
            </button>
        </x-slot>
    </x-model>
</div>
{{-- Nothing in the world is as soft and yielding as water. --}}
