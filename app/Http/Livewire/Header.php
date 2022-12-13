<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $navItems;
    public function render()
    {
        
        $jsonData = json_decode(file_get_contents(public_path(). "/assets/GP_JSON/components.json"), true);
        $this->navItems = $jsonData['0']['contentElement']['items'];
        
        // dd($this->navItems);
        return view('livewire.header');
    }
}
