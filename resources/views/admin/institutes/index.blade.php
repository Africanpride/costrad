<x-app-layout>
    <x-admin.pageheader model-name="Institutes " description="Instititues &<br /> College" add-button="false"
        class="mx-4">
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
        </x-admin-pageheader>

        <div>
            <div class="p-4 space-y-4">


                <div class="max-w-3xl mx-auto">
                    <x-jet-button type="button" onclick="Livewire.emit('openModal', 'admin.institute.add-institute')">
                        {{ __('Add New Institute') }}
                    </x-jet-button>
                </div>

                @if ($institutes->count() > 0)
                    @foreach ($institutes as $institute)
                        <!-- End Card Section -->
                        <div class="bg-gray-200 dark:bg-gray-900 dark:text-gray-100  max-w-3xl mx-auto !rounded-xl ">
                            <div class="container grid grid-cols-12 mx-auto ">
                                <div class=" grid place-items-center bg-no-repeat bg-cover  bg-gray-700 col-span-full md:col-span-3 md:rounded-l-xl  "
                                    style="background-image: url(' {{ asset('images/ghana.jpg') }}'); background-position: center center; background-blend-mode: multiply; background-size: cover;">
                                    <img class="md:w-22 md:p-6 p-24 aspect-square"
                                        src="{{ $institute->institute_logo }}" alt="{{ $institute->name }}">
                                </div>
                                <div
                                    class="flex flex-col justify-between p-4 pt-8 pb-6 pl-12 md:col-span-9 col-span-12 space-y-3 rounded-r-xl relative ">
                                    @hasanyrole(['admin', 'super_admin'])
                                        <div class="absolute top-2 right-3">
                                            <div class="flex justify-end items-center gap-2">
                                                <a href="{{ route('institutes.edit', [$institute->slug]) }}"
                                                    class=" text-gray-500 dark:text-white hover:text-accent-500 z-100">
                                                    <x-lucide-clipboard-edit class="w-4 h-4 text-gray-500 cursor-pointer" />
                                                </a>
                                                <span class=" text-gray-500 dark:text-white hover:text-accent-500 z-100">
                                                    <x-heroicon-o-trash class="w-4 h-4 text-red-500 cursor-pointer"
                                                        onclick="Livewire.emit('openModal', 'admin.institute.delete-institute', {{ json_encode([$institute->id]) }})" />
                                                </span>
                                            </div>

                                        </div>
                                    @endhasrole


                                    <div
                                        class="bg-gray-300/80 dark:bg-black/50 rotate-180 p-2 [writing-mode:_vertical-lr] absolute left-0 bottom-0 h-full">
                                        <time datetime="2022-10-10"
                                            class="flex items-center justify-between gap-4 text-xs
                                            font-bold uppercase  text-gray-900 dark:text-white">

                                            <span>{{ \Carbon\Carbon::parse($institute->startDate)->format('M jS') }}</span>
                                            <span class="w-px flex-1 bg-gray-900/50 dark:bg-white/10"></span>
                                            <span>{{ \Carbon\Carbon::parse($institute->endDate)->format('M jS') }}</span>
                                        </time>
                                    </div>

                                    <h1 class="text-lg font-bold ">{{ $institute->name }}
                                        <span class="uppercase">({{ $institute->acronym }})</span>
                                    </h1>
                                    <div>
                                        <p class=" text-sm line-clamp-5 text-justify">
                                            {{ $institute->overview }}
                                            <a href="{{ route('institute.show', [$institute->slug]) }}"
                                                rel="noopener noreferrer"
                                                class="inline-flex justify-start items-center   text-sm text-orange-400">
                                                <span class="pr-2">Read more</span>
                                                <x-lucide-arrow-right class="w-4 h-4" />
                                            </a>
                                        </p>
                                    </div>
                                    <div class="">
                                        <div class="flex justify-start items-center">

                                            <a rel="noopener noreferrer" href="#"
                                                class="inline-flex items-center  space-x-4 text-sm ">

                                                <span href="#"
                                                    class="flex items-center justify-between rounded-full bg-firefly-800 py-1 px-4 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900 gap-2">
                                                    <span>Register now</span>
                                                    <span aria-hidden="true">
                                                        <x-lucide-arrow-right class="w-4 h-4" />
                                                    </span>
                                                </span>

                                            </a>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- Card Section -->
                    @endforeach
                @endif




            </div>

        </div>

</x-app-layout>
