<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class GlobalSearchController extends Controller
{
    //

    public function index($search)
    {
        $products = Product::where('title', 'like', '%' . $search . '%')->paginate(5);
        $users = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('display_name', 'like', '%' . $search . '%')
            ->paginate(5);
        return view('global-search', ['products' => $products  , 'users' => $users]);
    }
}
