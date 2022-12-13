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

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-gray-50 dark:bg-slate-900">
    <!-- ========== HEADER ========== -->
    <livewire:layout.header />
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Sidebar Toggle -->
    <livewire:layout.sidebar-toggle />
    <!-- End Sidebar Toggle -->

    <!-- Navigation -->
    <livewire:layout.navigation />
    <!-- End Navigation -->

    <!-- Content -->
    <div class="w-full py-10 px-4 sm:px-6 md:px-8 lg:pl-72">
        {{ $slot }}
    </div>
    <!-- End Content -->

        <!-- Footer -->
<livewire:layout.footer />
    <!-- End Footer -->
    <!-- ========== END MAIN CONTENT ========== -->
    @stack('modals')

    @livewireScripts
</body>

</html>
