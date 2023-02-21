<x-admin.insurance-modal formAction="store">

    <x-slot name="title">
        <div class="absolute top-3 right-3 cursor-pointer">
            <x-heroicon-o-x-circle class="w-6 h-6 text-red-500" wire:click="$emit('closeModal')" />
        </div>
        Add New Institute
    </x-slot>

    <x-slot name="content">

        <div class="space-y-4">

            <div>
                <input wire:model="name" id="name" type="text"
                    class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                    placeholder="Institute Name">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="grid grid-cols-2 gap-4">

                <div>
                    <input wire:model="acronym" id="acronym" type="text"
                        class="py-2 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                        placeholder="Institute Acronym">
                    @error('acronym')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    {{-- <label for="hs-leading-icon" class="block text-xs dark:text-white">Email address</label> --}}
                    <div class="relative">
                        <input wire:model="price" type="text" id="hs-leading-icon" name="hs-leading-icon"
                            class="py-2 px-3 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Price to attend" required>
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                            <x-lucide-dollar-sign class="h-4 w-4 text-gray-400" />

                        </div>
                    </div>
                    @error('price')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

            </div>



            <div class="grid grid-cols-2 gap-4">

                <div>
                    <div>
                        <div class="flex justify-start  text-xs text-gray-500 ">
                            {{ _('Date: ') }} &ThickSpace;
                            <x-jet-label for="startDate"
                                value="{{ \Carbon\Carbon::create($startDate)->toFormattedDateString() ?? 'Start Date' }}"
                                class="text-[0.6rem] flex justify-start" />
                        </div>

                        <x-jet-input wire:model="startDate" id="startDate" type="text"
                            value="{!! $startDate !!}" class="mt-1 block w-full dark:text-white"
                            placeholder="Start Date ..." autocomplete="off" />
                    </div>
                    @error('startDate')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <div>
                        <div class="flex justify-start text-xs text-gray-500 ">


                            {{ _('Time: ') }} &ThickSpace;
                            <x-jet-label for="endDate"
                                value="{{ \Carbon\Carbon::create($endDate)->format('g:i A') ?? 'Appointment Time' }}"
                                class="text-[0.6rem] flex justify-start" />
                        </div>

                        <x-jet-input wire:model="endDate" id="endDate" type="text" value="{!! $endDate !!}"
                            class="mt-1 block w-full dark:text-white" placeholder="End Date ..." autocomplete="off" />
                    </div>
                    @error('startDate')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="flex justify-between items-center gap-4">
                @if ($logo)
                    <div>
                        <img class="block  w-[3.375rem] aspect-square rounded-full ring-2 ring-white dark:ring-firefly-900"
                            src={{ $logo->temporaryUrl() }} alt="{{ __('temporary file name') }}">
                    </div>
                @endif

                <div class="block w-full">
                    {{-- <label for="small-file-input" class="sr-only">Add Company Logo</label> --}}
                    <input wire:model="logo" type="file"
                        class="flex-auto block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                            file:bg-transparent file:border-0
                            file:bg-gray-100 file:mr-4
                            file:py-2 file:px-4
                            dark:file:bg-gray-700 dark:file:text-gray-400">
                    @error('logo')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>


            </div>
            <div class="flex flex-col  space-y-4">
                @if ($banner)
                    <div class="block w-full">
                        <img class=" aspect-auto w-full ring-2 ring-white dark:ring-firefly-900"
                            src={{ $banner->temporaryUrl() }} alt="{{ __('temporary file name') }}">
                    </div>
                @endif

                <div class="block w-full">
                    {{-- <label for="small-file-input" class="sr-only">Add Company Logo</label> --}}
                    <input wire:model="banner" type="file"
                        class="flex-auto block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                            file:bg-transparent file:border-0
                            file:bg-gray-100 file:mr-4
                            file:py-2 file:px-4
                            dark:file:bg-gray-700 dark:file:text-gray-400">
                    @error('banner')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>


            </div>
        </div>
    </x-slot>

    <x-slot name="buttons">
        <x-admin.reset-button class="rounded bg-red-500" wire:click="$emit('closeModal')">Cancel</x-admin.reset-button>


        <x-admin.submit-button class="rounded">Submit</x-admin.submit-button>

    </x-slot>

</x-admin.insurance-modal>


{{-- @push('scripts')
    <script>
        alert('123456');
        flatpickr("#startDate", {
            altFormat: "DD-MM-YYYY",
            defaultDate: {!! json_encode(\Carbon\Carbon::create(now())) !!},
        });
        flatpickr("#endDate", {
            altFormat: "DD-MM-YYYY",
            defaultDate: {!! json_encode(\Carbon\Carbon::create(now())) !!},
        });
    </script>
@endpush --}}
