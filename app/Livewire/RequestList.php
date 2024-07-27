<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MaintenanceRequest;

class RequestList extends Component
{
    public function render()
    {
        $requests = MaintenanceRequest::all();
        return view('livewire.request-list', ['requests' => $requests])->layout('layouts.app');
    }
}
