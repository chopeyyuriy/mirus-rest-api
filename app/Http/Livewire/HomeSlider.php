<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Home_slider;

class HomeSlider extends Component
{
    public $del_id;
    public $view;
    public $showDialogue = 'none';
    public $showDleteDialogue = 'none';
    public $add_edit_dialogue;
    public $slide_edit;
    public $edit_input = false;


    public function mount($view = '')
    {
        $this->view = $view;
        $this->edit_input = new Home_slider();
    }

    protected $listeners = ['update_list', 'refresh_slide'];

    public function render()
    {
        $sliders = Home_slider::orderBy('order', 'asc')->get();
        if ($this->view == 'show') {
            return view('livewire.home-slider', ['sliders' => $sliders]);
        } elseif ($this->view == 'edit') {
            return view('livewire.home-slider-edit', ['sliders' => $sliders]);
        } else {
            return "<h1>Pass Valid View attribute <h1>";
        }
    }

    public function hideDialogue()
    {
        # code...
        $this->showDialogue = 'none';
    }
    public function showDialogue($id = '')
    {
        # code...
        $this->render();

        $this->edit_input = $id;
        if ($this->edit_input != '') {
            $this->slide_edit = Home_slider::find($this->edit_input);
        } else {
            $this->slide_edit = new Home_slider();
        }

        $this->add_edit_dialogue = 'Add /Edit ';
        $this->showDialogue = 'initial';
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
    public function refresh_slide()
    {
        $this->render();
        # code...
    }
    public function update_list($arr)
    {
        // Here Will Come The Sorted Array  And Here I will Update Order in Database
        foreach ($arr as $k => $v) {
            $slide = Home_slider::find($k);
            $slide->order = ($v + 1);
            $slide->save();
        }
        $this->render();
    }
    public function addRecod()
    {
        $this->showDialogue = 'none';
        # code...
    }
    public function deleteRecord()
    {
        $recod = Home_slider::find($this->del_id);
        $recod->delete();
        $this->del_id = null;
        $this->showDleteDialogue = 'none';
        # code...
    }
}
