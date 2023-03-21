<div class="text-center grid place-items-center space-y-12 py-16">

    {{-- Title --}}
    <div class="max-w-5xl space-y-6 ">
        <h2 class="mt-4 max-w-5xl text-slate-900 text-3xl sm:text-6xl tracking-tight font-bold dark:text-white ">Our
            Training Institutes</h2>
        <p class=" text-3xl font-bold
         text-slate-800 px-5 text-gradient1">
            Join us in raising champions with the wherewithal to effect systematic and sustainable transformation in
            every sphere of society.
        </p>

    </div>

    {{-- Image --}}
    <div class="mt-8 md:mx-5 grid gap-px sm:grid-cols-2 md:grid-cols-4">

        @forelse ($institutes as $institute)
            <a href="{{ route('institute.show', [$institute->slug]) }}"
                class="relative  p-4 sm:py-8 sm:px-6 transition duration-300 z-10 before:absolute rounded-md hover:bg-gray-100/50 dark:bg-slate-900 dark:hover:bg-slate-800">
                <div class="flex text-left">
                    <img class="object-cover w-20 h-20 mr-4 rounded-full shadow-md"
                        src="{{ asset($institute->institute_logo) }}" alt="Person" />
                    <div class="flex flex-col justify-center">
                        <p class="text-lg font-bold uppercase">{{ $institute->acronym }}</p>
                        <p class="text-sm text-gray-500">{{ $institute->name }}</p>
                    </div>
                </div>
            </a>
        @empty
            <div></div>
        @endforelse

    </div>


    <!-- Icon Blocks -->
    <div class="max-w-[75rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto hidden">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-12 text-left">
            <!-- Icon Block -->
            <div>
                <svg class="w-9 h-9 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" viewBox="0 0 16 16">
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
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Responsive, and mobile-first project on the web</p>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div>
                <svg class="w-9 h-9 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
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
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Components are easily customized and extendable</p>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div>
                <svg class="w-9 h-9 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" viewBox="0 0 16 16">
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
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Every component and plugin is well documented</p>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div>
                <svg class="w-9 h-9 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" viewBox="0 0 16 16">
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
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Contact us 24 hours a day, 7 days a week</p>
                </div>
            </div>
            <!-- End Icon Block -->
        </div>
    </div>
    <!-- End Icon Blocks -->

    <div class="text-center w-full mx-auto">
        <a href="{{ url('/institutes') }}"> <button class="cbutton !py-1 w-24">More On Our Institutes</button>
        </a>
    </div>



</div>
