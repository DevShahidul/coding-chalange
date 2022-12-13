<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $footerData;
    public function render()
    {
        
        $jsonData = json_decode(file_get_contents(public_path(). "/assets/GP_JSON/components.json"), true);
        // $this->footerData = $jsonData['1']['contentElement']['items'];
        $this->footerData = $jsonData; //['2']['contentElement']
        
        dd($this->footerData);
        return view('livewire.footer');
    }
}
