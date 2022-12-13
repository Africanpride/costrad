<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $pageTitle ?? ' ' }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<html class="h-full">

<body class="dark:bg-slate-900 bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-3  h-screen">
        <div class="col-span-1 min-h-[450px] md:min-h-screen relative px-8">
            <img src="{{ asset('/images/hospital.jpg') }}" alt="Image Description"
                class="absolute inset-0 h-full w-full object-cover">
            <div class="flex flex-col justify-center items-start h-full relative  space-y-3">
                <div>
                    <x-jet-authentication-card-logo />
                </div>
                <div class="z-10 text-primary-content">
                    <article class="prose text-primary-content">
                        <h1 class="text-white">Garlic bread with cheese: What the science tells us</h1>
                        <h4 class="text-secondary">For years parents have espoused the health benefits of eating garlic
                            bread with cheese to their
                            children, with the food earning such an iconic status in our culture that kids will often
                            dress up
                            as warm, cheesy loaf for Halloween.</h4>

                        <!-- ... -->
                    </article>
                </div>

            </div>
        </div>
        <div class="col-span-2 h-full flex flex-col justify-center items-center dark:bg-slate-900 bg-gray-100">
            <main class="w-full max-w-lg mx-auto p-6">
                {{ $slot }}
            </main>
        </div>

    </div>


</body>

</html>
