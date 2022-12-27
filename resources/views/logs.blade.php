<x-app-layout>
    <x-admin.pageheader model-name="RBAC / ACL" description="Roles &<br /> Permissions" add-button="false" class="mx-4">
        <x-heroicon-o-question-mark-circle class="w-6 h-6 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-3">
            <livewire:admin.authentication-log />
        </div>
</x-app-layout>
