<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $title;
    public $sku;
    public $price;
    public $currency;
    public $description;
    public $description_short;
    public $description_medium;
    public $description_long;
    public $productInfo;
    public $productObject;
    public $productVarientObject;
    public function render()
    {
        return view('livewire.product');
    }

    public function mount($data){
        $this->productInfo = $data['contentElement']['values'];
        // dd($this->productInfo);
        $this->productObject = $this->productInfo['productObject'];
        $this->productVarientObject = $this->productInfo['productVariantObjects'][0];
        $this->title = $this->productObject['title'];
        $this->sku = $this->productInfo['productSku'];
        $this->price = $this->productVarientObject['price'];
        $this->currency = $data['metadata']['values']['currency'];
        $this->description = $this->productObject['description'];
        $this->description_medium = $this->productInfo['mediumDescription'];
        $this->description_short = $data['values']['longDescription'];
        $this->description_long = $data['values']['shortDescription'];
    } 
}
