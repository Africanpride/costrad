<x-app-layout>
    <x-admin.pageheader model-name="Insurance" description="Maintain <br /> Insurance" add-button="false" class="mx-4">
        <x-heroicon-o-lifebuoy class="w-6 h-6 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-4">

            <div class="flex justify-end items-center md:px-8">
                <x-admin.generic-button onclick="Livewire.emit('openModal', 'admin.insurance.add-insurance')">
                    <span class="flex items-center justify-center gap-2">
                        <x-heroicon-o-plus-circle class="w-6 h-6 text-yellow-500 text-xs " />
                        Add insurance Company
                    </span>
                </x-admin.generic-button>
            </div>
<div>
    <svg height="100" width="100">
        <circle cx="50" cy="50" r="40" stroke="green" stroke-width="3" fill="transparent" />
      </svg>
</div>

            <div x-data="scrollProgress"
                class="">
                <!-- Building a Progress Ring: https://css-tricks.com/building-progress-ring-quickly/ -->
                <svg class="w-15 h-15">
                    <circle class="text-gray-300" stroke-width="3" stroke="currentColor" fill="transparent"
                        r="10" cx="40" cy="40" />
                    <circle class="text-green-700" stroke-width="4" :stroke-dasharray="circumference"
                        :stroke-dashoffset="circumference - percent / 100 * circumference" stroke-linecap="round"
                        stroke="currentColor" fill="transparent" r="10" cx="40" cy="40" />
                </svg>
                <div class="text-secondary-400">123</div>
            </div>
            {{-- <span class=" text-[4px] text-secondary-400" x-text="`${percent}%`"></span> --}}
        </div>

        <div class="md:px-8">
            <table class="w-full text-left">
                <thead class="text-xs">
                    <tr
                        class=" bg-gray-200 dark:border-secondary-900 dark:bg-secondary-900
             text-secondary-900  dark:text-secondary-400 uppercase ">
                        <th class="font-normal px-3 pt-0 border-b border-gray-200 dark:border-gray-800">Identity</th>
                        <th class="font-normal py-2  border-b border-gray-200 dark:border-gray-800">Company
                        </th>
                        <th
                            class="font-normal py-2  border-b border-gray-200 dark:border-gray-800 hidden md:table-cell">
                            Address</th>
                        <th class="font-normal py-2  border-b border-gray-200 dark:border-gray-800">Percentage
                            %</th>
                        <th
                            class="font-normal py-2  border-b border-gray-200 dark:border-gray-800 hidden md:table-cell">
                            Telephone</th>
                        <th class="font-normal py-2  border-b border-gray-200 dark:border-gray-800">Action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 dark:text-gray-100 text-sm">
                    <tr>
                        <td class="sm:p-3 py-2 px-3 border-b border-gray-200 dark:border-gray-800">
                            <div class="flex items-center">
                                <svg viewBox="0 0 24 24" class="w-4 mr-2 text-yellow-500" stroke="currentColor"
                                    stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                                id
                            </div>
                        </td>
                        <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001"
                                    class="w-7 h-7 p-1.5 mr-2.5 rounded-lg border border-gray-200 dark:border-gray-800">
                                    <path fill="#03a9f4"
                                        d="M425.457 117.739c-3.121-1.838-6.961-1.966-10.197-.341-3.231 1.629-5.416 4.786-5.803 8.384-.384 3.499-.981 6.997-1.728 10.667-20.885 94.784-62.827 140.885-128.256 140.885h-96c-5.062.009-9.42 3.574-10.432 8.533l-32 149.995-5.717 38.187c-3.287 17.365 8.125 34.107 25.489 37.394 1.915.362 3.858.549 5.807.558h64.213c14.718.045 27.55-10 31.04-24.299l25.941-103.701h55.659c65.685 0 111.083-52.373 127.829-147.477 11.054-45.286-7.234-92.668-45.845-118.785z">
                                    </path>
                                    <path fill="#283593"
                                        d="M405.339 38.017C384.261 14.108 354.012.286 322.139.001h-176.64C119.064-.141 96.558 19.2 92.721 45.355L37.873 411.243c-2.627 17.477 9.41 33.774 26.887 36.402 1.586.239 3.189.357 4.793.356h81.92c5.062-.009 9.42-3.574 10.432-8.533l30.187-140.8h87.467c75.904 0 126.059-53.056 149.099-157.867.926-4.178 1.638-8.4 2.133-12.651 5.348-32.335-3.981-65.372-25.452-90.133z">
                                    </path>
                                </svg>
                                <div> Company Name <br> <span>Email Address</span></div>

                            </div>
                        </td>
                        <td
                            class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 md:table-cell hidden ">
                            2200 W San Angelo St, Gilbert, AZ, 85233</td>
                        <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800 text-red-500">-
                            $120.00</td>
                        <td
                            class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800  md:table-cell hidden">
                            <div class="flex items-start">
                                <div class="sm:flex hidden flex-col">
                                    +233 55 239 6524
                                </div>

                            </div>
                        </td>
                        <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">

                            <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                                <button class=h-8 items-center justify-center ml-auto text-gray-400 w-8">
                                    <svg viewBox="0 0 24 24" class="w-5" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                {{-- <button id="hs-split-dropdown" type="button" class="hs-dropdown-toggle relative -ml-[.3125rem] py-3 px-4 inline-flex justify-center items-center gap-2 h-[2.875rem] w-[2.875rem] rounded-r-md border font-medium bg-gray-50 text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                          <span class="sr-only">Toggle Dropdown</span>
                          <svg class="hs-dropdown-open:rotate-180 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                          </svg>
                        </button> --}}

                                <div class="hs-dropdown-menu w-72 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                    aria-labelledby="hs-split-dropdown">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="#">
                                        View
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="#">
                                        Update
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="#">
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>

        </div>
        </div>

    </x-admin.pageheader>
    <script>
        const scrollProgress = () => {
            return {
                init() {
                    window.addEventListener('scroll', () => {
                        let winScroll = document.body.scrollTop || document.documentElement.scrollTop
                        let height = document.documentElement.scrollHeight - document.documentElement
                            .clientHeight
                        this.percent = Math.round((winScroll / height) * 100)
                    })
                },
                circumference: 15 * 2 * Math.PI,
                percent: 0,
            }
        }
    </script>
