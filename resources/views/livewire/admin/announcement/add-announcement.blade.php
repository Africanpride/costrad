<div>
    <x-admin.institute-modal formAction="Announcement Images">

        <x-slot name="title">
            <div class="absolute top-3 right-3 cursor-pointer">
                <x-heroicon-o-x-circle class="w-6 h-6 text-red-500" wire:click="$emit('closeModal')" />
            </div>
            <div class=" text-md ">Add New Announcement </div>
        </x-slot>

        <x-slot name="content">

            <div class="space-y-4">

                <div class="flex justify-between items-center gap-4">
                    @if ($image)
                        <div>
                            <img class="block  w-[3.375rem] aspect-square rounded-full ring-2 ring-white dark:ring-firefly-900"
                                src={{ $image->temporaryUrl() }} alt="{{ __('temporary file name') }}">
                        </div>
                    @endif

                    <div class="block w-full">
                        <label for="small-file-input"
                            class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">Add
                            Announcement  image</label>
                        <input wire:model="image" type="file"
                            class="flex-auto block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                file:bg-transparent file:border-0
                                file:bg-gray-100 file:mr-4
                                file:py-2 file:px-4
                                dark:file:bg-gray-700 dark:file:text-gray-400">
                        @error('image')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>


                </div>
                <div class="flex flex-col  space-y-4">
                    @if ($icon)
                        <div class="block w-full">
                            <img class=" aspect-auto w-full ring-2 ring-white dark:ring-firefly-900"
                                src={{ $icon->temporaryUrl() }} alt="{{ __('temporary file name') }}">
                        </div>
                    @endif

                    <div class="block w-full">
                        <label for="small-file-input"
                            class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">Add
                            Announcement  Icon</label>

                        <input wire:model="icon" type="file"
                            class="flex-auto block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                file:bg-transparent file:border-0
                                file:bg-gray-100 file:mr-4
                                file:py-2 file:px-4
                                dark:file:bg-gray-700 dark:file:text-gray-400">
                        @error('icon')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>


                </div>
            </div>
        </x-slot>

        <x-slot name="buttons">
            <x-admin.reset-button type="reset" class="rounded bg-red-500" wire:click="$emit('closeModal')">Cancel
            </x-admin.reset-button>


            <x-admin.submit-button class="rounded">Submit</x-admin.submit-button>

        </x-slot>

    </x-admin.institute-modal>

</div>
