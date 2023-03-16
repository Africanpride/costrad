<x-app-layout>
    <x-admin.pageheader model-name="ANNOUCEMENTS LIST" description="Announcement &<br /> Management" add-button="false"
        class="mx-4">
        <x-lucide-bell class="w-5 h-5 text-current" />
        </x-admin-pageheader>
        <div class="p-4 space-y-4">

            <div class="flex justify-end items-center my-10">
                <x-jet-button class="mt-2 mr-2 md:w-auto flex justify-center items-center gap-2"
                onclick="Livewire.emit('openModal', 'admin.announcement.add-announcement')"
                type="button">
                    <x-lucide-bell class="w-5 h-5 text-firefly-300" />
                    {{ __('Add New Announcement') }}
                </x-jet-button>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4  gap-4 ">
                @forelse ($announcements as $announcement)

                <article
                    class="rounded-xl bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 p-0.5 shadow-xl transition hover:shadow-sm space-y-4">
                    <div class="rounded-[10px] bg-white dark:bg-black p-4  !pt-20  sm:p-6">
                        <span class="block text-[10px] !pb-3 text-gray-500 dark:text-white line-clamp-1">
                            {{ substr($announcement->title, 0, 35) . (strlen($announcement->title) > 35 ? "..." : "") }}
                        </span>

                        <a href="#" class="mt-4">
                            <span class="mt-0.5 !leading-tight !pb-4 text-[14px] text-gray-900 dark:text-gray-400 line-clamp-2">
                                {{ $announcement->body }}
                            </span>
                        </a>

                        <div class="mt-4 flex flex-wrap gap-1">
                            <span
                                class="whitespace-nowrap rounded-full bg-purple-100 dark:bg-purple-900 dark:text-white px-2.5 py-0.5 text-[11px] text-purple-600">
                                {{ $announcement->created_at->diffForHumans() }}

                            </span>

                            {{-- <span
                                class="whitespace-nowrap rounded-full bg-purple-100 dark:bg-purple-900 dark:text-white px-2.5 py-0.5 text-[11px] text-purple-600">
                                JavaScript
                            </span> --}}
                        </div>
                    </div>
                </article>
                @empty
                   <livewire:admin.nothing-here />
                @endforelse


            </div>

            <div>
                {{ $announcements->links() }}
            </div>






        </div>

    </x-admin.pageheader>
