<div id="application-sidebar"
    class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] md:w-2/12 bg-white border-r border-firefly-200 pt-5 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 dark:scrollbar-y dark:bg-firefly-900 dark:border-firefly-700">
    <div class="px-6">
        <a class="flex-none text-xl font-semibold dark:text-white" href="{{ url('/') }}"
            aria-label="Brand">{{ config('app.name') }}</a>
    </div>

    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
        <ul class="space-y-1.5">

            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-400 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('/dashboard') }}">
                    <span class="flex ">
                        <x-heroicon-o-building-office-2 class="w-5 h-5 text-current" />
                    </span>
                    <span class=" capitalize">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-firefly-900 hover:bg-firefly-100 focus:ring-2 focus:ring-blue-500 dark:text-firefly-400 dark:hover:bg-firefly-700 dark:hover:text-firefly-300"
                    href="{{ url('/dashboard') }}">
                    <span class="flex ">
                        <x-heroicon-o-user-circle class="w-5 h-5 text-current" />
                    </span>
                    <span class=" capitalize">User</span>
                </a>
            </li>


        </ul>
    </nav>
</div>
