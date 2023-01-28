<x-app-layout>
    <x-admin.pageheader model-name="Insurance" description="Maintain <br /> Insurance" add-button="false" class="mx-4">
        <x-heroicon-o-lifebuoy class="w-6 h-6 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-4">

            <div class="flex justify-end items-center md:px-4">
                <x-admin.generic-button onclick="Livewire.emit('openModal', 'admin.insurance.add-insurance')">
                    <span class="flex items-center justify-center gap-2">
                        <x-heroicon-o-plus-circle class="w-5 h-5 text-yellow-500 text-xs " />
                        Add insurance Company
                    </span>
                </x-admin.generic-button>
            </div>



            <div class="md:px-4">
                <table class="w-full text-left shadow">
                    <thead class="text-xs">
                        <tr
                            class=" bg-gray-200 dark:border-secondary-900 dark:bg-secondary-900
             text-secondary-900  dark:text-secondary-400 uppercase ">

                            <th class="font-normal px-4 py-2  border-b border-gray-200 dark:border-gray-800">Company
                            </th>
                            <th
                                class="font-normal py-2  border-b border-gray-200 dark:border-gray-800 hidden md:table-cell">
                                Address</th>
                            <th class="font-normal py-2  border-b border-gray-200 dark:border-gray-800">Coverage ( % )</th>
                            <th
                                class="font-normal py-2  border-b border-gray-200 dark:border-gray-800 hidden md:table-cell">
                                Telephone</th>
                            <th class="font-normal py-2  border-b border-gray-200 dark:border-gray-800">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 dark:text-gray-100 text-sm">
                        @forelse ($insurances as $insurance)
                        <tr>

                                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                                    <div class="flex items-center gap-4">
                                        <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white dark:ring-firefly-900"
                                        src="{{ $insurance->company_logo }}" alt="{{ $insurance->name }}">
                                        <div> {{ $insurance->name }}<br> <span>{{ $insurance->email }}</span>
                                            </div>

                                    </div>
                                </td>
                                <td
                                    class=" py-2 px-1 border-b border-gray-200 dark:border-gray-800 md:table-cell hidden ">
                                    {{ $insurance->address }}
                                </td>
                                <td class=" py-2 pr-2  border-b border-gray-200 dark:border-gray-800 ">
                                    <div class="flex justify-start items-center gap-2" x-data="scrollProgress">

                                        <div class="overflow-hidden h-2 text-xs flex rounded bg-firefly-200 w-[100%]">
                                            <div style="width: {{ $insurance->percentage }}%"
                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-firefly-500">
                                            </div>

                                        </div>
                                        <div class=" text-sm text-secondary-400 " x-text="` {{ $insurance->percentage }}%`"></div>
                                    </div>
                                </td>
                                <td
                                    class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800  md:table-cell hidden">
                                    <div class="flex items-start">
                                        <div class="sm:flex hidden flex-col">
                                           {{ $insurance->telephone_1 }}
                                        </div>

                                    </div>
                                </td>
                                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">

                                    <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                                        <button class=h-8 items-center justify-center ml-auto text-gray-400 w-8">
                                            <svg viewBox="0 0 24 24" class="w-5" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu w-auto transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                            aria-labelledby="hs-split-dropdown">
                                            <span class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300  cursor-pointer "
                                                 onclick="Livewire.emit('openModal', 'admin.insurance.update-insurance', {{ json_encode([$insurance->id]) }})">
                                                View
                                            </span>
                                            <span class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer "
                                                 onclick="Livewire.emit('openModal', 'admin.insurance.update-insurance', {{ json_encode([$insurance->id]) }})">
                                                Update
                                            </span>
                                            <span class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer "
                                            onclick="Livewire.emit('openModal', 'admin.insurance.delete-insurance', {{ json_encode([$insurance->id]) }})" >
                                                Delete
                                            </span>

                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @empty
                            <div class="min-h-[15rem] flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
                                  <svg class="max-w-[5rem]" viewBox="0 0 375 428" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M254.509 253.872L226.509 226.872" class="stroke-gray-400 dark:stroke-white" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
                                    <path d="M237.219 54.3721C254.387 76.4666 264.609 104.226 264.609 134.372C264.609 206.445 206.182 264.872 134.109 264.872C62.0355 264.872 3.60864 206.445 3.60864 134.372C3.60864 62.2989 62.0355 3.87207 134.109 3.87207C160.463 3.87207 184.993 11.6844 205.509 25.1196" class="stroke-gray-400 dark:stroke-white" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
                                    <rect x="270.524" y="221.872" width="137.404" height="73.2425" rx="36.6212" transform="rotate(40.8596 270.524 221.872)" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                                    <ellipse cx="133.109" cy="404.372" rx="121.5" ry="23.5" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                                    <path d="M111.608 188.872C120.959 177.043 141.18 171.616 156.608 188.872" class="stroke-gray-400 dark:stroke-white" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
                                    <ellipse cx="96.6084" cy="116.872" rx="9" ry="12" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                                    <ellipse cx="172.608" cy="117.872" rx="9" ry="12" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                                    <path d="M194.339 147.588C189.547 148.866 189.114 142.999 189.728 138.038C189.918 136.501 191.738 135.958 192.749 137.131C196.12 141.047 199.165 146.301 194.339 147.588Z" class="fill-gray-400 dark:fill-white" fill="currentColor"/>
                                  </svg>
                                  <p class="mt-5 text-sm text-gray-500 dark:text-gray-500">
                                    {{ __('No data to show') }}
                                  </p>
                                </div>
                              </div>
                            @endforelse

                        </tbody>
                </table>
                <div class="py-5 ">
                    {{ $insurances->links() }}
                </div>


            </div>
        </div>



    </x-admin.pageheader>

