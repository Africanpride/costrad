<x-admin.insurance-modal formAction="updateInsurance">
    <x-slot name="title">
        Add New Insurance
    </x-slot>

    <x-slot name="content">


        <div class="space-y-4">

            <div class="">

                <div x-data="{ percentage: 5 }" class="w-full">
                    <label for="percentage" class="font-bold text-gray-700 dark:text-gray-300 flex justify-start items-center gap-1">


                        <span
                            class="inline-flex items-center gap-x-1 bg-gray-200 font-medium text-gray-800 text-xs leading-4 rounded-full py-0.5 px-2 dark:bg-gray-700 dark:text-gray-300">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z">
                                </path>
                            </svg>
                            % of Insurance Coverage
                        </span>
                    </label>
                    <div class="flex justify-start items-center gap-2">
                        <input type="range" min="0" name="percentage" wire:model="percentage" max="100"
                            x-model="percentage"
                            class="w-full h-2 bg-blue-100 dark:bg-slate-900 appearance-none rounded" />
                        <span class="font-bold text-gray-700 dark:text-gray-300" x-text="percentage + `%`"></span>
                    </div>
                </div>
            </div>
            <div>
                <input wire:model="name" id="name" type="text"
                    class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                    placeholder="Company Name">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input wire:model="address" id="name" type="text"
                    class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                    placeholder="Company Address">
                @error('address')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-2">

                <div>
                    <input wire:model="country" id="country" type="text"
                        class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                        placeholder="Country">
                    @error('country')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <input wire:model="telephone_1" id="telephone" type="text"
                        class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                        placeholder="Company Telephone">
                    @error('telephone_1')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div>
                {{-- <label for="hs-leading-icon" class="block text-xs dark:text-white">Email address</label> --}}
                <div class="relative">
                    <input wire:model="email" type="text" id="hs-leading-icon" name="hs-leading-icon"
                        class="py-2 px-3 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                        placeholder="you@insurance.com">
                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                    </div>
                </div>
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            </div>

            <div>
                {{-- <label for="small-file-input" class="sr-only">Add Company Logo</label> --}}
                <input wire:model="logo" type="file" name="small-file-input" id="small-file-input"
                    class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-100 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                @error('logo')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


        </div>

    </x-slot>

    <x-slot name="buttons">
        <x-admin.reset-button wire:click="$emit('closeModal')">Cancel</x-admin.reset-button>


        <x-admin.submit-button>Submit</x-admin.submit-button>

    </x-slot>

</x-admin.insurance-modal>
