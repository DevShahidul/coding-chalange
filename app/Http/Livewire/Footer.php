<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $footerNavItems;
    public function render()
    {
        
        $jsonData = json_decode(file_get_contents(public_path(). "/assets/GP_JSON/components.json"), true);
        $this->footerNavItems = $jsonData['1']['contentElement']['items'];
        
        return view('livewire.footer');
    }
}
