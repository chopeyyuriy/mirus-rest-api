<div>
    {{-- Model --}}
    <div style="display:{{$display ?? ''}};position:fixed;top:0;left:0; background-color:rgba(0, 0, 0, 0.5);width:100%;height:100%;z-index:999999">
        <!-- Add Modal content -->
        <div class="row mx-0">
            <div class="col-6 mx-auto text-dark bg-light py-2" style="overflow-y: auto; max-height:450px; margin-top: 150px">
                @isset($content1)
                    {{$content1}}    
                @endisset
                @isset($content2)
                    {{$content2}}    
                @endisset
                @isset($content3)
                    {{$content3}}    
                @endisset
                @isset($content4)
                    {{$content4}}    
                @endisset
                
            </div>
        </div>
    </div>
</div>
