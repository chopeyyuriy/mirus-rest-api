<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    //
    public function saveFaq(Request $request)
    {
        # code...
        $request->validate([
            'question'=>'required',
            'answer'=>'required',
            'status'=>'required'
        ]);
        $faq = Faq::create([
            'question'=>$request->question,
            'answer'=>$request->answer,
            'status'=>$request->status,
        ]);
        return redirect(route('getfaq'));
    }
    public function updateFaq(Request $request)
    {
        # code...
        $request->validate([
            'question'=>'required',
            'answer'=>'required',
            'status'=>'required'
        ]);
        $faq = Faq::find($request->hidden_id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->status = $request->status;
        $faq->save();
        return redirect(route('getfaq'));
    }
    public function getFaq()
    {
        # code...
        // $faqs = Faq::all();
        return view('faqs-editor'/* ,['faqs'=>$faqs] */);
    }
}
