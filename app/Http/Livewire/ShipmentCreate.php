<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class ShipmentCreate extends Component
{
    public $name;
    public $search;
    public $selected_customer;
    public $customers;
    public function render()
    {
        return view('livewire.shipment-create');
    }

    public function search(){
        $this->customers = Customer::where('email', 'like', '%'.$this->search.'%')->orWhere('phone_number', 'like', '%'.$this->search.'%')->get();
    }
    public function setCustomer(){

    }
}
