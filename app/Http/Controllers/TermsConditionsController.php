<?php

namespace App\Http\Controllers;

use App\Models\TermsConditions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TermsConditionsController extends Controller
{

    public function index()
    {
        $termsConditions = TermsConditions::first();

        return view('terms_conditions', compact('termsConditions'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $rules = [
            'description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (count($validator->messages()) > 0) {
            return \redirect(route('terms-conditions.index'))->with('success', 'Error! Terms conditions Base not saves.');
        }

        $item = TermsConditions::first();

        if ($item){
            $item->description = $request->description;
        } else {
            $item = new TermsConditions();
            $item->description = $request->description;
        }

        if ($item->save()) {
            return \redirect(route('terms-conditions.index'))->with('success', 'Great! Terms conditions saved successfully.');
        }



        if ($item->save()) {
            return Redirect::to('terms_conditions')->with('success', 'Great! Terms conditions saved successfully.');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
