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



            <div class="md:px-8">
                <table class="w-full text-left">
                    <thead class="text-xs">
                        <tr
                            class=" bg-gray-200 dark:border-secondary-900 dark:bg-secondary-900
             text-secondary-900  dark:text-secondary-400 uppercase ">
                            <th class="font-normal px-3 pt-0 border-b border-gray-200 dark:border-gray-800">Identity
                            </th>
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
                        @forelse ($insurances as $insurance)
                        <tr>
                                <td class="sm:p-3 py-2 px-3 border-b border-gray-200 dark:border-gray-800">
                                    <div class="flex items-center">
                                        {{-- <svg viewBox="0 0 24 24" class="w-4 mr-2 text-yellow-500" stroke="currentColor"
                                            stroke-width="3" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg> --}}
                                        {{ $insurance->id }}
                                    </div>
                                </td>
                                <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                                    <div class="flex items-center gap-4">
                                        <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white dark:ring-firefly-900"
                                        src={{ $insurance->company_logo }} alt="{{ $insurance->name }}">
                                        <div> {{ $insurance->name }}<br> <span>{{ $insurance->email }}</span></div>

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
                            {{ __('empty Barrels') }}
                            @endforelse

                        </tbody>
                </table>
                <div class="py-5 ">
                    {{ $insurances->links() }}
                </div>


            </div>
        </div>



    </x-admin.pageheader>

