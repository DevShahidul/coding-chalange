<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hero extends Component
{
    // public $heroData;
    // public function __construct($data)
    // {
    //     $this->heroData = $data;
    // }
    public function render()
    {
        return view('livewire.hero');
    }
}
