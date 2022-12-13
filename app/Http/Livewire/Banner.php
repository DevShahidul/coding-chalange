<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Banner extends Component
{
    public $data;
    public $title;
    public $pageType;
    public function render()
    {
        return view('livewire.banner');
    }

    public function mount($data){
        $this->data = $data;
        $this->title = $data['pageTitle'];
        $this->pageType = $data['pageType'];
    }
}
