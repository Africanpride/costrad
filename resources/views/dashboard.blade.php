<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <div class="border-b border-gray-200 px-4 dark:border-gray-700">
            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
              <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-white active" id="basic-tabs-item-1" data-hs-tab="#basic-tabs-1" aria-controls="basic-tabs-1" role="tab">
                Tab 1
              </button>
              <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-white" id="basic-tabs-item-2" data-hs-tab="#basic-tabs-2" aria-controls="basic-tabs-2" role="tab">
                Tab 2
              </button>
              <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-white" id="basic-tabs-item-3" data-hs-tab="#basic-tabs-3" aria-controls="basic-tabs-3" role="tab">
                Tab 3
              </button>
            </nav>
          </div>

          <div class="mt-3 p-4">
            <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">
              <p class="text-gray-500 dark:text-gray-400">
                This is the <em class="font-semibold text-gray-800 dark:text-gray-200">first</em> item's tab body.
              </p>
            </div>
            <div id="basic-tabs-2" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-2">
              <p class="text-gray-500 dark:text-gray-400">
                This is the <em class="font-semibold text-gray-800 dark:text-gray-200">second</em> item's tab body.
              </p>
            </div>
            <div id="basic-tabs-3" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-3">
              <p class="text-gray-500 dark:text-gray-400">
                This is the <em class="font-semibold text-gray-800 dark:text-gray-200">third</em> item's tab body.
              </p>
            </div>
          </div>
    </div>
    <div class="bg-base-300 flex items-center justify-between my-5 px-5 py-10">
        <div class="flex items-stretch">
            <div class="text-current text-xs">Maintain <br> Clinic Settings </div>
            <div class="h-10 border border-l  border-base-200 mx-4"></div>
            <div class="flex flex-nowrap  ">
                <div class="h-9 w-9">
                    <img class="object-cover w-full h-full rounded-full" src="https://ui-avatars.com/api/?name=Kwame Opoku">
                </div>
            </div>
        </div>

        <div class="hidden md:block">
            <div class="badge badge-neutral badge-lg py-4 ">
                <svg class="w-5 h-5 mr-2 text-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none"><path d="M16 5C14.8954 5 14 5.89543 14 7C14 8.10457 14.8954 9 16 9C17.1046 9 18 8.10457 18 7C18 5.89543 17.1046 5 16 5ZM12 7C12 4.79086 13.7909 3 16 3C18.2091 3 20 4.79086 20 7C20 9.20914 18.2091 11 16 11C13.7909 11 12 9.20914 12 7ZM25.5 6C24.6716 6 24 6.67157 24 7.5C24 8.32843 24.6716 9 25.5 9C26.3284 9 27 8.32843 27 7.5C27 6.67157 26.3284 6 25.5 6ZM22 7.5C22 5.567 23.567 4 25.5 4C27.433 4 29 5.567 29 7.5C29 9.433 27.433 11 25.5 11C23.567 11 22 9.433 22 7.5ZM5 7.5C5 6.67157 5.67157 6 6.5 6C7.32843 6 8 6.67157 8 7.5C8 8.32843 7.32843 9 6.5 9C5.67157 9 5 8.32843 5 7.5ZM6.5 4C4.567 4 3 5.567 3 7.5C3 9.433 4.567 11 6.5 11C8.433 11 10 9.433 10 7.5C10 5.567 8.433 4 6.5 4ZM8.65108 24.5052C8.17749 24.8179 7.61001 25 7 25C5.34315 25 4 23.6569 4 22V15.5C4 15.2239 4.22386 15 4.5 15H8.53095C8.62463 14.2488 8.92663 13.5622 9.37731 13H4.5C3.11929 13 2 14.1193 2 15.5V22C2 24.7614 4.23858 27 7 27C7.84011 27 8.63182 26.7928 9.32683 26.4267C9.01901 25.8285 8.78927 25.1835 8.65108 24.5052ZM22.6732 26.4267C23.3682 26.7928 24.1599 27 25 27C27.7614 27 30 24.7614 30 22V15.5C30 14.1193 28.8807 13 27.5 13H22.6227C23.0734 13.5622 23.3754 14.2488 23.4691 15H27.5C27.7761 15 28 15.2239 28 15.5V22C28 23.6569 26.6569 25 25 25C24.39 25 23.8225 24.8179 23.3489 24.5052C23.2107 25.1835 22.981 25.8285 22.6732 26.4267ZM12.5 13C11.1193 13 10 14.1193 10 15.5V23C10 26.3137 12.6863 29 16 29C19.3137 29 22 26.3137 22 23V15.5C22 14.1193 20.8807 13 19.5 13H12.5ZM12 15.5C12 15.2239 12.2239 15 12.5 15H19.5C19.7761 15 20 15.2239 20 15.5V23C20 25.2091 18.2091 27 16 27C13.7909 27 12 25.2091 12 23V15.5Z" fill="currentColor"></path></svg>            Settings
            </div>
        </div>

    </div>
    <button className="absolute bottom-5 right-5 w-10 h-10 rounded-full bg-gray-800 dark:bg-gray-900 flex justify-center items-center text-white" id="theme-toggle">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fillRule="evenodd" clipRule="evenodd" d="M12.2256 2.00253C9.59172 1.94346 6.93894 2.9189 4.92893 4.92891C1.02369 8.83415 1.02369 15.1658 4.92893 19.071C8.83418 22.9763 15.1658 22.9763 19.0711 19.071C21.0811 17.061 22.0565 14.4082 21.9975 11.7743C21.9796 10.9772 21.8669 10.1818 21.6595 9.40643C21.0933 9.9488 20.5078 10.4276 19.9163 10.8425C18.5649 11.7906 17.1826 12.4053 15.9301 12.6837C14.0241 13.1072 12.7156 12.7156 12 12C11.2844 11.2844 10.8928 9.97588 11.3163 8.0699C11.5947 6.81738 12.2094 5.43511 13.1575 4.08368C13.5724 3.49221 14.0512 2.90664 14.5935 2.34046C13.8182 2.13305 13.0228 2.02041 12.2256 2.00253ZM17.6569 17.6568C18.9081 16.4056 19.6582 14.8431 19.9072 13.2186C16.3611 15.2643 12.638 15.4664 10.5858 13.4142C8.53361 11.362 8.73568 7.63895 10.7814 4.09281C9.1569 4.34184 7.59434 5.09193 6.34315 6.34313C3.21895 9.46732 3.21895 14.5326 6.34315 17.6568C9.46734 20.781 14.5327 20.781 17.6569 17.6568Z" fill="currentColor" />
        </svg>
      </button>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
