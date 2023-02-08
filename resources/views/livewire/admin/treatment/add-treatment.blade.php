<x-admin.roles-modal formAction="addTreatment">
    <x-slot name="title">
        Add New Treatment
    </x-slot>

    <x-slot name="content">

        <div>
            <input wire:model="name" id="name" type="text"
                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                placeholder="Treatment Name">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

        </div>

        <div>
            <div class="relative">
                <input wire:model="price" type="text" id="hs-input-with-leading-and-trailing-icon"
                    name="hs-input-with-leading-and-trailing-icon"
                    class="py-3 px-4 pl-9 pr-16 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                    placeholder="0.00">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                    <span class="text-gray-500">{{ _('$') }}</span>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none z-20 pr-4">
                    <span class="text-gray-500">{{ _('USD') }}</span>
                </div>
            </div>
            @error('price')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        {{-- <x-jet-input wire:model="price" id="price" type="text" placeholder="{{ __('Add price') }}" class="mt-1 block w-full" /> --}}


        <div>
            <textarea wire:model="description" id="description"
                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                rows="3" placeholder="Treatment Description"></textarea>
            @error('description')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

        </div>
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
            <label for="hs-account-activity" class="flex p-4 md:p-5">
                <span class="flex mr-5">
                    <svg class="flex-shrink-0 mt-1 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                    </svg>

                    <span class="ml-5">
                        <span class="block font-medium text-gray-800 dark:text-gray-200">{{ __('Treatment Active') }}</span>
                        <span class="block text-sm text-gray-500">{{ __('Make treatment active and available in clinic') }}</span>
                    </span>
                </span>

                <input wire:model="active" type="checkbox" id="hs-account-activity"
                    class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

                      before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
            </label>
        </div>
        <!-- End Card -->
    </x-slot>

    <x-slot name="buttons">
        <x-admin.reset-button class="rounded" wire:click="$emit('closeModal')">{{ __('Cancel') }}</x-admin.reset-button>

        <x-admin.submit-button class="rounded">{{ __('Save Treatment') }}</x-admin.submit-button>

    </x-slot>
</x-admin.roles-modal>
