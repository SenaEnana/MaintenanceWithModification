<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateTechnician</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
</head>
<body>
<div wire:ignore.self>
    <div class="ms-3">
        <p class="fs-4 text-dark ms-5 mt-5">Create new technician</p>
    </div>
    <form wire:submit.prevent="submit" class="form-group rounded border col-6 ms-5 ms-4 bg-light container ">
        <div class="col-8 row">
            <div>
                <label class="text-dark float-start p-0 fs-5 center m-1" for="technician_id">Technician Id</label>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Enter employee id" class="form-control text-dark fw-lighter fs-6 m-0" id="technician_id" wire:model='technician_id'>
                @error('technician_id')
                <span class="text-danger fs-4">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="first_name">First Name</label>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Enter first name" class="form-control text-dark fw-lighter fs-6 m-0" id="first_name" wire:model='first_name'>
                @error('first_name')
                <span class="text-danger fs-4">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="last_name">Last Name</label>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Enter last name" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="last_name" wire:model='last_name'>
                @error('last_name')
                <span class="text-danger fs-4">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="email">Email</label>
            </div>
            <div class="form-group">
                <input type="email" placeholder="Enter email" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="email" wire:model='email'>
                @error('email')
                <span class="text-danger fs-4">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="phone">Phone Number</label>
            </div>
            <div class="form-group">
                <input type="number" placeholder="Enter phone number" class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="phone" wire:model='phone'>
                @error('phone')
                <span class="text-danger fs-4">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="job_type_id">Job Type</label>
            </div>
            <div class="form-group">
                <select class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="job_type_id" wire:model='job_type_id'>
                    <option value="">Select Job Type</option>
                    @foreach($jobTypes as $jobType)
                        <option value="{{ $jobType->id }}">{{ $jobType->name }}</option>
                    @endforeach
                </select>
                @error('job_type_id')
                <span class="text-danger fs-4">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="text-dark float-start p-0 fs-5 m-1" for="location_id">Service Location</label>
            </div>
            <div class="form-group">
                <select class="form-control text-dark fw-lighter fs-6 m-0 m-2 p-1" id="location_id" wire:model='location_id'>
                    <option value="">Select Service Location</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
                @error('location_id')
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
