<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShipmentCreate extends Component
{
    public $name;
    public $search;
    public function render()
    {
        return view('livewire.shipment-create');
    }
}
