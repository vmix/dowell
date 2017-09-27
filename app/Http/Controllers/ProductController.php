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

            Product::updateOrCreate([
                'offerId' => $products[$i]['offerId'],
                'url' => $products[$i]['url'],
                'name' => $products[$i]['name'],
                'model' => $products[$i]['model'],
                'currencyId' => $products[$i]['currencyId'],
                'price' => (double)$products[$i]['price'],
                'categoryId' => $products[$i]['categoryId'],
                'picture' => $products[$i]['picture'],
                'delivery' => $products[$i]['delivery'],
                'description' => $products[$i]['description'],
                'vendor' => $products[$i]['vendor'],
                'vendorCode' => $products[$i]['vendorCode'],
                'manufacturer_warranty' => $products[$i]['manufacturer_warranty'],
                'sales_notes' => $products[$i]['sales_notes'],
                'params' => $products[$i]['params'],
                'delivery_cost' => (int)$products[$i]['delivery_cost'],
                'delivery_days' => (int)$products[$i]['delivery_days'],
                'available' => $products[$i]['available']

            ]);

        }

        return redirect()->route('view');

    }

    public function view()
    {
        $products = Product::paginate(20);

        return view('products.view', ['products' => $products]);
    }
}
