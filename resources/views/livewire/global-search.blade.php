<div>
{{$global_search}}
    <input type="text" class="form-control" wire:model.defer="global_search" placeholder="@lang('translation.Search')">
    <span class="bx bx-search-alt" wire:click="searchBtnHit"></span>

</div>
{{-- The whole world belongs to you. --}}
