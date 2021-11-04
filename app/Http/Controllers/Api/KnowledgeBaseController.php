<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KnowledgeBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KnowledgeBaseController extends Controller
{
    public function getKnowledgeBasesList(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $knowledgeBase = KnowledgeBase::paginate(5);

        return response()->json($knowledgeBase, 200);
    }

    public function getKnowledgeBaseDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'knowledge_base_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }
        $knowledgeBaseId = $request->knowledge_base_id;

        $knowledgeBase = KnowledgeBase::find($knowledgeBaseId);

        if ($knowledgeBase) {
            return response()->json($knowledgeBase, 200);
        } else {
            return response()->json(['message' => 'Knowledge Base not found!'], 422);
        }
    }
}
