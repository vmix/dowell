<?php

namespace App\Helpers;

class MyParser {

    private static function pullOff($url) {

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $html = curl_exec($ch);
        curl_close($ch);

        return $html;
    }

    public static function parse($url) {

        $html = self::pullOff($url);
        $xml = simplexml_load_string($html);
        $products = [];
        $specifications = [];

        foreach($xml->shop->offers->offer as $offer) {
            $specifications['id'] = (string)$offer['id'];
            $specifications['available'] = (string)$offer['available'];
            $specifications['url'] = (string)$offer->url;
            $specifications['price'] = (string)$offer->price;
            $specifications['currencyId'] = (string)$offer->currencyId;
            $specifications['categoryId'] = (string)$offer->categoryId;
            $specifications['picture'] = (string)$offer->picture;
            $specifications['delivery'] = (string)$offer->delivery;
            $specifications['name'] = (string)$offer->name;
            $specifications['model'] = (string)$offer->model;
            $specifications['description'] = (string)$offer->description;
            $specifications['vendor'] = (string)$offer->vendor;
            $specifications['vendorCode'] = (string)$offer->vendorCode;
            $specifications['manufacturer_warranty'] = (string)$offer->manufacturer_warranty;
            $specifications['sales_notes'] = (string)$offer->sales_notes;
            $specifications['delivery_cost'] = (string)$offer->{'delivery-options'}->option['cost'];
            $specifications['delivery_days'] = (string)$offer->{'delivery-options'}->option['days'];

            if(isset($offer->param)) {
                $temp = [];
                foreach($offer->param as $param) {
                    $temp[] = $param['name']. ' ' . $param;
                }
                $specifications['params'] = serialize($temp);
            } else {
                $specifications['params'] = null;
            }

            $products[] = $specifications;
        }

        return $products;
    }
}