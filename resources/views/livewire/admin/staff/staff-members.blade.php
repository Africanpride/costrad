<div>

    <div class="text-sm flex items-center justify-between w-full hidden">
        <span class="font-semibold">Staff Members ({{ App\Models\User::count() }})</span>
        <a href="#" class="text-accent-400 font-medium text-sm">View all</a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4  ">


        <div class="aspect-square rounded-2xl  bg-gray-200 dark:bg-slate-800 text-gray-500 hover:ring-2 hover:ring-gray-300 hover:dark:ring-gray-700 flex justify-center items-center flex-col text-accent-400 text-sm
        hover:shadow hover:text-accent-500 hover:font-medium group cursor-pointer "
            wire:click='$emit("openModal", "admin.staff.add-staff")'>
            <span
                class="bg-firefly-50 dark:bg-firefly-900 rounded-full group-hover:text-accent-500  text-accent-400 p-2.5
            border border-current hover:border-secondary-focus  border-dashed mb-3">
                <label for="my-modal-3" class="cursor-pointer " >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </label>
            </span>
            <label for="my-modal-3" class="cursor-pointer ">
                <div class="dark:text-white">Add New</div>
            </label>
        </div>


        @forelse ($users as $user)
            {{-- @if ($loop->first) @continue  @endif --}}
            {{-- Exclude Current user from Staff list --}}
            @if ($user->id === Auth::user()->id)
                @continue
            @endif

            <div
                class="relative aspect-square rounded-2xl bg-gray-200 dark:bg-slate-800  flex justify-center
            items-center flex-col text-gray-500 text-sm hover:ring-2 hover:ring-gray-300 hover:dark:ring-gray-700">

                <div class="absolute top-2 right-2 text-gray-500 dark:text-white hover:text-accent-500">
                        <x-heroicon-o-trash
                        class="w-5 h-5 text-red-500 cursor-pointer"
                        onclick="Livewire.emit('openModal', 'admin.staff.delete-staff', {{ json_encode([$user->id]) }})"
                        />
                </div>
                <span class="relative">

                    <img src="{{ $user->profile_photo_url }}" class="w-14 h-14 rounded-full mb-3"
                        alt="{{ $user->full_name }}" srcset="">

                    @if ($user->isOnline())
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-3 w-3  fill-green-500 stroke-white stroke-2 absolute bottom-3 right-1"
                            viewBox="0 0 24 24">
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z">
                            </path>
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-3 w-3  fill-red-500 stroke-white stroke-2 absolute bottom-3 right-1"
                            viewBox="0 0 24 24">
                            <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2z">
                            </path>
                        </svg>
                    @endif
                </span>
                <div class="text-gray-500 dark:text-white">{{ $user->full_name }}</div>
                <div class="text-xxs text-firefly-400 mt-1  cursor-pointer "
                    onclick="Livewire.emit('openModal', 'admin.staff.update-staff', {{ json_encode([$user->id]) }})">
                    <span class="inline bg-blue-50 border border-blue-300 text-blue-600 text-[.6125rem] leading-4  rounded-full py-0.5 px-2 dark:bg-blue-900/[.75] dark:border-blue-700 dark:text-blue-500">Edit Staff</span>
                </div>
            </div>

        @empty

            {{ __('Account is Currently Empty') }}
        @endforelse
    </div>
    <div class="py-5 ">
        {{ $users->links() }}
    </div>


</div>
