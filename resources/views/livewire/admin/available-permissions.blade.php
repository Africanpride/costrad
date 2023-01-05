<div>

    <div class="max-w-auto  mx-auto">
        <div class="grid md:grid-cols-4 gap-2 md:gap-3">

            @forelse ($permissions as $permission)
                <div
                    class=" flex justify-between items-center bg-white/[.05] dark:border-white/[.05] p-1 pl-2 rounded-md shadow-sm hover:shadow bg-firefly-100 dark:bg-slate-700 hover:bg-slate/[.1] border dark:border-slate/[.05]">
                    <p class="  text-current text-sm capitalize">
                        {{ $permission->name }}
                    </p>
                    <span
                        class="dark:hover:bg-white/[.1] hover:bg-gray-700 py-2 px-2 inline-flex justify-center items-center  rounded-md dark:bg-white/[.095] bg-gray-400 font-semibold text-current text-white text-sm cursor-pointer"
                        onclick="Livewire.emit('openModal', 'admin.permissions.update-permission', {{ json_encode([$permission]) }})">
                        <svg class="w-2 h-2" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path
                                d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                </div>
            @empty
                <div class="gap-4 flex justify-start items-center">
                    <x-admin.nothing-here />
                    <div>Sorry Nothing Here. </div>
                </div>
            @endforelse

        </div>
    </div>
</div>
