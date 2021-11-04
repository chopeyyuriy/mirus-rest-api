<?php

namespace App\Http\Livewire;
use App\Models\Page;

use Livewire\Component;

class SystemPage extends Component
{

    /* SEARCH */
    public $search_title;
    public $last_updated;
    public $search_author;
    public $search_status;

    /* Add Edit Model */

    public $del_num;
    public $page ;
    public $add_edit_dialogue ;
    public $showDialogue = 'none';
    public $showDleteDialogue = 'none';
    
    protected $rules = [
        'page.title' => 'required|string|min:3',
        'page.url' => 'required',
        'page.status' => 'required',
    ];
    protected $messages = [
        'page.title.required' => 'Title Field Is Required',
        'page.url.required' => 'Url Field Is Required',
        'page.status.required' => 'Status Field Is Required',
        // 'page.page.numeric' => 'Title Field must be a digit',
        // 'page.title.required' => 'Type Field must be a digit',
        'page.title.string' => 'Title Field must be a string',
        'page.title.min' => 'Type Field min length is 3',
    ];
    
    public function mount(){
        $this->page['title'] = '';
        $this->page['url'] = '';
        $this->page['author'] = '';
        $this->page['type'] = '';
        $this->page['status'] = '';
    }
  
    public function render()
    {
        $pages = Page::orderBy('id', 'DESC')->when($this->search_title, function ($query) {
            return 
                $query->where('title', 'like', '%' . $this->search_title . '%');
        })
        ->when($this->last_updated,function($query){
            return $query->whereDate('updated_at', '=', $this->last_updated);
        })
        ->when($this->search_author, function ($query) {
            return $query->where('author', 'like', '%' . $this->search_author . '%');
        })
        ->when($this->search_status,function($query){
            return $query->where('status', '=', $this->search_status);
        });



        $pages = $pages->paginate(10);
        return view('livewire.system-page',['pages'=>$pages]);
    }

    public function showDialogue()
    {
        # code...
        $this->page['id'] = null;
        $this->page['title'] = null;
        $this->page['url'] = null;
        $this->page['author'] = null;
        $this->page['status'] = '';
        $this->page['type'] = '';
        $this->add_edit_dialogue = 'Add';
        $this->showDialogue = 'initial';
    }
    public function showEditDialogue($id ='')
    {
        $this->page['id'] = $id;
        $page = Page::find($id);
        $this->page['title'] = $page->title;
        $this->page['url'] = $page->url;
        $this->page['author'] = $page->author;
        $this->page['type'] = $page->type;
        $this->page['status'] = $page->status;
        $this->add_edit_dialogue = 'Edit';
        $this->showDialogue = 'initial';
        # code...
    }
    public function hideDialogue()
    {
        # code...
        $this->page['id'] = null;
        $this->showDialogue = 'none';
    }
    public function addRecod(){
        $this->validate();
        if( empty($this->page['id'])){
            Page::insert(['title'=>$this->page['title'],'url'=>$this->page['url'],'type'=>$this->page['type'],'author'=>$this->page['author'],'status'=>$this->page['status']]);
        }else{
            $page = Page::where('id',$this->page['id'])->get();
            $page = $page[0];
            $page->update($this->page);
            // $page->title = $this->page['page'];
            // $page->type = $this->page['type'];
            // $page->save();
        }
        $this->showDialogue = 'none';
        $this->page['id'] = null;
        $this->page['page'] = '';
    }

    public function showDleteDialogue($id='')
    {
        $this->del_num = $id;
        $this->showDleteDialogue = 'initial';
        # code...
    }
    public function hideDleteDialogue()
    {
        $this->del_num = null;
        $this->showDleteDialogue = 'none';
        # code...
    }
    public function delete_record()
    {
        $num = Page::where('id',$this->del_num)->get();
        $num = $num[0];
        $num->delete();
        $this->del_num = null;
        $this->showDleteDialogue = 'none';
    }

}
