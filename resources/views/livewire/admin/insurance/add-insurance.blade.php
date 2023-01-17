<x-admin.insurance-modal formAction="addInsurance">
    <x-slot name="title">
        Add New Insurance
    </x-slot>

    <x-slot name="content">


        < class="space-y-4">
            <label for="toggle-example" class="flex items-center cursor-pointer relative mb-4">
                <input type="checkbox" id="toggle-example" class="sr-only" checked>
                <div
                    class="toggle-bg bg-gray-200 dark:bg-gray-700 border-2 border-gray-200 dark:border-gray-700 h-6 w-11 rounded-full">
                </div>
                <span class="ml-3 text-gray-400 text-sm font-medium">Toggle me</span>
            </label>

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
                    @error('telephone')
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
            </div>






            <div>
                <label for="small-file-input" class="sr-only">Choose file</label>
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

        <x-admin.submit-button>Save Insurance</x-admin.submit-button>

    </x-slot>
</x-admin.insurance-modal>
