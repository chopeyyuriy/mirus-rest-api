<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\User;
use App\Services\ValidateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function sendReport(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'email'   => ['required', 'email'],
            'subject' => ['required'],
            'user' =>    ['required', 'numeric', 'exists:users,id'],
            'message' => ['required', 'max:2000'],
            'file'    => ['required'],
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $toUser = User::find($request->user);

        $report = new Report();
        if ($request->file){
            $imageName = time() . '_' . rand(1, 5000) . '.jpg';
            Storage::disk('avatars')->putFileAs('/', $request->file, $imageName);

            $report->path = $imageName;
        }

        $report->from_user = $user->id;
        $report->to_user = $toUser->id;
        $report->email = $request->email;
        $report->message = $request->message;

        if ($report->save()) {
            return response()->json(['message' => 'Report submitted successfully!'], 200);
        } else {
            return response()->json(['error' => 'Report not sent!'], 422);
        }

    }
}
