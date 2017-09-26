<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Helpers\MyParser;

class ProductController extends Controller
{
    public function show()
    {
        return view('products.show');
    }

    public function view(Request $request)
    {
        $file = request()->file;
        $products = MyParser::parse($file);

        $product = new Product();



        dd($products);
        $product->save();


//        return view('products.view', ['products' => $products]);
    }
}
