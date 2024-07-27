<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MaintenanceRequest;
use App\Models\Equipment;
use App\Models\RequestType;
use App\Models\Customer;

class RequestComponent extends Component
{
    public $customer_id = '';
    public $equipment_id = '';
    public $request_type_id = '';
    public $description = '';
    public $equipments = [];
    public $requestTypes = [];
    public $customers = [];

    public function mount()
    {
        $this->equipments = Equipment::all();
        $this->requestTypes = RequestType::all();
        $this->customers = Customer::all();
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'customer_id' => 'required',
            'equipment_id' => 'required',
            'request_type_id' => 'required',
            'description' => 'required',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'customer_id' => 'required',
            'equipment_id' => 'required',
            'request_type_id' => 'required',
            'description' => 'required',
        ]);

        MaintenanceRequest::create([
            'customer_id' => $this->customer_id,
            'equipment_id' => $this->equipment_id,
            'request_type_id' => $this->request_type_id,
            'description' => $this->description,
            'status' => MaintenanceRequest::STATUS_PENDING,
        ]);

        session()->flash('message', 'New maintenance request has been added successfully');
        $this->reset();
    }

    public function render()
    {
        $equipments = Equipment::all();
        $requestTypes = RequestType::all();
        $requests = MaintenanceRequest::with(['equipment', 'requestType', 'customer'])->get();
        return view('livewire.request-component', [
            'equipments' => $this->equipments,
            'requestTypes' => $this->requestTypes,
            'customers' => $this->customers,
            'requests' => $requests,
        ])->layout('layouts.app');
    }
    
}
