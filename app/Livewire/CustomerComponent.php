<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerComponent extends Component
{

    public $customer_id = '';
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $phone = '';
    public $location = '';
   
    public function updated($fields){
                $this->validateOnly($fields,[
                'customer_id' => 'required|unique:customers',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'location' => 'required',
                ]);
    }
    public function submit()
    {
        $this->validate([
            'customer_id' => 'required|unique:customers',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'location' => 'required',
        ]);

        Customer::create([
            'customer_id' => $this->customer_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'location' => $this->location,
            'password' => Hash::make('123'),
        ]);

        session()->flash('message', 'New employee has been added successfully');
        $this->reset();
    }

    public function render()
    {
        $customers = Customer::all();
        return view('livewire.customer-component', ['customers' => $customers])->layout('layouts.app');
    }
}