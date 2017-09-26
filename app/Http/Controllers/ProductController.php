<?php

namespace App\Http\Controllers;

use App\Helpers\MyParser;
use App\Product;



class ProductController extends Controller
{
    public function parser()
    {
        return view('products.parser');
    }

    public function store()
    {

        $file = request()->file;
        $products = MyParser::parse($file);

        $size = count($products);
        for ($i = 0; $i < $size; $i++) {

            $product = new Product;

            $product->offerId = $products[$i]['offerId'];
            $product->url = $products[$i]['url'];
            $product->name = $products[$i]['name'];
            $product->model = $products[$i]['model'];
            $product->currencyId = $products[$i]['currencyId'];
            $product->price = (double)$products[$i]['price'];
            $product->categoryId = $products[$i]['categoryId'];
            $product->picture = $products[$i]['picture'];
            $product->delivery = $products[$i]['delivery'];
            $product->description = $products[$i]['description'];
            $product->vendor = $products[$i]['vendor'];
            $product->vendorCode = $products[$i]['vendorCode'];
            $product->manufacturer_warranty = $products[$i]['manufacturer_warranty'] == true ? 1 : 0;

            $product->sales_notes = $products[$i]['sales_notes'];
            $product->params = $products[$i]['params'];
            $product->delivery_cost = (int)$products[$i]['delivery_cost'];
            $product->delivery_days = (int)$products[$i]['delivery_days'];
            $product->available = $products[$i]['available'] == true ? 1 : 0;

            $product->save();
        }

        return redirect()->route('view');

    }

    public function view()
    {
        $products = Product::paginate(20);

        return view('products.view', ['products' => $products]);
    }
}
