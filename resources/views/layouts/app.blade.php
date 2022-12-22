<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-gray-50 dark:bg-slate-900 grid md:grid-cols-12">
    <div class="md:col-span-2 w-full">
        <!-- Navigation -->
        <livewire:layout.navigation />
        <!-- End Navigation -->
    </div>
    <div class="md:col-span-10 w-full overflow-x-hidden">
        <!-- Content -->
        <div class="bg-gray-50 dark:bg-firefly-900 w-full ">
            <!-- ========== HEADER ========== -->
            <livewire:layout.header />
            <!-- Sidebar Toggle -->
            <livewire:layout.sidebar-toggle />
            <!-- End Sidebar Toggle -->
            <!-- ========== END HEADER ========== -->
            {{ $slot }}
            <!-- Footer -->
            <livewire:layout.footer />
            <!-- End Footer -->
        </div>
        <!-- End Content -->

    </div>


    <!-- ========== MODALS ========== -->
    <livewire:layout.all-modals />

    <!-- ========== END MODALS CONTENT ========== -->
    @livewire('livewire-ui-modal')

    @stack('modals')
    @livewireScripts
</body>

</html>
