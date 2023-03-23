<x-app-layout>
    <x-admin.pageheader model-name="Newsroom Items" description="News &<br /> Publications" add-button="false"
        class="mx-4">
        <x-lucide-bell class="w-5 h-5 text-current" />
        </x-admin-pageheader>
        <div class="p-4 space-y-4">

Edit News:

{{ $newsroom->slug }}
        </div>

    </x-admin.pageheader>
