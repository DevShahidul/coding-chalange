<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeData = json_decode(file_get_contents(public_path(). "/assets/GP_JSON/home.json"), true);
        // dd($homeData);
        return view('home', compact('homeData'));
    }

    public function productView($product_sku)
    {
        $productData = json_decode(file_get_contents(public_path(). "/assets/GP_JSON/product.json"), true);
        $productSku = $productData['contentElement']['values']['productSku'];

        if($product_sku === $productSku){
            return view('product', compact('productData'));
        }else{
            return redirect()->back();
        }

    }

    public function catalog()
    {
        $catalogData = json_decode(file_get_contents(public_path(). "/assets/GP_JSON/catalog.json"), true);
        // dd($homeData);
        return view('product-catalog', compact('catalogData'));
    }
}
