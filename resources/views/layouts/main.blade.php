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

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>


    @livewireStyles

    <!-- Required Meta Tags Always Come First -->

    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://costrad.co/">
    <meta name="description"
        content="This example is a quick exercise to illustrate how fixed to top navbar works using Tailwind CSS. As you scroll, it will remain fixed to the top of your browser's viewport.">

    <meta name="twitter:site" content="@costrad">
    <meta name="twitter:creator" content="@htmlstream">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sticky Header using Tailwind CSS | costrad UI, crafted with Tailwind CSS">
    <meta name="twitter:description"
        content="This example is a quick exercise to illustrate how fixed to top navbar works using Tailwind CSS. As you scroll, it will remain fixed to the top of your browser's viewport.">
    <meta name="twitter:image" content="../../assets/img/og-image.png">

    <meta property="og:url" content="https://costrad.org">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="costrad">
    <meta property="og:title" content="Sticky Header using Tailwind CSS | costrad UI, crafted with Tailwind CSS">
    <meta property="og:description"
        content="This example is a quick exercise to illustrate how fixed to top navbar works using Tailwind CSS. As you scroll, it will remain fixed to the top of your browser's viewport.">
    <meta property="og:image" content="../../assets/img/og-image.png">


    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:ital,wght@0,400;0,900;1,400;1,900&family=Montserrat:wght@100;400&family=Roboto:wght@300&family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- Link your Tailwind CSS file -->
    <link rel="stylesheet" href="your_file.css">
</head>

<body
    class="bg-firefly-100 dark:bg-slate-900 min-h-[75rem] scrollbar-thin
scrollbar-thumb-firefly-800 dark:scrollbar-thumb-firefly-900 scrollbar-track-gray-300 overflow-y-scroll overflow-x-hidden">


    <!-- ========== HEADER ========== -->
<livewire:layout.main.header />
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="bg-gray-50 dark:bg-gray-900">

        {{ $slot }}
    </main>

    <!-- Footer -->
    <livewire:layout.footer />
    <!-- End Footer -->
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/preline/dist/preline.js"></script>
</body>

</html>