<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesList extends Component
{
    use WithPagination;
    public $categories;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $category = Category::paginate(10);

        return view('livewire.categories-list', ['category' => $category]);
    }
}
