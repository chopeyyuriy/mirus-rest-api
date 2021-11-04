<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Redirect;
use App\Models\User;
use Livewire\WithPagination;
// use Illuminate\Support\Facades\Hash;

class UserSearch extends Component
{

    use WithPagination;
    public $user_type;
    public $active;
    public $name_email;
    public $status;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $users = User::orderBy('id', 'DESC')
            ->when($this->name_email, function ($query) {
                return $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->name_email . '%')
                        ->orWhere('display_name', 'like', '%' . $this->name_email . '%')
                        ->orWhere('email', 'like', '%' . $this->name_email . '%');
                });
            })
            ->when($this->user_type, function ($query) {
                return $query->where('user_type', $this->user_type);
            })
            ->when($this->status, function ($query) {
                return $query->where('user_status', $this->status);
            });
        // $query = $users->toSql();
        $users = $users->paginate(10);
        return view('livewire.user-search', ['users' => $users/* ,'query'=>$query */]);
    }
}
