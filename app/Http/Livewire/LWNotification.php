<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\NotificationOptions as NOption;

class LWNotification extends Component
{
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['updateVal' => 'updateValue'];

    /* Attributes */
    
    public function updateValue($id,$col,$val){
        $notify = NOption::find($id);
        $notify->$col = $val;
        $notify->save();
        // session()->flash('message', 'Notification Setting successfully updated.');
        return ;
    }

    public function render()
    {
        $uM = NOption::where('parent_name','User Management')->get();
        $eP = NOption::where('parent_name','eCommerce: Products')->get();
        $eO = NOption::where('parent_name','eCommerce: Orders')->get();
        $cM = NOption::where('parent_name','Content Management')->get();
        $msg = NOption::where('parent_name','Messaging')->get();

        return view('livewire.l-w-notification',['uM'=>$uM,'eP'=>$eP,'eO'=>$eO,'cM'=>$cM,'msg'=>$msg]);
    }
}
