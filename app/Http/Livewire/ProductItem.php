<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductItem extends Component
{
    public $productInfo;
    public $link;
    public $currency;
    public $image;
    public $title;
    public $price;
    
    public function render()
    {
        return view('livewire.product-item');
    }

    public function mount($data){
        // dd($data);
        $this->title = $data['pageTitle'];
        $this->currency = $data['metadata']['values']['currency'];
        $this->productInfo = $data['contentElement']['values'];
        $this->link = 'product/' . $this->productInfo['productSku'];
        $this->price = $this->productInfo['googleUnitPricingMeasure'];
        $this->image = $this->productInfo['twitterCardImage'];
    }
}
