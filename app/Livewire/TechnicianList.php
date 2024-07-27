<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Technician;

class TechnicianList extends Component
{
    public function render()
    {
        $technicians = Technician::all();
        return view('livewire.technician-list', ['technicians' => $technicians])->layout('layouts.app');
    }
}
