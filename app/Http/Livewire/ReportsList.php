<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Livewire\Component;

class ReportsList extends Component
{
    public function render()
    {
        $reports = Report::paginate(10);

        return view('livewire.reports-list', compact('reports'));
    }
}
