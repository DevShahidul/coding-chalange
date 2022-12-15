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
        $homeData = $this->getJsonData("home.json");
        // dd($homeData);
        return view('home', compact('homeData'));
    }

    public function productView($product_sku)
    {
        $productData = $this->getJsonData("product.json");
        $productSku = $productData['contentElement']['values']['productSku'];

        if($product_sku === $productSku){
            return view('product', compact('productData'));
        }else{
            return redirect()->back();
        }

    }

    public function catalog()
    {
        $catalogData = $this->getJsonData("catalog.json");
        // dd($homeData);
        return view('product-catalog', compact('catalogData'));
    }

    public function getJsonData($fileName = 'home.json'){
        $data = json_decode(file_get_contents(public_path(). "/assets/GP_JSON/".$fileName), true);
        return $data;
    }
}
