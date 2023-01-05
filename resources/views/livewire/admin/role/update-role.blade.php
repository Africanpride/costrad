<x-admin.roles-modal formAction="updateRole">
    <x-slot name="title">
        Update <span class="text-red-500 capitalize">{{ $role->name }}</span>
    </x-slot>

    <x-slot name="content">

        <input wire:model.defer="name" id="name" type="text"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <textarea wire:model.defer="description" id="description"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            rows="3" placeholder="Role Description"></textarea>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="permission">
                Add Permissions
            </label>

            <div class="w-full grid grid-cols-2 gap-2 text-gray-900 dark:text-gray-100">
                @foreach ($permissions as $key => $permission)
                    <div class="flex justify-start items-center space-x-2"
                        wire:key="input-checkbox-{{ $permission->id }}">

                        <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
                            type="checkbox" value="{{ $permission->id }}" {{-- wire:model="rolePermissions.{{ $key }}" --}}
                            wire:model.defer="rolePermissions" name="rolePermissions" value="{{ $permission->id }}"
                            @if (in_array($permission->id, $permissionIds)) checked @endif>

                        <label for="permission-{{ $permission->id }}" class=" text-sm leading-5  capitalize">
                            {{ $permission->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            @error('permission')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </x-slot>

    <x-slot name="buttons">


        <x-admin.reset-button wire:click="$emit('closeModal')">Cancel</x-admin.reset-button>

        <x-admin.submit-button>Submit</x-admin.submit-button>

    </x-slot>
</x-admin.roles-modal>
