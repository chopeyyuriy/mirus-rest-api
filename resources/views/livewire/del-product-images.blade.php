<div class="row">
    <div class="col-lg-12">
        <h3>Images</h3>
        <div class="row">
            @isset($p->gallery)
                @foreach ($p->gallery as $key => $item)
                    <div class="col-4 my-1">
                        <img src="{{ $p->getPicture($item->image) }}" height="100" width="100" />
                        <br>
                        <button type="button" wire:click='show_del_image({{$key}})' class="btn btn-danger mt-1 ms-3">
                            <i style="font-size: 30px" class="far fa-window-close"></i>
                        </button>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
    <!-- The Delete Modal -->
    <div
        style="display:{{ $showDleteDialogue }};position:fixed;top:0;left:0; background-color:rgba(0, 0, 0, 0.5);width:100%;height:100%;z-index:999999">
        <!-- Delete Modal content -->
        <div class="row mx-0">
            <div class="col-6 mx-auto text-dark bg-light py-2" style="margin-top: 200px">
                <button type="button" class="close btn p-0"
                    style="font-size: 25px; position: absolute; right:10px; top: -3px;" wire:click="hideDleteDialogue()"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2>Are u sure u want to delete the Image ?</h2>
                <button class=" mt-2 btn btn-dark" type="button" wire:click="hideDleteDialogue()">
                    No, I am not !
                </button>
                <button class=" mt-2 btn btn-info" type="button" wire:click="del_image()">
                    Yes, I am sure !
                </button>
            </div>
        </div>
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
