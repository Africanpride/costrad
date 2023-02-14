<header
    class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm py-4 bg-white backdrop-blur-md
md:backdrop-blur-none dark:bg-slate-900 123 sticky top-0 inset-x-0  sm:justify-start sm:flex-nowrap
 border-b  sm:py-0  dark:border-gray-700/50">
    <nav class="max-w-[85rem] flex flex-wrap basis-full items-center w-full mx-auto px-4 sm:px-6 lg:px-8 py-3"
        aria-label="Global">
        <a class="flex-none" href="{{ url('') }}">
            <x-admin.branding />
        </a>

        <div class="flex items-center gap-x-3 ml-auto md:pl-3 md:order-3">
            <!-- Form -->

            <!-- End Form -->

            <div
                class="flex items-center relative z-10 before:w-px before:h-4 before:bg-gray-300 dark:before:bg-gray-700">
                <div class="pl-3">
                    <a class="-mr-1.5 inline-flex flex-shrink-0 justify-center items-center h-9 w-9 text-gray-600 hover:text-firefly-600 font-medium dark:text-gray-400 dark:hover:text-gray-500"
                        href="https://www.figma.com/community/file/1179068859697769656" target="_blank">
                        <svg class="w-4 h-4" width="19" height="18" viewBox="0 0 19 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.875 18C8.531 18 9.875 16.656 9.875 15V12H6.875C5.219 12 3.875 13.344 3.875 15C3.875 16.656 5.219 18 6.875 18Z"
                                fill="#0ACF83"></path>
                            <path d="M3.875 9C3.875 7.344 5.219 6 6.875 6H9.875V12H6.875C5.219 12 3.875 10.656 3.875 9Z"
                                fill="#A259FF"></path>
                            <path d="M3.875 3C3.875 1.344 5.219 0 6.875 0H9.875V6H6.875C5.219 6 3.875 4.656 3.875 3Z"
                                fill="#F24E1E"></path>
                            <path
                                d="M9.87501 0H12.875C14.531 0 15.875 1.344 15.875 3C15.875 4.656 14.531 6 12.875 6H9.87501V0Z"
                                fill="#FF7262"></path>
                            <path
                                d="M15.875 9C15.875 10.656 14.531 12 12.875 12C11.219 12 9.87501 10.656 9.87501 9C9.87501 7.344 11.219 6 12.875 6C14.531 6 15.875 7.344 15.875 9Z"
                                fill="#1ABCFE"></path>
                        </svg>
                    </a>
                    <a class="inline-flex flex-shrink-0 justify-center items-center h-9 w-9 text-gray-600 hover:text-firefly-600 font-medium dark:text-gray-400 dark:hover:text-gray-500"
                        href="https://github.com/htmlstreamofficial/preline" target="_blank">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                            </path>
                        </svg>
                    </a>
                </div>


                <x-admin.dark-switch />
            </div>

            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle p-2.5 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-firefly-600 transition text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800 open"
                    data-hs-collapse="#docs-navbar" aria-controls="docs-navbar" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                        </path>
                    </svg>
                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="docs-navbar"
            class="hs-collapse overflow-hidden transition-all duration-300 basis-full grow ml-auto md:block md:w-auto md:basis-auto md:order-2 open  tracking-wide	"
            style="">
            <div
                class="  font-bold flex flex-col gap-4 mb-5 md:mb-0 md:flex-row md:items-center md:justify-end md:mt-0 md:pl-5 mt-5">
                {{--
                      <a href="{{ url('about') }}" class="ml-6 font-medium hover:text-firefly-600 {{ Request::is('about') ? 'text-firefly-600 font-bold' : '' }}">About us</a>
                      <a href="{{ url('contact') }}" class="ml-6 font-medium hover:text-firefly-600 {{ Request::is('contact') ? 'text-firefly-600 font-bold' : '' }}">Contact us</a> --}}

                <a href="{{ url('/') }}"
                    class=" text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300
                    {{ Request::is('home') ? 'font-bold text-firefly-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">
                    <svg class="block w-4 h-4 md:hidden" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z">
                        </path>
                        <path
                            d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z">
                        </path>
                    </svg>
                    Home

                </a>
                <a href="{{ url('about') }}"
                    class=" text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300
                    {{ Request::is('about') ? 'font-bold text-gray-600 dark:text-firefly-100 hover:text-firefly-400 hover:dark:text-firefly-200' : '' }} ">
                    <svg class="block w-4 h-4 md:hidden" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z">
                        </path>
                        <path
                            d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z">
                        </path>
                    </svg>
                    About

                </a>




                <div
                    class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] py-3 md:py-4">
                    <span type="button"
                        class=" flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500">
                        <svg class="block w-4 h-4 md:hidden mr-3 " xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z">
                            </path>
                            <path
                                d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z">
                            </path>
                        </svg>
                        <span
                            class="font-bold text-firefly-700 dark:text-firefly-200 hover:text-firefly-500 hover:dark:text-firefly-300
                         ">Institutes</span>
                        <svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </span>

                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full right-0 md:w-[900px] min-w-[15rem] bg-white md:shadow-2xl md:px-4 dark:bg-gray-800 dark:divide-gray-700 before:absolute before:-top-5 before:left-0 before:w-full before:h-5">
                        <div class="md:grid  md:grid-cols-3 gap-x-2">

                            <div class="flex flex-col mx-1 md:mx-0 py-2">

                                <a class="group flex gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                                    href="#">
                                    <svg class="flex-shrink-0 w-6 h-6 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                    </svg>
                                    <div class="grow">
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Support Docs</p>
                                        <p
                                            class="text-sm text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                            Explore advice and explanations for all of Preline's features.</p>
                                    </div>
                                </a>

                                <a class="group flex gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                                    href="#">
                                    <svg class="flex-shrink-0 w-6 h-6 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z" />
                                    </svg>
                                    <div class="grow">
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Integrations</p>
                                        <p
                                            class="text-sm text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                            Discover the huge range of tools that Preline integrates with.</p>
                                    </div>
                                </a>
                                <a class="group flex gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                                    href="#">
                                    <svg class="flex-shrink-0 w-6 h-6 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z" />
                                    </svg>
                                    <div class="grow">
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Integrations</p>
                                        <p
                                            class="text-sm text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                            Discover the huge range of tools that Preline integrates with.</p>
                                    </div>
                                </a>

                                <a class="group flex gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                                    href="#">
                                    <svg class="flex-shrink-0 w-6 h-6 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z" />
                                        <path
                                            d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z" />
                                    </svg>
                                    <div class="grow">
                                        <p class="font-medium text-gray-800 dark:text-gray-200">API Reference</p>
                                        <p
                                            class="text-sm text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                            Build custom integrations with our first-class API.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="flex flex-col mx-1 md:mx-0 py-2">
                                <a class="group flex gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                                    href="#">
                                    <svg class="flex-shrink-0 w-6 h-6 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                    </svg>
                                    <div class="grow">
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Help Center</p>
                                        <p
                                            class="text-sm text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                            Learn how to install, set up, and use Preline.</p>
                                    </div>
                                </a>

                                <a class="group flex gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                                    href="#">
                                    <svg class="flex-shrink-0 w-6 h-6 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z" />
                                    </svg>
                                    <div class="grow">
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Developer Hub</p>
                                        <p
                                            class="text-sm text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                            Learn how to integrate or build on top of Preline.</p>
                                    </div>
                                </a>
                                <a class="group flex gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                                    href="#">
                                    <svg class="flex-shrink-0 w-6 h-6 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z" />
                                    </svg>
                                    <div class="grow">
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Developer Hub</p>
                                        <p
                                            class="text-sm text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                            Learn how to integrate or build on top of Preline.</p>
                                    </div>
                                </a>

                                <a class="group flex gap-x-5 text-gray-800 hover:bg-gray-50 rounded-md p-4 dark:text-gray-200 dark:hover:bg-gray-900"
                                    href="#">
                                    <svg class="flex-shrink-0 w-6 h-6 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                    </svg>
                                    <div class="grow">
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Community Forum</p>
                                        <p
                                            class="text-sm text-gray-500 group-hover:text-gray-800 dark:group-hover:text-gray-200">
                                            Learn, share, and connect with other Preline users.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="aspect-w-16 aspect-h-9 md:relative">
                                <img class="w-full object-cover md:absolute h-full"
                                    src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80"
                                    alt="Image Description">
                            </div>

                        </div>
                    </div>
                </div>
                <a class="inline-flex items-center gap-x-3 text-black font-medium hover:text-gray-600 transition dark:text-gray-200 dark:hover:text-gray-400 "
                    href="./figma.html">
                    <svg class="block w-4 h-4 md:hidden" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.81533 12.5C7.81533 13.5989 6.91234 14.5 5.78901 14.5C4.66568 14.5 3.7627 13.5989 3.7627 12.5C3.7627 11.4011 4.66568 10.5 5.78901 10.5H7.81533V12.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M3.7627 7.5C3.7627 6.40107 4.66568 5.5 5.78901 5.5H7.81533V9.5H5.78901C4.66568 9.5 3.7627 8.59893 3.7627 7.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M3.7627 2.5C3.7627 1.40107 4.66568 0.5 5.78901 0.5H7.81533V4.5H5.78901C4.66568 4.5 3.7627 3.59893 3.7627 2.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M8.81543 0.5H10.8417C11.9651 0.5 12.8681 1.40107 12.8681 2.5C12.8681 3.59893 11.9651 4.5 10.8417 4.5H8.81543V0.5Z"
                            stroke="currentColor"></path>
                        <path
                            d="M12.8681 7.5C12.8681 8.59893 11.9651 9.5 10.8417 9.5C9.71841 9.5 8.81543 8.59894 8.81543 7.5C8.81543 6.40106 9.71841 5.5 10.8417 5.5C11.9651 5.5 12.8681 6.40107 12.8681 7.5Z"
                            stroke="currentColor"></path>
                    </svg>
                    COSTrAD
                </a>
                <a href="">
                    <span
                        class="inline bg-firefly-50 border border-firefly-300 text-firefly-600 text-[.6125rem] leading-4 uppercase rounded-full py-1 px-3 dark:bg-firefly-900/[.75] dark:border-firefly-700 dark:text-firefly-500">Admissions</span>
                </a>
            </div>
        </div>
    </nav>
</header>
