<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;


class DelProductImages extends Component
{
    public $pid;
    public $product;
    public $showDleteDialogue = 'none';
    public $del_img;

    public function mount($id)
    {
        $this->id = $id;
        $this->product = Product::find($this->id);

    }

    public function render()
    {
        $product = Product::with('gallery')->find($this->id);

        return view('livewire.del-product-images', ['p' => $product]);
    }

    function show_del_image($img)
    {
        $this->showDleteDialogue = 'initial';
        $this->del_img = $img;
    }

    public function del_image()
    {
        $imgs = json_decode($this->product->image);
        $imgs = (array)$imgs;
        unset($imgs[$this->del_img]);
        $this->product->image = json_encode($imgs);
        $this->product->save();
        $this->del_img = null;
        $this->showDleteDialogue = 'none';
    }

    public function hideDleteDialogue()
    {
        $this->showDleteDialogue = 'none';
        $this->del_img = null;
    }
}
