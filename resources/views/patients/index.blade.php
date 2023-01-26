<x-app-layout>

    <div class="">
        <div class="grid grid-cols-12 gap-x-2">

            <div class="col-span-12 md:col-span-3  dark:text-white h-screen px-2 space-y-4 ">
                <div>
                    <label for="hs-search-box-with-loading-1"
                        class="block text-sm text-sm  mb-2 dark:text-white uppercase "></label>
                    <div class="relative">
                        <input type="text" id="hs-search-box-with-loading-1" name="hs-search-box-with-loading-1"
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
                <button class="bg-gray-100 p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
                    <div
                        class="flex xl:flex-row flex-col items-center text-sm  text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
                        <img src="{{ Auth::user()->avatar_url }}"
                            class="w-7 h-7 mr-2 rounded-full" alt="profile">
                            {{ Auth::user()->full_name }}
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-green-100 text-green-500 rounded-md">
                            Insured</div>
                        <div class="ml-auto text-xs text-gray-500">$1,902.00</div>
                    </div>
                </button>
                <button class="bg-gray-100 p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
                    <div
                        class="flex xl:flex-row flex-col items-center text-sm text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
                        <img src="{{ Auth::user()->avatar_url }}"
                            class="w-7 h-7 mr-2 rounded-full" alt="profile">
                            {{ Auth::user()->full_name }}
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-green-100 text-green-500 rounded-md">
                            Insured</div>
                        <div class="ml-auto text-xs text-gray-500">$1,902.00</div>
                    </div>
                </button>
                <button class="bg-gray-100 p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
                    <div
                        class="flex xl:flex-row flex-col items-center text-sm  text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
                        <img src="{{ Auth::user()->avatar_url }}"
                            class="w-7 h-7 mr-2 rounded-full" alt="profile">
                            {{ Auth::user()->full_name }}
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-red-100 text-red-500 rounded-md">
                            Not-Insured</div>
                        <div class="ml-auto text-xs text-gray-500">%0</div>
                    </div>
                </button>
                <button class="bg-gray-100 p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
                    <div
                        class="flex xl:flex-row flex-col items-center text-sm  text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
                        <img src="{{ Auth::user()->avatar_url }}"
                            class="w-7 h-7 mr-2 rounded-full" alt="profile">
                            {{ Auth::user()->full_name }}
                    </div>
                    <div class="flex items-center w-full">
                        <div
                            class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-green-100 text-green-500 rounded-md">
                            Insured</div>
                        <div class="ml-auto text-xs text-gray-500">$1,902.00</div>
                    </div>
                </button>

            </div>
            <div class="col-span-12 md:col-span-9 bg-slate-900 text-white  h-screen ">
                <!-- Hero -->
                <div class="bg-slate-900">
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
                                <h1
                                    class="block text-sm  text-gray-200 text-4xl sm:text-5xl md:text-6xl lg:text-7xl">
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
</x-app-layout>
