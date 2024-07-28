<div class="container mt-5">
    <h1 class="mb-4">Dashboard</h1>

    <div class="row mb-4">
        <!-- Customer Count Card -->
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="card-title"><i class="fas fa-users"></i> Total Number Of Customers</h2>
                            <p class="card-text display-4">{{ $customerCount }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Technician Count Card -->
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="card-title"><i class="fas fa-tools"></i> Total Number Of Technicians</h2>
                            <p class="card-text display-4">{{ $technicianCount }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tools fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Maintenance Request Count Card -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="card-title"><i class="fas fa-wrench"></i> Total Maintenance Requests</h2>
                            <p class="card-text display-4">{{ $maintenanceRequestCount }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-wrench fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Maintenance Requests -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Recent Maintenance Requests</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentRequests as $request)
                        <tr>
                            <td>{{ $request->customer->first_name }} {{ $request->customer->last_name }}</td>
                            <td>{{ $request->status }}</td>
                            <td>{{ $request->created_at->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
