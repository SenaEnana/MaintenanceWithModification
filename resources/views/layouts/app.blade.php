<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Scripts -->
    @vite(['resources/assets/scss/app.scss', 'resources/assets/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased bg-gray-50 dark:bg-gray-800">
    <x-layout.navbar />

    <x-layout.sidebar />

    <div x-data>

        <main :class="$store.showSidebar.on ? 'lg:ml-64' : 'lg:ml-0'" x-transition.duration.500ms
            class="p-4 lg:ml-0 h-auto pt-20">
            {{ $slot }}
        </main>

    </div>

    @stack('modals')

    <!--- Toast -->
    <script src="/plugins/toast/toast.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        window.addEventListener('toast', event => {
            switch (event.detail.type) {
                case 'info':
                    showNotification('info', 'Information', event.detail.message);
                    break;
                case 'success':
                    showNotification('success', 'Success', event.detail.message);
                    break;
                case 'warning':
                    showNotification('warning', 'Warning', event.detail.message);
                    break;
                case 'error':
                    showNotification('error', 'Error', event.detail.message);
                    break;
            }
        });

        function showNotification(type, title, message) {
            new Notify({
                title: `${title}!`,
                text: message,
                showCloseButton: true,
                showIcon: false,
                customClass: `c-${type}`,
                speed: 500, // animation speed
                autoclose: true,
                autotimeout: 5000
            });
        }
    </script>


    @livewireScriptConfig
</body>

</html>
