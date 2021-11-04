<?php

namespace App\Http\Controllers;

use App\Models\KnowledgeBase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class KnowledgeBaseController extends Controller
{

    public function index()
    {
        return view('knowledge_bases');
    }


    public function create()
    {
        $users = User::all();

        return view('add_knowledge_base', compact('users'));
    }


    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'author_id' => 'required',
            'type' => 'required',
            'date' => 'required',
            'description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (count($validator->messages()) > 0) {
            return Redirect::to('knowledge_base')->with('error', 'Error! Knowledge Base not saves.');
        }

        $item = new KnowledgeBase();
        $item->author_id = $request->author_id;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->type = $request->type;
        $item->date = $request->date;

        if ($item->save()) {
            return Redirect::to('knowledge_base')->with('success', 'Great! Knowledge Base created successfully.');
        }

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = User::all();
        $knowledgeBase = KnowledgeBase::find($id);

        return view('edit-knowledge_base', compact('users', 'knowledgeBase'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required',
            'author_id' => 'required',
            'type' => 'required',
            'date' => 'required',
            'description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (count($validator->messages()) > 0) {
            return Redirect::to('knowledge_base')->with('error', 'Error! Knowledge Base not updated.');
        }

        $item = KnowledgeBase::find($id);
        $item->author_id = $request->author_id;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->type = $request->type;
        $item->date = $request->date;

        if ($item->update()) {
            return Redirect::to('knowledge_base')->with('success', 'Great! Knowledge Base update successfully.');
        }
    }


    public function destroy($id)
    {
        $item = KnowledgeBase::find($id);
        $item->delete();

        return Redirect::to('knowledge_base')->with('success', 'Great! Knowledge Base delete successfully.');

    }
}
