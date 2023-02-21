<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <script src="./node_modules/preline/dist/preline.js" /> --}}

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
    <!-- Font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:ital,wght@0,400;0,900;1,400;1,900&family=Montserrat:wght@100;400&family=Open+Sans&family=Roboto:wght@300&family=Source+Sans+Pro&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>


    <!-- FlatPickr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>


    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @livewireStyles


</head>
{{-- <body class="bg-gray-100 dark:bg-gray-900 dark:text-white text-gray-600 h-screen  overflow-hidden text-sm first-letter: grid md:grid-cols-12  scrollbar-thin scrollbar-thumb-firefly-800 scrollbar-track-gray-300 overflow-y-scroll scrollbar-thumb-rounded-full "> --}}


<body class="bg-gray-100 dark:bg-gray-900 grid md:grid-cols-12 scrollbar-thin
scrollbar-thumb-firefly-800 scrollbar-track-gray-300 overflow-x-hidden overflow-y-scroll ">
<div class="md:col-span-2 w-fullrelative">
        <livewire:cookie />

        <!-- Navigation -->
        <livewire:layout.navigation />
        <!-- End Navigation -->
    </div>
    <div class="md:col-span-10 w-full overflow-x-hidden">

        <!-- Content -->
        <div class="bg-gray-50 dark:bg-black w-full ">
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
<div>
    <livewire:layout.all-modals />
</div>

    <!-- ========== END MODALS CONTENT ========== -->
    @livewire('livewire-ui-slideover')
    @livewire('livewire-ui-modal')
    @stack('modals')
    @livewireScripts


    @stack('scripts')

</body>
</html>
