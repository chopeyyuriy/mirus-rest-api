<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function index()
    {
        return view('categories');
    }


    public function create()
    {
        return view('add_category');
    }


    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'image' => 'required|max:5000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (count($validator->messages()) > 0) {
            return Redirect::to('category')->with('error', 'Error! Category not save.');
        }

        $category = new Category();
        $category->title = $request->title;
        if ($request->image) {
            $category->image = Category::saveImage($request->image);
        }
        if ($category->save()) {
            return Redirect::to('category')->with('success', 'Great! Category created successfully.');
        }

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);

        return view('edit-category', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required',
            'image' => 'max:5000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (count($validator->messages()) > 0) {
            return redirect()->route('category.index')->with('error', 'Error! Category not updated.');
        }

        $category = Category::find($id);
        $category->title = $request->title;
        if ($request->image) {
            $category->image = Category::saveImage($request->image);
        }

        if ($category->update()) {
            return redirect()->route('category.index')->with('success', 'Great! Category update successfully.');
        }
    }


    public function destroy($id)
    {
        $item = Category::find($id);
        Storage::disk('category')->delete($item->image);
        $item->delete();

        return redirect()->route('category.index')->with('success', 'Great! Category delete successfully.');
    }
}
