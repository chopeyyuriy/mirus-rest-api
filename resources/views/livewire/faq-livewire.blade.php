<div>
    <div class="accordion mt-5" id="accordionExample">
        @foreach ($faqs as $f)
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $f->id }}" aria-expanded="false" aria-controls="collapseOne">
                        {!! strip_tags($f->question) !!}
                    </button>
                </h2>
                <div id="collapse{{ $f->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {!! $f->answer !!}
                        <div class="row mx-0">
                            <div class="col-6 row mx-0">
                                <button onclick="initTinyMce()" class="btn btn-info text-white" type="button"
                                    wire:click="showDialogue({{ $f->id }})">Edit</button>
                            </div>
                            <div class="col-6 row mx-0">
                                <button class="btn btn-danger text-white" wire:click="showDleteDialogue({{ $f->id }})">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <x-model :display="$showDialogue">
        <x-slot name='content1'>
            <button type="button" class="close btn p-0"
                style="font-size: 25px; position: absolute; right:10px; top: -3px;" wire:click="hideDialogue()"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h1>{{ $add_edit_dialogue }}</h1>
            <form method="POST" action="{{route('updateFaq')}}">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Question</label>
                    <input type="text" name="question" class="form-control" value="{{ $render_val->question }}">
                    <input type="hidden" name="hidden_id" class="form-control" value="{{ $render_val->id }}">
                </div>
                <div class="form-group">
                    <label for="">Answer</label>
                    <textarea name="answer" id="" class="tinymce" cols="30" rows="10">{!! $render_val->answer !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="published" {{$render_val->status == 'published' ? 'selected':''}}>published</option>
                        <option value="draft" {{$render_val->status == 'draft' ? 'selected':''}}>draft</option>
                    </select>
                </div>
                <button class=" mt-2 btn btn-info" type="submit" wire:click="addRecod()">
                    Save Record
                </button>
            </form>
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
            <h2>Are u sure u want to delete the Faq ?</h2>
            <button class=" mt-2 btn btn-dark" type="button" wire:click="hideDleteDialogue()">
                No, I am not !
            </button>
            <button class=" mt-2 btn btn-info" type="button" wire:click="deleteRecord()">
                Yes, I am sure !
            </button>
        </x-slot>
    </x-model>
</div>
{{-- Care about people's approval and you will be their prisoner. --}}
