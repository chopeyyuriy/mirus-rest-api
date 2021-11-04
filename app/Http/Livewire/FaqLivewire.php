<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Faq;

class FaqLivewire extends Component
{
    public $del_id;
    public $showDialogue = 'none';
    public $showDleteDialogue = 'none';
    public $add_edit_dialogue;
    public $render_val;

    public function mount(){
        $this->render_val = new Faq();
    }

    public function render()
    {
        $faqs = Faq::all();
        return view('livewire.faq-livewire',['faqs'=>$faqs]);
    }
    
    public function showDialogue($id = '')
    {
        # code...
        $this->render_val = Faq::find($id);
        $this->add_edit_dialogue = 'Edit FAQ';
        $this->showDialogue = 'initial';
    }
    public function hideDialogue()
    {
        # code...
        $this->showDialogue = 'none';
    } 
    public function addRecod()
    {
        $this->showDialogue = 'none';
        # code...
    }
    public function showDleteDialogue($id = '')
    {
        $this->showDleteDialogue = 'initial';
        $this->del_id = $id;
    }
    public function hideDleteDialogue()
    {
        $this->showDleteDialogue = 'none';
    }
    public function deleteRecord()
    {
        $recod = Faq::find($this->del_id);
        $recod->delete();
        $this->del_id = null;
        $this->showDleteDialogue = 'none';
        # code...
    }
}
