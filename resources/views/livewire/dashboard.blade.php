<div class="container mt-5">
    <h1 class="mb-4">Admin Dashboard</h1>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="card-title"><i class="fas fa-users"></i> Total Customers</h2>
                            <p class="card-text">{{ $customerCount }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="card-title"><i class="fas fa-tools"></i> Total Technicians</h2>
                            <p class="card-text">{{ $technicianCount }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tools fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Maintenance Requests per Customer</h2>
            <canvas id="requestsChart"></canvas>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', function () {
            var ctx = document.getElementById('requestsChart').getContext('2d');
            var requestsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($requestsData->pluck('customer')),
                    datasets: [{
                        label: '# of Requests',
                        data: @json($requestsData->pluck('total')),
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</div>
