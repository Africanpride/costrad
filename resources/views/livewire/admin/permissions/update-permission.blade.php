<x-admin.permission-modal formAction="updatePermission">
    <x-slot name="title">
        <div class="absolute top-3 right-3 cursor-pointer">
            <x-heroicon-o-x-circle class="w-6 h-6 text-red-500"  wire:click="$emit('closeModal')" />
        </div>
        <div class="uppercase pb-2">Update or delete </div>
        <hr class="pb-2">
        <span class="text-gray-400 capitalize">"{{ $name }}"</span>
    </x-slot>

    <x-slot name="content">
<div>
    <p class="dark:text-white">Permissions are fundamental and would be assigned to Roles. A Permission should do one of the following: (CREATE, READ, UPDATE AND DELETE). E.g. Update Invoice Record, Delete Customer record etc.</p>
</div>
        <input wire:model="name" id="name" type="text"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            placeholder="Permission Name">
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <textarea wire:model.defer="description" id="description"
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
            rows="3" placeholder="Permission Description"></textarea>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror


    </x-slot>

    <x-slot name="buttons">

        <x-admin.delete-button wire:click="deletePermission">Delete Permission</x-admin.delete-button>
        <x-admin.submit-button>Save Permission</x-admin.submit-button>

    </x-slot>
</x-admin.permission-modal>
