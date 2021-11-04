<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Phone_number;

class NumberFunction extends Component
{
    public $user;
    public $Currentuser;
    public $del_num;
    public $number ;
    public $add_edit_dialogue ;
    public $showDialogue = 'none';
    public $showDleteDialogue = 'none';
    
    protected $rules = [
        'number.type' => 'required|string|min:4',
        'number.number' => 'required|numeric',
    ];
    protected $messages = [
        'number.number.required' => 'Number Field Is Required',
        'number.number.numeric' => 'Number Field must be a digit',
        'number.type.required' => 'Type Field must be a digit',
        'number.type.string' => 'Type Field must be a string',
        'number.type.min' => 'Type Field min length is 4',
    ];
    
    public function mount($user){
        $this->user = $user;
        $this->number['type']='work';
    }
    public function render()
    {
        $nums = Phone_number::where('user_id',$this->user)->get();
        return view('livewire.number-function',['nums'=>$nums]);
    }
    public function delete_record()
    {
        $num = Phone_number::where('id',$this->del_num)->get();
        $num = $num[0];
        $num->delete();
        $this->del_num = null;
        $this->showDleteDialogue = 'none';
    }
    public function addRecod(){
        $this->validate();
        if( empty($this->number['id'])){
            Phone_number::insert(['user_id'=>$this->user,'number'=>$this->number['number'],'type'=>$this->number['type']]);
        }else{
            $num = Phone_number::where('id',$this->number['id'])->get();
            $num = $num[0];
            $num->number = $this->number['number'];
            $num->type = $this->number['type'];
            $num->save();
        }
        $this->showDialogue = 'none';
        $this->number['id'] = null;
        $this->number['number'] = '';
    }
    public function hideDialogue()
    {
        # code...
        $this->number['id'] = null;
        $this->showDialogue = 'none';
    }
    public function showDialogue()
    {
        # code...
        $this->number['id'] = null;
        $this->number['number'] = null;
        $this->number['type'] = 'home';
        $this->add_edit_dialogue = 'Add';
        $this->showDialogue = 'initial';
    }
    public function showDleteDialogue($id)
    {
        $this->del_num = $id;
        $this->showDleteDialogue = 'initial';
        # code...
    }
    public function showEditDialogue($id,$num = '',$type = '')
    {
        $this->number['id'] = $id;
        $this->number['number'] = $num;
        $this->number['type'] = $type;
        $this->add_edit_dialogue = 'Edit';
        $this->showDialogue = 'initial';
        # code...
    }
    public function hideDleteDialogue()
    {
        $this->del_num = null;
        $this->showDleteDialogue = 'none';
        # code...
    }
}
