<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Technician;
use App\Models\MaintenanceRequest;

class Dashboard extends Component
{

    public $customerCount;
    public $technicianCount;
    public $requestsData;

    public function render()
    {

        $this->customerCount = Customer::count();
        $this->technicianCount = Technician::count();
        
        $this->requestsData = MaintenanceRequest::select('customer_id', \DB::raw('count(*) as total'))
        ->groupBy('customer_id')
        ->with('customer')
        ->get()
        ->map(function($request) {
            return [
                'customer' => $request->customer->first_name,
                'total' => $request->total
            ];
        });

        return view('livewire.dashboard')->layout('layouts.app');
    }
}
