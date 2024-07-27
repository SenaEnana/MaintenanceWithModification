<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RequestType;

class RequestTypeComponent extends Component
{
    public $request_type_id = '';
    public $name = '';
    public $description = '';
   
    public function updated($fields){
                $this->validateOnly($fields,[
                'request_type_id' => 'required|unique:request_types',
                'name' => 'required',
                'description' => 'required',
                ]);
    }
    public function submit()
    {
        $this->validate([
            'request_type_id' => 'required|unique:request_types',
            'name' => 'required',
            'description' => 'required'
        ]);

        RequestType::create([
            'request_type_id' => $this->request_type_id,
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'New employee has been added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.request-type-component')->layout('layouts.app');
    }
}
