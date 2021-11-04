<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home_slider;

class SliderController extends Controller
{
    //
    public function saveSlider(Request $request)
    {
        if (isset($request->edit_id) && !empty($request->edit_id)) {
            $request->validate([
                'name' => 'required',
                'page' => 'required',
                'status' => 'required',
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'image' => 'required',
                'page' => 'required',
                'status' => 'required',
            ]);
        }
        if ($request->image) {
            $folderPath = public_path('assets/');
            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            global $imageName;
            $imageName = uniqid() . '.png';

            $imageFullPath = $folderPath . $imageName;

            file_put_contents($imageFullPath, $image_base64);
        }
        $user_id = auth()->user()->id;
        $name = $request->name;
        $page = $request->page;
        $status = $request->status;
        if (isset($request->edit_id) && !empty($request->edit_id)) {
            // Update
            $slide = Home_slider::find($request->edit_id);
            $slide->name = $name;
            $slide->target_page = $page;
            $slide->status = $status;
            if (isset($imageName)) {
                $slide->image = $imageName;
            }
            $slide->save();
        } else {
            //Insert
            $order = 9999;
            $saveRecod = Home_slider::create([
                'user_id' => $user_id,
                'image' => $imageName,
                'name' => $name,
                'order' => $order,
                'status' => $status,
                'target_page' => $page
            ]);
        }
        $saveFile = new Home_slider;


        return response()->json(['success' => 'Crop Image Uploaded Successfully']);
        # code...
    }
}
