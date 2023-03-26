<x-app-layout>
    <x-admin.pageheader model-name="Newsroom Items" description="News &<br /> Publications" add-button="false"
        class="mx-4">
        <x-lucide-bell class="w-5 h-5 text-current" />
        </x-admin-pageheader>
        <div class="p-4 space-y-4">
            <div class="p-8 dark:bg-gray-800">

                <form>
                    @csrf
                    <div class="space-y-4">

                        <div class="">
                            <x-jet-label for="title" value="{{ __('Title') }}" />
                            <x-jet-input id="title" type="text" name="{{ $newsroom->title }}"
                                class="mt-1 block w-full dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                autocomplete="{{ $newsroom->title  }}"  placeholder="{{ $newsroom->title ?? __('News Title.')}}" value="{{  $newsroom->title }}" />

                            <x-jet-input-error for="title" class="mt-2" />
                        </div>

                        <div class="">
                            <textarea name="body"
                            id="body"
                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            rows="3" placeholder="{{ $newsroom->body ?? __('News Content')}}">{{ old('body', optional($newsroom)->body) }}</textarea>


                            <x-jet-input-error for="body" class="mt-2" />
                        </div>

                        {{-- <div class="flex justify-between items-center gap-4">
                            @if ($image)
                                <div>
                                    <img class="block  w-[3.375rem] aspect-square rounded-full ring-2 ring-white dark:ring-firefly-900"
                                        src={{ $image->temporaryUrl() }} alt="{{ __('temporary file name') }}">
                                </div>
                            @endif

                            <div class="block w-full">
                                <label for="small-file-input"
                                    class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">Add
                                    Announcement image</label>
                                <input name="image" type="file"
                                    class="flex-auto block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                        file:bg-transparent file:border-0
                                        file:bg-gray-100 file:mr-4
                                        file:py-2 file:px-4
                                        dark:file:bg-gray-700 dark:file:text-gray-400">
                                @error('image')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>
                        <div class="flex flex-col  space-y-4">
                            @if ($icon)
                                <div class="block w-full">
                                    <img class=" aspect-auto w-full ring-2 ring-white dark:ring-firefly-900"
                                        src={{ $icon->temporaryUrl() }} alt="{{ __('temporary file name') }}">
                                </div>
                            @endif

                            <div class="block w-full">
                                <label for="small-file-input"
                                    class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">Add
                                    Announcement Icon</label>

                                <input name="icon" type="file"
                                    class="flex-auto block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                        file:bg-transparent file:border-0
                                        file:bg-gray-100 file:mr-4
                                        file:py-2 file:px-4
                                        dark:file:bg-gray-700 dark:file:text-gray-400">
                                @error('icon')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                        </div> --}}
                    </div>

<div class="py-8">
    <x-jet-button>Submit</x-jet-button>
</div>
                </form>
              </div>
        </div>

    </x-admin.pageheader>
