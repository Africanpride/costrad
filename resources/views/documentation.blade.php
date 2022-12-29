<x-app-layout>
    <x-admin.pageheader model-name="Documentation" description="Application <br /> Documentation" add-button="false" class="mx-4">
        <x-heroicon-o-question-mark-circle class="w-6 h-6 text-current" />
    </x-admin-pageheader>

        <div class="p-4">


<button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#add-staff">
    Vertically centered scrollable modal
  </button>


{{ Auth::user()->lastSuccessfulLoginAt()->diffForHumans() }}

            <div
                class="relative overflow-hidden before:absolute before:top-1/2 before:left-1/2 before:bg-[url('../svg/component/hyperdrive.svg')] before:bg-no-repeat before:bg-center before:w-full before:h-96 before:-z-[1] before:transform before:-translate-y-1/2 before:-translate-x-1/2 dark:before:bg-[url('../svg/component/hyperdrive-dark.svg')]">
                <div class="max-w-3xl mx-auto relative text-center px-4 sm:px-6 lg:px-8 py-10 md:py-24">
                    <div
                        class="inline-block bg-gradient-to-tl from-blue-600 via-transparent to-purple-400 p-px rounded-md mb-3">
                        <div
                            class="bg-white rounded-md py-1.5 px-3 text-3xl font-bold md:text-4xl lg:text-5xl lg:leading-tight dark:bg-slate-900">
                            <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-purple-400 text-transparent">
                                120+
                            </span>
                        </div>
                    </div>

                    <h1 class="text-3xl font-bold md:text-4xl lg:text-5xl lg:leading-tight dark:text-white">Application
                        Documentation With Examples</h1>
                    <p class="mt-4 md:text-lg text-gray-600 dark:text-gray-400">Quickly get a project started with any of
                        our
                        examples ranging from using parts of the UI to custom components and layouts using Tailwind CSS.
                    </p>

                    <div class="mt-5">
                        <a class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800"
                            href="https://github.com/htmlstreamofficial/preline/tree/main/examples/html"
                            target="_blank">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                                </path>
                            </svg>
                            Download examples
                        </a>
                    </div>
                </div>
            </div>

            <!-- Icon Blocks -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-12">
                    <!-- Icon Block -->
                    <div>
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        <div
                            class="bg-gradient-to-r from-gray-200 to-white/0 h-0.5 mt-6 dark:from-gray-700 dark:to-slate-900/0">
                            <div class="bg-gray-400 w-9 h-0.5"></div>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Responsive</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">Responsive, and mobile-first project on the
                                web
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div>
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
                            <path
                                d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
                            <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
                        </svg>
                        <div
                            class="bg-gradient-to-r from-gray-200 to-white/0 h-0.5 mt-6 dark:from-gray-700 dark:to-slate-900/0">
                            <div class="bg-gray-400 w-9 h-0.5"></div>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Customizable</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">Components are easily customized and
                                extendable
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div>
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                            <path
                                d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                        </svg>
                        <div
                            class="bg-gradient-to-r from-gray-200 to-white/0 h-0.5 mt-6 dark:from-gray-700 dark:to-slate-900/0">
                            <div class="bg-gray-400 w-9 h-0.5"></div>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Documentation</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">Every component and plugin is well
                                documented
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div>
                        <svg class="w-9 h-9 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        <div
                            class="bg-gradient-to-r from-gray-200 to-white/0 h-0.5 mt-6 dark:from-gray-700 dark:to-slate-900/0">
                            <div class="bg-gray-400 w-9 h-0.5"></div>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">24/7 Support</h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">Contact us 24 hours a day, 7 days a week
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
            </div>
            <!-- End Icon Blocks -->

            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            <div class="container mx-auto">
                <div class="border-b border-firefly-200 px-4 dark:border-firefly-700">
                    <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                        <button type="button"
                            class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-firefly-500 active"
                            id="basic-tabs-item-1" data-hs-tab="#basic-tabs-1" aria-controls="basic-tabs-1"
                            role="tab">
                            Tab 1
                        </button>
                        <button type="button"
                            class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-firefly-500"
                            id="basic-tabs-item-2" data-hs-tab="#basic-tabs-2" aria-controls="basic-tabs-2"
                            role="tab">
                            Tab 2
                        </button>
                        <button type="button"
                            class="hs-tab-active:font-semibold hs-tab-active:border-firefly-600 hs-tab-active:text-firefly-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-firefly-500"
                            id="basic-tabs-item-3" data-hs-tab="#basic-tabs-3" aria-controls="basic-tabs-3"
                            role="tab">
                            Tab 3
                        </button>
                    </nav>
                </div>

                <div class="mt-3 p-4">
                    <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">
                        <p class="text-gray-500 dark:text-gray-400">
                            This is the <em class="font-semibold text-gray-800 dark:text-gray-200">first</em> item's
                            tab
                            body.
                        </p>
                    </div>
                    <div id="basic-tabs-2" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-2">
                        <p class="text-gray-500 dark:text-gray-400">
                            This is the <em class="font-semibold text-gray-800 dark:text-gray-200">second</em> item's
                            tab
                            body.
                        </p>
                    </div>
                    <div id="basic-tabs-3" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-3">
                        <p class="text-gray-500 dark:text-gray-400">
                            This is the <em class="font-semibold text-gray-800 dark:text-gray-200">third</em> item's
                            tab
                            body.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Jumbotron -->
            <div class="p-6 shadow rounded-lg bg-firefly-50 dark:bg-slate-800 dark:text-white ">
                {{-- <h2 class="font-semibold text-3xl mb-5">Hello world!</h2> --}}
                <p>
                    This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                    to featured content or information.
                </p>
                <hr class="my-6 border-firefly-300" />
                <p>
                    It uses utility classes for typography and spacing to space content out within the larger
                    container.
                </p>
                <button type="button"
                    class="inline-block px-6 py-2.5 mt-4 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    Learn more
                </button>
            </div>
            <!-- Jumbotron -->

            <div
                class="bg-firefly-50 dark:bg-slate-800 dark:text-firefly-300 flex items-center justify-between my-5  py-10 p-6 shadow rounded-lg">
                <div class="flex items-stretch">
                    <div class=" text-sm">Maintain <br> Clinic Settings </div>
                    <div class="h-10 border border-l  border-firefly-200 dark:border-firefly-800 mx-4"></div>
                    <div class="flex flex-nowrap  ">
                        <div class="h-9 w-9">
                            <img class="object-cover w-full h-full rounded-full"
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->full_name }}">
                        </div>
                    </div>
                </div>

                <div class="hidden md:block">
                    <div class="badge badge-neutral badge-lg py-4 ">
                        <svg class="w-5 h-5 mr-2 text-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                            fill="none">
                            <path
                                d="M16 5C14.8954 5 14 5.89543 14 7C14 8.10457 14.8954 9 16 9C17.1046 9 18 8.10457 18 7C18 5.89543 17.1046 5 16 5ZM12 7C12 4.79086 13.7909 3 16 3C18.2091 3 20 4.79086 20 7C20 9.20914 18.2091 11 16 11C13.7909 11 12 9.20914 12 7ZM25.5 6C24.6716 6 24 6.67157 24 7.5C24 8.32843 24.6716 9 25.5 9C26.3284 9 27 8.32843 27 7.5C27 6.67157 26.3284 6 25.5 6ZM22 7.5C22 5.567 23.567 4 25.5 4C27.433 4 29 5.567 29 7.5C29 9.433 27.433 11 25.5 11C23.567 11 22 9.433 22 7.5ZM5 7.5C5 6.67157 5.67157 6 6.5 6C7.32843 6 8 6.67157 8 7.5C8 8.32843 7.32843 9 6.5 9C5.67157 9 5 8.32843 5 7.5ZM6.5 4C4.567 4 3 5.567 3 7.5C3 9.433 4.567 11 6.5 11C8.433 11 10 9.433 10 7.5C10 5.567 8.433 4 6.5 4ZM8.65108 24.5052C8.17749 24.8179 7.61001 25 7 25C5.34315 25 4 23.6569 4 22V15.5C4 15.2239 4.22386 15 4.5 15H8.53095C8.62463 14.2488 8.92663 13.5622 9.37731 13H4.5C3.11929 13 2 14.1193 2 15.5V22C2 24.7614 4.23858 27 7 27C7.84011 27 8.63182 26.7928 9.32683 26.4267C9.01901 25.8285 8.78927 25.1835 8.65108 24.5052ZM22.6732 26.4267C23.3682 26.7928 24.1599 27 25 27C27.7614 27 30 24.7614 30 22V15.5C30 14.1193 28.8807 13 27.5 13H22.6227C23.0734 13.5622 23.3754 14.2488 23.4691 15H27.5C27.7761 15 28 15.2239 28 15.5V22C28 23.6569 26.6569 25 25 25C24.39 25 23.8225 24.8179 23.3489 24.5052C23.2107 25.1835 22.981 25.8285 22.6732 26.4267ZM12.5 13C11.1193 13 10 14.1193 10 15.5V23C10 26.3137 12.6863 29 16 29C19.3137 29 22 26.3137 22 23V15.5C22 14.1193 20.8807 13 19.5 13H12.5ZM12 15.5C12 15.2239 12.2239 15 12.5 15H19.5C19.7761 15 20 15.2239 20 15.5V23C20 25.2091 18.2091 27 16 27C13.7909 27 12 25.2091 12 23V15.5Z"
                                fill="currentColor"></path>
                        </svg> Settings
                    </div>
                </div>

            </div>



            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <x-jet-welcome />
                    </div>
                </div>
            </div>

        </div>
</x-app-layout>
