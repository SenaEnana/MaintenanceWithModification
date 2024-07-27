<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Technician;
use App\Models\JobType;
use App\Models\Location;
use Illuminate\Support\Facades\Hash;

class TechnicianComponent extends Component
{
    public $technician_id = '';
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $phone = '';
    public $job_type_id = '';
    public $location_id = '';

    protected $rules = [
        'technician_id' => 'required|unique:technicians',
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'job_type_id' => 'required|exists:job_types,id',
        'location_id' => 'required|exists:locations,id',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function submit()
    {
        $this->validate();

        Technician::create([
            'technician_id' => $this->technician_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'job_type_id' => $this->job_type_id,
            'location_id' => $this->location_id,
            'password' => Hash::make('123'),
        ]);

        session()->flash('message', 'New technician has been added successfully');
        $this->reset();
    }

    public function render()
    {
        $jobTypes = JobType::all();
        $locations = Location::all();
        $technicians = Technician::with(['location', 'jobType'])->get();
        return view('livewire.technician-component', compact('jobTypes', 'locations', 'technicians'))->layout('layouts.app');
    }
    
}
