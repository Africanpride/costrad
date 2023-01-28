<div class="">
    <div class="grid grid-cols-12 gap-x-2">

        <div
            class="relative col-span-12 md:col-span-3  dark:text-white md:max-h-screen
        overflow-y-scroll scrollbar-thin
        scrollbar-thumb-firefly-800 scrollbar-track-gray-300 scrollbar-h-8
        overflow-x-hidden  py-4 pl-2 pr-4 w-full space-y-4 ">

            <div class="w-full">
                <label for="hs-search-box-with-loading-1" class="block text-sm  mb-2 dark:text-white uppercase "></label>
                <div class="relative">
                    <input type="text" wire:model="search" id="hs-search-box-with-loading-1" name="hs-search-box-with-loading-1"
                        class="py-2 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500/10 focus:ring-blue-500/20 dark:bg-slate-900 dark:border-gray-800 dark:text-gray-400"
                        placeholder="Patient search">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="space-y-4 hidden md:block">
                @forelse ($patients as $patient)
                    <button
                        class="bg-gray-100 hover:bg-gray-200/50 p-3 w-full flex flex-col rounded-md dark:bg-slate-900 hover:dark:bg-gray-900 shadow dark:bg-gradient-to-b from-gray-600/[.15] to-gray-600/20 ">
                        <div
                            class="flex xl:flex-row flex-col items-center text-sm  text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200  border-opacity-75 dark:border-gray-700 w-full">
                            <img src="{{ $patient->patient_avatar }}" class="w-7 h-7 mr-2 rounded-full" alt="profile">
                            {{ $patient->full_name }}
                        </div>
                        <div class="flex items-center w-full">
                            <div
                                class="text-xs py-1 px-2 leading-none dark:bg-gray-900 @if( $patient->insured)
                                bg-green-100 text-green-500 @else bg-red-100 text-red-500  @endif rounded-md">
                                {{ $patient->insured ? 'Insured' : 'Not-Insured' }}
                            </div>
                            <div class="ml-auto text-xs text-gray-500">$1,902.00</div>
                        </div>
                    </button>
                    @empty
                    <div class="gap-4 flex justify-start items-center">
                        <x-admin.nothing-here />
                        <div>Sorry Nothing Here. </div>
                    </div>
                    @endforelse
                    {{ $patients->links() }}


            </div>
        </div>
        <div class="col-span-12 md:col-span-9  dark:text-white md:pr-3   ">

            <div class="text-sm">
                <div class="p-4">
                    <div class="flex w-full items-center">
                        <div class="flex items-center text-3xl text-gray-900 dark:text-white">
                            <img src="{{ Auth::user()->avatar_url }}"
                                class=" h-12  aspect-square mr-4 rounded-full
                            border-2 border-gray-400 grayscale contrast-200	"
                                alt="profile">
                            <span class="text-2xl">
                                {{ Auth::user()->full_name }} {{ $search }}
                            </span>
                        </div>
                        <div class="ml-auto sm:flex hidden items-center justify-end">
                            <div class="text-right">
                                <div class="text-xs text-gray-400 dark:text-gray-400">Payment Outstanding:</div>
                                <div class="text-gray-900 text-lg dark:text-white">$2,794.00</div>
                            </div>
                            {{-- <button
                                class="w-8 h-8 ml-4 text-gray-400 shadow dark:text-gray-400 rounded-full flex items-center justify-center border border-gray-200 dark:border-gray-700">
                                <svg viewBox="0 0 24 24" class="w-4" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button> --}}
                        </div>
                    </div>
                </div>
                <div class="container mx-auto">
                    <div class="border-b border-gray-200 px-4 dark:border-gray-700/50">
                        <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                            <button type="button"
                                class="hs-tab-active:font-semibold hs-tab-active:border-gray-300  hs-tab-active:text-gray-700 hs-tab-active:dark:text-gray-200 py-4 px-1 inline-flex items-center gap-2 border-b-[2px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-gray-500 active"
                                id="basic-tabs-item-1" data-hs-tab="#basic-tabs-1" aria-controls="basic-tabs-1"
                                role="tab">
                                Bio Data
                            </button>
                            <button type="button"
                                class="hs-tab-active:font-semibold hs-tab-active:border-gray-300 hs-tab-active:text-gray-600 py-4 px-1 inline-flex items-center gap-2 border-b-[2px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-gray-500"
                                id="basic-tabs-item-2" data-hs-tab="#basic-tabs-2" aria-controls="basic-tabs-2"
                                role="tab">
                                Invoices
                            </button>
                            <button type="button"
                                class="hs-tab-active:font-semibold hs-tab-active:border-gray-300 hs-tab-active:text-gray-600 py-4 px-1 inline-flex items-center gap-2 border-b-[2px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-gray-500"
                                id="basic-tabs-item-3" data-hs-tab="#basic-tabs-3" aria-controls="basic-tabs-3"
                                role="tab">
                                Appointments
                            </button>
                            <button type="button"
                                class="hs-tab-active:font-semibold hs-tab-active:border-gray-300 hs-tab-active:text-gray-600 py-4 px-1 inline-flex items-center gap-2 border-b-[2px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-gray-500"
                                id="basic-tabs-item-4" data-hs-tab="#basic-tabs-4" aria-controls="basic-tabs-4"
                                role="tab">
                                History
                            </button>
                        </nav>
                    </div>

                    <div class="mt-3 p-4">
                        <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">
                            <div>
                                whew
                            </div>
                            <div class="flex w-full items-center mb-7 hidden">
                                <button
                                    class="inline-flex mr-3 items-center h-8 pl-2.5 pr-2 rounded-md shadow text-gray-700 dark:text-gray-400 dark:border-gray-800 border border-gray-200 leading-none py-0">
                                    <svg viewBox="0 0 24 24" class="w-4 mr-2 text-gray-400 dark:text-gray-600"
                                        stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="18" rx="2"
                                            ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6">
                                        </line>
                                        <line x1="8" y1="2" x2="8" y2="6">
                                        </line>
                                        <line x1="3" y1="10" x2="21" y2="10">
                                        </line>
                                    </svg>
                                    Last 30 days
                                    <svg viewBox="0 0 24 24" class="w-4 ml-1.5 text-gray-400 dark:text-gray-600"
                                        stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center h-8 pl-2.5 pr-2 rounded-md shadow text-gray-700 dark:text-gray-400 dark:border-gray-800 border border-gray-200 leading-none py-0">
                                    Filter by
                                    <svg viewBox="0 0 24 24" class="w-4 ml-1.5 text-gray-400 dark:text-gray-600"
                                        stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </button>
                                <div class="ml-auto text-gray-500 text-xs sm:inline-flex hidden items-center">
                                    <span class="mr-3">Page 2 of 4</span>
                                    <button
                                        class="inline-flex mr-2 items-center h-8 w-8 justify-center text-gray-400 rounded-md shadow border border-gray-200 dark:border-gray-800 leading-none py-0">
                                        <svg class="w-4" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="15 18 9 12 15 6"></polyline>
                                        </svg>
                                    </button>
                                    <button
                                        class="inline-flex items-center h-8 w-8 justify-center text-gray-400 rounded-md shadow border border-gray-200 dark:border-gray-800 leading-none py-0">
                                        <svg class="w-4" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="basic-tabs-2" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-2">
                            <p class="text-gray-500 dark:text-gray-400">
                                This is the <em class="font-semibold text-gray-800 dark:text-gray-200">second</em>
                                item's
                                tab
                                body.
                            </p>
                        </div>
                        <div id="basic-tabs-3" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-3">
                            <p class="text-gray-500 dark:text-gray-400">
                                This is the <em class="font-semibold text-gray-800 dark:text-gray-200">third</em>
                                item's
                                tab
                                body.
                            </p>
                        </div>
                        <div id="basic-tabs-4" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-3">
                            <p class="text-gray-500 dark:text-gray-400">
                                4th This is the <em class="font-semibold text-gray-800 dark:text-gray-200">third</em>
                                item's
                                tab
                                body.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bg-slate-900 hidden">
                <div class="bg-gradient-to-b from-violet-600/[.15] via-transparent">
                    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-24 space-y-8">
                        <!-- Announcement Banner -->
                        <div class="flex justify-center">
                            <a class="group inline-block bg-white/[.05] hover:bg-white/[.1] border border-white/[.05] p-1 pl-4 rounded-full shadow-md"
                                href="../figma.html">
                                <p class="mr-2 inline-block text-white text-sm">
                                    Preline UI Figma is live.
                                </p>
                                <span
                                    class="group-hover:bg-white/[.1] py-2 px-3 inline-flex justify-center items-center gap-x-2 rounded-full bg-white/[.075] font-semibold text-white text-sm">
                                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <!-- End Announcement Banner -->

                        <!-- Title -->
                        <div class="max-w-3xl text-center mx-auto">
                            <h1 class="block text-sm  text-gray-200 text-4xl sm:text-5xl md:text-6xl lg:text-7xl">
                                Now it's easier than ever to build products
                            </h1>
                        </div>
                        <!-- End Title -->

                        <div class="max-w-3xl text-center mx-auto">
                            <p class="text-lg text-gray-400">Preline is a large open-source project, crafted with
                                Tailwind CSS framework by Hmlstream.</p>
                        </div>

                        <!-- Buttons -->
                        <div class="text-center">
                            <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 shadow-lg shadow-transparent hover:shadow-blue-700/50 border border-transparent text-white text-sm text-sm  rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white py-3 px-6 dark:focus:ring-offset-gray-800"
                                href="#">
                                Get started
                                <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                        <!-- End Buttons -->
                    </div>
                </div>
            </div>
            <!-- End Hero -->
        </div>

    </div>

</div>
