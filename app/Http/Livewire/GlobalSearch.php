<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GlobalSearch extends Component
{
    public $global_search = "";
    public function render()
    {
        return view('livewire.global-search');
    }
    public function searchBtnHit(){
        if(!empty($this->global_search)){
            return redirect()->route('GlobalSearch', ['search' => $this->global_search]);
        }
    }
}
