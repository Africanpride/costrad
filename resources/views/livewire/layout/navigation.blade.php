<div id="application-sidebar" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] w-64 bg-white border-r border-firefly-200 pt-7 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 dark:scrollbar-y dark:bg-firefly-800 dark:border-firefly-700">
    <div class="px-6">
      <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">{{ config('app.name') }}</a>
    </div>

    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
      <ul class="space-y-1.5">
        <li>
          <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-firefly-100 text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-900 dark:text-white" href="javascript:;">
            <x-heroicon-o-building-office-2 class="w-5 h-5 text-current" />
            <span class="flex-1 capitalize">Dashboard</span>
          </a>
        </li>

        <li class="hs-accordion" id="users-accordion">
          <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-800 dark:hover:bg-firefly-900 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white" href="javascript:;">
            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
            </svg>
            Users

            <svg class="hs-accordion-active:block ml-auto hidden w-3 h-3 text-firefly-600 group-hover:text-firefly-500 dark:text-firefly-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </svg>

            <svg class="hs-accordion-active:hidden ml-auto block w-3 h-3 text-firefly-600 group-hover:text-firefly-500 dark:text-firefly-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </svg>
          </a>

          <div id="users-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
            <ul class="hs-accordion-group pl-3 pt-2" data-hs-accordion-always-open>
              <li class="hs-accordion" id="users-accordion-sub-1">
                <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-800 dark:hover:bg-firefly-900 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white" href="javascript:;">
                  Sub Menu 1

                  <svg class="hs-accordion-active:block ml-auto hidden w-3 h-3 text-firefly-600 group-hover:text-firefly-500 dark:text-firefly-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                  </svg>

                  <svg class="hs-accordion-active:hidden ml-auto block w-3 h-3 text-firefly-600 group-hover:text-firefly-500 dark:text-firefly-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                  </svg>
                </a>

                <div id="users-accordion-sub-1-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                  <ul class="pt-2 pl-2">
                    <li>
                      <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-800 dark:text-slate-400 dark:hover:text-slate-300" href="javascript:;">
                        Link 1
                      </a>
                    </li>

                  </ul>
                </div>
              </li>
              <li class="hs-accordion" id="users-accordion-sub-2">
                <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-800 dark:hover:bg-firefly-900 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white" href="javascript:;">
                  Sub Menu 2

                  <svg class="hs-accordion-active:block ml-auto hidden w-3 h-3 text-firefly-600 group-hover:text-firefly-500 dark:text-firefly-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                  </svg>

                  <svg class="hs-accordion-active:hidden ml-auto block w-3 h-3 text-firefly-600 group-hover:text-firefly-500 dark:text-firefly-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                  </svg>
                </a>

                <div id="users-accordion-sub-2-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden pl-2">
                  <ul class="pt-2 pl-2">
                    <li>
                      <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-800 dark:text-slate-400 dark:hover:text-slate-300" href="javascript:;">
                        Link 1
                      </a>
                    </li>
                    <li>
                      <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-800 dark:text-slate-400 dark:hover:text-slate-300" href="javascript:;">
                        Link 2
                      </a>
                    </li>
                    <li>
                      <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-800 dark:text-slate-400 dark:hover:text-slate-300" href="javascript:;">
                        Link 3
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>

        <li class="hs-accordion" id="account-accordion">
          <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-800 dark:hover:bg-firefly-900 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white" href="javascript:;">
            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            Account

            <svg class="hs-accordion-active:block ml-auto hidden w-3 h-3 text-firefly-600 group-hover:text-firefly-500 dark:text-firefly-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </svg>

            <svg class="hs-accordion-active:hidden ml-auto block w-3 h-3 text-firefly-600 group-hover:text-firefly-500 dark:text-firefly-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </svg>
          </a>

          <div id="account-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
            <ul class="pt-2 pl-2">
              <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-firefly-100 dark:bg-firefly-800 dark:text-slate-400 dark:hover:text-slate-300" href="javascript:;">
                  Link 1
                </a>
              </li>

            </ul>
          </div>
        </li>


      </ul>
    </nav>
  </div>
