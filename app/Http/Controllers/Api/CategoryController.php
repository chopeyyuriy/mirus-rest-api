<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories(Request $request)
    {
        $request->validate([
            'page' => ['required', 'numeric'],
            'limit' => ['required', 'numeric'],
        ]);

        $limit = $request->limit;

        $catogrory = Category::paginate($limit);

        return response()->json(['categories' => $catogrory], 200);
    }
}
