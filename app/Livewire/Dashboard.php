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
    public $maintenanceRequestCount;
    public $recentRequests;

    public function render()
    {

        $this->customerCount = Customer::count();
        $this->technicianCount = Technician::count();
        $this->maintenanceRequestCount = MaintenanceRequest::count();
        $this->recentRequests = MaintenanceRequest::with('customer', 'requestType')
            ->latest()
            ->take(5)
            ->get();

        // Prepare data for the graph (e.g., number of maintenance requests per customer)
        // $this->requestsData = MaintenanceRequest::select('customer_id', \DB::raw('count(*) as total'))
        //     ->groupBy('customer_id')
        //     ->with('customer')
        //     ->get()
        //     ->map(function($request) {
        //         return [
        //             'customer' => $request->customer->first_name,
        //             'total' => $request->total
        //         ];
        //     });

        return view('livewire.dashboard')->layout('layouts.app');
    }
}
