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
    public $excerpt;
    public $description_short;
    public $description_medium;
    public $description_long;
    public $productInfo;
    public $productObject;
    public $productVarientObject;
    public $mediaCollection;
    public $breadCrumbData;
    public function render()
    {
        return view('livewire.product');
    }

    public function mount($data){
        $this->productInfo = $data['contentElement']['values'];
        $this->excerpt = $data['contentElement']['excerpt']['value'];
        $this->mediaCollection = $this->productInfo['mediaCollection'];
        $this->productObject = $this->productInfo['productObject'];
        $this->productVarientObject = $this->productInfo['productVariantObjects'][0];
        $this->title = $this->productObject['title'];
        $this->sku = $this->productInfo['productSku'];
        $this->price = $this->productInfo['googleUnitPricingMeasure'];
        $this->currency = $data['metadata']['values']['currency'];
        $this->description = $this->productObject['description'];
        $this->description_medium = $this->productInfo['mediumDescription'];
        $this->description_short = $data['values']['longDescription'];
        $this->description_long = $data['values']['shortDescription'];
        $this->breadCrumbData = [
            [
                'text' => 'condom',
                'path' => '/catalog',
            ],
            [
                'text' => $this->title,
                'path' => '/product/'.$this->sku,
            ]
        ];
    } 
}
