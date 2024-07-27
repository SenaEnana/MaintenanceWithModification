<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Maintenance Request</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div wire:ignore.self>
    <div class="ms-3">
        <p class="fs-4 text-dark ms-5 mt-5">
            Submit request form
        </p>
    </div>
    <form wire:submit.prevent="submit" class="form-group rounded border col-6 ms-5 ms-4 bg-light container">
        <div class="col-8 row">

            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="customer_id">Customer</label>
            </div>
            <div class="form-group">
                <select class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="customer_id" wire:model='customer_id'>
                    <option value="">Select Customer</option>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->first_name }}</option>
                    @endforeach
                </select>
                @error('customer_id') 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror
            </div>

            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="equipment_id">Equipment</label>
            </div>
            <div class="form-group">
                <select class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="equipment_id" wire:model='equipment_id'>
                    <option value="">Select Equipment</option>
                    @foreach($equipments as $equipment)
                        <option value="{{ $equipment->id }}">{{ $equipment->name }}</option>
                    @endforeach
                </select>
                @error('equipment_id') 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror  
            </div>

            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="request_type_id">Request Type</label>
            </div>
            <div class="form-group">
                <select class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="request_type_id" wire:model='request_type_id'>
                    <option value="">Select Request Type</option>
                    @foreach($requestTypes as $requestType)
                        <option value="{{ $requestType->id }}">{{ $requestType->name }}</option>
                    @endforeach
                </select>
                @error('request_type_id') 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror  
            </div>

            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="description">Description</label>
            </div>
            <div class="form-group">
                <textarea placeholder="Enter description" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="description" wire:model='description'></textarea>
                @error('description') 
                <span class="text-danger fs-4">{{ $message }}</span> 
                @enderror  
            </div>

            <div>
                <button type="submit" class="btn btn-success col-12">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>