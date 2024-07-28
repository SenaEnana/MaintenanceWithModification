<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CustomerComponent;
use App\Livewire\JobTypeComponent;
use App\Livewire\ServiceLocationComponent;
use App\Livewire\EquipmentComponent;
use App\Livewire\RequestTypeComponent;
use App\Livewire\TechnicianComponent;
use App\Livewire\RequestComponent;
use App\Livewire\CustomerList;
use App\Livewire\TechnicianList;
use App\Livewire\RequestList;
use App\Livewire\Dashboard;

use function Termwind\render;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Fortify routes
Route::group(['middleware' => config('fortify.middleware', ['web'])], base_path('routes/sub/fortify.php'));

// Jetstream routes
Route::group(['middleware' => config('jetstream.middleware', ['web'])], base_path('routes/sub/jetstream.php'));


Route::get('/welcome', function () {
    return view('welcome');
})
    ->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});
Route::get('/customers', CustomerComponent::class)->name('customer-component');
Route::get('/jobTypes', JobTypeComponent::class)->name('job-type-component');
Route::get('/serviceLocation', ServiceLocationComponent::class)->name('service-location-component');
Route::get('/equipments', EquipmentComponent::class)->name('equipment-component');
Route::get('/requestType', RequestTypeComponent::class)->name('request-type-component');
Route::get('/technicians', TechnicianComponent::class)->name('technician-component');    
Route::get('/requests', RequestComponent::class)->name('request-component');
Route::get('/customerList', CustomerList::class)->name('customer-list');
Route::get('/technicianList', TechnicianList::class)->name('technician-list');
Route::get('/requestList', RequestList::class)->name('request-list');
Route::get('/dashboard', Dashboard::class)->name('dashboard');

