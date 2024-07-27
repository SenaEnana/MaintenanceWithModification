<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Location;

class ServiceLocationComponent extends Component
{

    public $location_id = '';
    public $name = '';
    public $street = '';

    public function updated($fields){
                $this->validateOnly($fields,[
                'location_id' => 'required|unique:locations',
                'name' => 'required',
                'street' => 'required',
                ]);
    }
    public function submit()
    {
        $this->validate([
            'location_id' => 'required|unique:locations',
            'name' => 'required',
            'street' => 'required',
        ]);

        Location::create([
            'location_id' => $this->location_id,
            'name' => $this->name,
            'street' => $this->street,
        ]);

        session()->flash('message', 'New location has been added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.service-location-component')->layout('layouts.app');
    }
}
