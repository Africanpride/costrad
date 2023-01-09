<x-admin.user-modal formAction="updateStaff">
    <x-slot name="title">
        <div class="absolute top-3 right-3 cursor-pointer">
            <x-heroicon-o-x-circle class="w-6 h-6 text-red-500" wire:click="$emit('closeModal')" />
        </div>
        <div class="uppercase pb-2">Update or delete </div>
        <hr class="pb-2">
        <span class="text-gray-400 capitalize">"{{ $user->full_name }}"</span>
    </x-slot>

    <x-slot name="content">
        <div class="flex justify-center">
            <img src="{{ $user->profile_photo_url }}" class="w-14 h-14 rounded-full mb-3"
            alt="{{ $user->full_name }}" srcset="">
        </div>

        <div class="grid grid-cols-2 gap-x-4">
            <div>
                <input wire:model="firstName" id="firstName" type="text"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-firefly-500 focus:ring-firefly-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                    placeholder="First Name" required autocomplete="firstName" >
                @error('firstName')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input wire:model="lastName" id="lastName" type="text"
                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-firefly-500 focus:ring-firefly-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                    placeholder="Last Name" required autocomplete="lastName" >
                @error('lastName')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

            </div>
        </div>
        <div>
            {{-- <label for="hs-leading-icon" class="block text-sm font-medium mb-2 dark:text-white">Email address</label> --}}
            <div class="relative">
                <input wire:model="email" type="text" id="hs-leading-icon" name="hs-leading-icon"
                    class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                    placeholder="Staff email Address" required autocomplete="email" >
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                </div>
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            </div>
        </div>
        <div class=" w-full">
            <div class="mt-4">

                <x-jet-input id="password" class="block mt-1 w-full" type="password" wire:model="password"
                      placeholder="enter password"  />
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


        </div>

@if (\App\Models\Role::count())
<div class="mb-6">
    <label class="block text-gray-700 dark:text-firefly-500 text-sm font-bold my-3" for="role">
        {{ __('Assign Role to staff') }}
    </label>
    <div class="w-full grid grid-cols-2 gap-2 text-gray-900 dark:text-gray-100">
        @foreach ($roles as $key => $role)
            <div class="flex justify-start items-center space-x-2"
                wire:key="input-checkbox-{{ $role->id }}">

                <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
                    type="checkbox" value="{{ $role->id }}"
                    wire:model.defer="staffRoles" name="staffRoles"
                    value="{{ $role->id }}"
                    @if (in_array($role->id, $staffRoles)) checked @endif>

                <label for="role-{{ $role->id }}" class=" text-sm leading-5  capitalize">
                    {{ $role->name }}
                </label>
            </div>
        @endforeach
    </div>
    @error('role')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>


@endif
    </x-slot>

    <x-slot name="buttons">

        <button type="reset"  wire:click="$emit('closeModal')"
            class="py-2.5 px-4 inline-flex w-full justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            Cancel
        </button>
        <button type="submit"
            class="py-2.5 px-4 inline-flex w-full justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            {{ __('Update Staff' ) }}
        </button>
    </x-slot>
</x-admin.user-modal>
