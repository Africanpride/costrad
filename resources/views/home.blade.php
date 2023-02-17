<x-main-layout>
    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="max-w-2xl text-center mx-auto">
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl md:text-5xl dark:text-white">Designed for
                    you to get more <span class="text-blue-600">simple</span></h1>
                <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Build your business here. Take it anywhere.</p>
            </div>

            <div class="mt-10 relative max-w-5xl mx-auto">

                {{-- <div
                    class="w-full object-cover h-96 sm:h-[480px]
                     bg-[url({{ asset('/storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/quarterglobe.jpeg') }})] bg-no-repeat bg-center bg-cover rounded-xl"> --}}
                <div
                    class="w-full object-cover h-96 sm:h-[480px]
                     bg-no-repeat bg-center bg-cover rounded-xl"
                     style="background-image: url('{{ asset('storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/quarterglobe.jpeg') }}');">
                </div>

                <div class="absolute inset-0 w-full h-full">
                    <div class="flex flex-col justify-center items-center w-full h-full">
                        <a class="inline-flex justify-center items-center gap-x-1.5 text-center text-sm bg-white text-gray-800 hover:text-gray-600 rounded-full transition focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white  py-3 px-4 dark:bg-black dark:text-gray-200 dark:hover:text-gray-400 dark:focus:ring-offset-black"
                            href="#">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                            </svg>
                            Play the overview
                        </a>
                    </div>
                </div>

                <div
                    class="absolute bottom-12 -left-20 -z-[1] w-48 h-48 bg-gradient-to-b from-orange-500 to-white p-px rounded-lg dark:to-slate-900">
                    <div class="bg-white w-48 h-48 rounded-lg dark:bg-slate-900"></div>
                </div>

                <div
                    class="absolute -top-12 -right-20 -z-[1] w-48 h-48 bg-gradient-to-t from-blue-600 to-cyan-400 p-px rounded-full">
                    <div class="bg-white w-48 h-48 rounded-full dark:bg-slate-900"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        {{-- <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
                <p
                    class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                    Brand new
                </p>
            </div>
            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 dark:text-gray-300  sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="07690130-d013-42bc-83f4-90de7ac68f76" x="0" y="0"
                                width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#07690130-d013-42bc-83f4-90de7ac68f76)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">The</span>
                </span>
                quick, brown fox jumps over a lazy dog
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque
                ipsa quae.
            </p>
        </div> --}}
        <div class="grid max-w-screen-lg mx-auto space-y-6 lg:grid-cols-2 lg:space-y-0 lg:divide-x">
            <div class="space-y-6 sm:px-16">
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5">The deep ocean</h6>
                        <p class="text-sm text-gray-900 dark:text-gray-300 ">
                            Webtwo ipsum orkut reddit meebo skype vimeo jajah spock empressr zimbra, mobly napster.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5">When has justice</h6>
                        <p class="text-sm text-gray-900 dark:text-gray-300 ">
                            Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down
                            clap of thunder.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5">Leverage agile</h6>
                        <p class="text-sm text-gray-900 dark:text-gray-300 ">
                            The first mate and his Skipper too will do their very best to make the others comfortable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="space-y-6 sm:px-16">
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5">Organically grow</h6>
                        <p class="text-sm text-gray-900 dark:text-gray-300 ">
                            Skate ipsum dolor sit amet, alley oop vert mute-air Colby Carter flail 180 berm over the
                            sea.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                    fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5">Have a good one</h6>
                        <p class="text-sm text-gray-900 dark:text-gray-300 ">
                            Cheese on toast airedale the big cheese. Danish fontina cheesy grin airedale danish fontina.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                    fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-xl font-bold leading-5">A slice of heaven</h6>
                        <p class="text-sm text-gray-900 dark:text-gray-300 ">
                            A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:subscribe />
</x-main-layout>
