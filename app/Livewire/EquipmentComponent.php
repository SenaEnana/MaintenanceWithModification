<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Equipment;

class EquipmentComponent extends Component
{

    public $equipment_id = '';
    public $name = '';
   
    public function updated($fields){
                $this->validateOnly($fields,[
                'equipment_id' => 'required|unique:equipments',
                'name' => 'required',

                ]);
    }
    public function submit()
    {
        $this->validate([
            'equipment_id' => 'required|unique:equipments',
            'name' => 'required',
        ]);

        Equipment::create([
            'equipment_id' => $this->equipment_id,
            'name' => $this->name,
        ]);

        session()->flash('message', 'New employee has been added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.equipment-component')->layout('layouts.app');
    }
}
