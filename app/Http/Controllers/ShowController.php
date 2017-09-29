<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product;

class ShowController extends Controller
{
    public function show(Request $request)
    {
        $products = Product::paginate(20);
        if ($request->ajax()) {
            return response()->json(view('products.show', ['products' => $products]));
        }
        return view('products.show', ['products' => $products]);
    }
}
