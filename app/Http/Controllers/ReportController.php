<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index()
    {
        return view('reports');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $report = Report::find($id);

        return view('show-report', compact('report'));
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
        $item = Report::find($id);
        $item->delete();

        return redirect()->route('report.index')->with('success', 'Great! Report delete successfully.');
    }
}
