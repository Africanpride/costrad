<header
    class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap  z-10 w-full bg-white border-b text-sm py-2.5 sm:py-4 dark:bg-black dark:border-slate-800 ">
    <nav class="flex basis-full justify-between items-center w-full mx-auto px-4 sm:px-6 md:px-8" aria-label="Global">
        <div class="mr-5 md:mr-8">
            <a class="md:hidden  flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">{{ config('app.name') }}</a>
          </div>

        <div class="l flex items-center justify-end ml-auto  sm:gap-x-3 sm:order-3">

            <div class="hidden">
                <button type="button"
                    class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-firefly-700 align-middle hover:bg-firefly-50 focus:outline-none focus:ring-2 focus:ring-firefly-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-black dark:hover:bg-slate-800 dark:text-firefly-400 dark:hover:text-white dark:focus:ring-firefly-700 dark:focus:ring-offset-firefly-900">
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

            <div class="hidden">
                <label for="icon" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                        <svg class="h-4 w-4 text-firefly-400" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>
                    <input type="text" id="icon" name="icon"
                        class="py-2 px-4 pl-11 block w-full border-firefly-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-black dark:border-firefly-700 dark:text-firefly-400"
                        placeholder="Search">
                </div>
            </div>

            <div class="flex flex-row items-center justify-end gap-3 dark:text-firefly-50">

                <div class="hidden md:inline-flex">
                    {{-- <div>@auth
                            Welcome!
                            {{ Auth::user()->firstName }}
                        @endauth
                    </div> --}}
                    {{-- <x-heroicon-o-ellipsis-vertical class="w-5 h-5 text-current" /> --}}
                </div>
                <div
                class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-firefly-800 align-middle hover:bg-firefly-100 focus:outline-none focus:ring-2 focus:ring-firefly-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-black dark:hover:bg-slate-800 dark:text-firefly-400 dark:hover:text-white dark:focus:ring-firefly-700 dark:focus:ring-offset-firefly-900">
                <x-heroicon-o-magnifying-glass class="w-5 h-5 text-current cursor-pointer" />
                </div>
                <div
                    class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-firefly-800 align-middle hover:bg-firefly-100 focus:outline-none focus:ring-2 focus:ring-firefly-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-black dark:hover:bg-slate-800 dark:text-firefly-400 dark:hover:text-white dark:focus:ring-firefly-700 dark:focus:ring-offset-firefly-900">
                    <x-admin.dark-switch />
                </div>



                <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                    <button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-firefly-800 align-middle hover:bg-firefly-100 focus:outline-none focus:ring-2 focus:ring-firefly-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-black dark:hover:bg-slate-800 dark:text-firefly-400 dark:hover:text-white dark:focus:ring-firefly-700 dark:focus:ring-offset-firefly-900">
                        <x-heroicon-o-bell class="w-5 h-5 text-current" />

                    </button>

                    <div
                        class="hs-dropdown-menu   transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-auto md:w-80 hidden z-10 bg-white md:shadow rounded-lg py-2 md:p-2 dark:bg-gray-800 dark:divide-gray-700 before:absolute top-full before:-top-5 before:left-0 before:w-full before:h-5">

                        <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-md hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="#">
                            <svg class="flex-shrink-0 w-5 h-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M4.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm2 7a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2.5.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                <path
                                    d="M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1v2H2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2h-1V7h1a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm0 7v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-3-4v2H4V7h8z" />
                            </svg>
                            <div>
                                <span class="block font-semibold mb-1 text-gray-800 dark:text-gray-200">Data</span>
                                How you get the most accurate and up-to-date data
                            </div>
                        </a>

                        <div class="my-2 border-t border-gray-100 dark:border-gray-800"></div>

                        <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-md hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="#">
                            <svg class="flex-shrink-0 w-5 h-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                            </svg>
                            <div>
                                <span class="block font-semibold mb-1 text-gray-800 dark:text-gray-200">Team <span
                                        class="inline ml-1 text-xs bg-blue-600 text-white py-1 px-2 rounded-full">We're
                                        hiring</span></span>
                                Meet the people building products to help your business grow
                            </div>
                        </a>

                        <div class="my-2 border-t border-gray-100 dark:border-gray-800"></div>

                        <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-md hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="#">
                            <svg class="flex-shrink-0 w-5 h-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                <path
                                    d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                            </svg>
                            <div>
                                <span class="block font-semibold mb-1 text-gray-800 dark:text-gray-200">Blog</span>
                                The latest news, feature releases, and how to grow with data
                            </div>
                        </a>
                    </div>
                </div>
                <div class="hs-dropdown relative inline-flex">
                    <button id="hs-dropdown-custom-trigger" type="button"
                        class="hs-dropdown-toggle py-1 pl-1 pr-3 inline-flex justify-center items-center gap-2 rounded-full border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                        @auth
                            <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white dark:ring-firefly-900"
                                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->full_name }}">
                        @endauth
                        <span
                            class="text-gray-600 font-medium truncate max-w-[7.5rem] dark:text-gray-400">{{ Auth::user()->firstName }}</span>
                        <svg class="hs-dropdown-open:rotate-180 w-2.5 h-2.5 text-gray-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 dark:bg-black dark:border dark:border-firefly-700"
                        aria-labelledby="hs-dropdown-with-header">
                        <div class="py-3 px-5 -m-2 bg-firefly-100 rounded-t-lg dark:bg-firefly-700">
                            <p class="text-sm text-firefly-500 dark:text-firefly-400">Signed in as</p>
                            <p class="text-sm font-medium text-firefly-900 dark:text-firefly-300">
                                @auth
                                    {{ Auth::user()->email }}
                                @endauth
                            </p>
                        </div>
                        <div class="mt-2 py-2 first:pt-0 last:pb-0">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-400 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                                href="#">
                                <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>
                                Newsletter
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-400 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                                href="{{ url('profile') }}">
                                <x-heroicon-o-identification class=" flex-shrink-0 w-5 h-5 " />
                                {{ __('Profile') }}
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-400 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                                href="#">
                                <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" />
                                    <path
                                        d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                </svg>
                                Downloads
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-400 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                                href="#">
                                <svg class="flex-none" width="16" height="16" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <path
                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                </svg>
                                Team Account
                            </a>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-400 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                                    href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    <x-heroicon-o-arrow-left-on-rectangle class="w-5 h-5 " />
                                    {{ __('Logout') }}
                                </a>
                            </form>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </nav>
</header>
