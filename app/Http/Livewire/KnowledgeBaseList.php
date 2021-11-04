<?php

namespace App\Http\Livewire;

use App\Models\KnowledgeBase;
use Livewire\Component;
use Livewire\WithPagination;

class KnowledgeBaseList extends Component
{
    use WithPagination;
    public $knowledgeBasesDate;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $knowledgeBases = KnowledgeBase::with('user')
            ->paginate(10);

        return view('livewire.knowledge-base-list', ['knowledgeBases' => $knowledgeBases]);
    }
}
