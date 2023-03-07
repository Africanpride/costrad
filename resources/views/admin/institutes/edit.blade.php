<x-app-layout>
    <x-admin.pageheader model-name="Manage Institute " description="Instititues &<br /> College"
        action="
    {!! $institute->name !!}" add-button="false" class="mx-4">
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
        </x-admin-pageheader>

        <div>
            <div class=" space-y-4 pb-12 m-8 p-5 border border-gray-300/80 dark:border-gray-800/80 rounded-xl ">

                <form method="POST" action="{{ route('institutes.update', [$institute->slug]) }}" id=""
                    accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="max-w-4xl mx-auto">
                        <div
                            class="flex justify-between items-center text-xs sm:text-sm text-gray-800 dark:text-gray-200 my-8 space-y-3">

                            <a class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-2 px-4 dark:focus:ring-offset-gray-800"
                                href="{{  url('admin/institutes/') }}">

                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z" />
                                </svg>
                                {{ __('Back to Institutes') }}
                            </a>
                            <div class="flex justify-end items-center gap-x-5">
                                <div
                                    class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-300 text-gray-800 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-800 dark:text-gray-200">
                                    Last Edited
                                </div>
                                <p class="text-xs sm:text-sm text-gray-800 dark:text-gray-200">
                                    {{ $institute->created_at->format('D, M d, Y h:i A') }}</p>
                            </div>

                        </div>
                        <div>

                            <div class="space-y-4">

                                <div>
                                    <input name="name" id="name" type="text"
                                        class="py-2 px-4 pl-9 pr-16 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700
                                        dark:text-gray-400"
                                        placeholder="{{ __($institute->name ?? 'Instittute Name Here.') }}"
                                        value="{{ old('name', optional($institute)->name) }}">
                                    @error('name')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div
                                    class="py-2 px-4 pl-6 pr-8 block w-full border border-gray-200/80 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700
                                dark:text-gray-400">
                                    <div class="flex items-start py-2 relative">
                                        <div class="flex items-center h-5">
                                            <input id="hs-checkbox-archive" name="hs-checkbox-archive" type="checkbox"
                                                name='active'
                                                placeholder="{{ __($institute->active ?? 'Instittute Active Value Here.') }}"
                                                value="{{ old('active', optional($institute)->active) }}"
                                                class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                aria-describedby="hs-checkbox-archive-description"
                                                @if ($institute->active) checked @endif>
                                        </div>
                                        <label for="hs-checkbox-archive" class="ml-3">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-white">Allow
                                                For Registration and Payment</span>
                                            <span id="hs-checkbox-archive-description"
                                                class="block text-sm text-gray-600 dark:text-gray-500 italic ">{{ $institute->active ? 'Participants would be allowed to register and pay for institute/college.' : 'Tick here to make Institute active.' }}</span>
                                        </label>
                                    </div>
                                    @error('active')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-2 gap-4">

                                    <div>
                                        <input name="acronym" id="acronym" type="text"
                                            class="py-2 px-4 pl-9 pr-16 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700
                                            dark:text-gray-400"
                                            placeholder="{{ __($institute->acronym ?? 'Institute Acronym Here.') }}"
                                            value="{{ old('acronym', optional($institute)->acronym) }}">
                                        @error('acronym')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>

                                        <div class="relative">
                                            <input name="price" type="text"
                                                id="hs-input-with-leading-and-trailing-icon"
                                                name="hs-input-with-leading-and-trailing-icon"
                                                class="py-2 px-4 pl-9 pr-16 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700
                                                     dark:text-gray-400"
                                                placeholder="{{ __($institute->price ?? 'Instittute Value Here.') }}"
                                                value="{{ old('price', optional($institute)->price) }}">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                                                <span class="text-gray-500">
                                                    <x-lucide-dollar-sign class="h-4 w-4 text-gray-400" />
                                                </span>
                                            </div>
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center pointer-events-none z-20 pr-4">
                                                <span class="text-gray-500">USD</span>
                                            </div>
                                        </div>


                                        @error('price')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="grid grid-cols-2 gap-4">

                                    <div>
                                        <div>
                                            <div class="flex justify-start  text-xs text-gray-500 ">
                                                {{ _('Date: ') }} &ThickSpace;
                                                <x-jet-label for="startDate"
                                                    value="{{ \Carbon\Carbon::parse($institute->startDate)->toFormattedDateString() ?? 'Start Date' }}"
                                                    class="text-[0.6rem] flex justify-start" />
                                            </div>

                                            <x-jet-input name="startDate" id="startDate" type="text"
                                                value="{!! $institute->startDate !!}"
                                                class="mt-1 block w-full dark:text-white" placeholder="Start Date ..."
                                                autocomplete="off" />
                                        </div>
                                        @error('startDate')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div>
                                        <div>
                                            <div class="flex justify-start  text-xs text-gray-500 ">
                                                {{ _('Date: ') }} &ThickSpace;
                                                <x-jet-label for="startDate"
                                                    value="{{ \Carbon\Carbon::parse($institute->endDate)->toFormattedDateString() ?? 'Start Date' }}"
                                                    class="text-[0.6rem] flex justify-start" />
                                            </div>

                                            <x-jet-input name="endDate" id="endDate" type="text"
                                                value="{!! $institute->endDate !!}"
                                                class="mt-1 block w-full dark:text-white" placeholder="End Date ..."
                                                autocomplete="off" />
                                        </div>
                                        @error('startDate')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="block">
                                    <label
                                        class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                                        SEO Keywords (Comma Seperated) </label>
                                    <textarea name="seo"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        rows="1">{{ old('seo', optional($institute)->seo) }}</textarea>
                                    @error('seo')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="block">
                                    <label
                                        class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                                        Institute Overview</label>
                                    <textarea name="overview"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        rows="3">{{ old('overview', optional($institute)->overview) }}</textarea>
                                    @error('overview')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="block">
                                    <label
                                        class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                                        Institute about</label>
                                    <textarea name="about"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        rows="3">{{ old('about', optional($institute)->about) }}</textarea>
                                    @error('about')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- <div>

                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-sm font-medium leading-6 text-gray-900">
                                                Logo
                                            </label>
                                            <div class="mt-2 flex items-center">
                                                <img class="w-24 aspect-square"
                                                    src="{{ $institute->institute_logo }}"
                                                    alt="{{ $institute->name }}">
                                                <x-jet-button class="w-32 mx-5" type="button">
                                                    {{ __('Select Logo') }}
                                                </x-jet-button>
                                            </div>
                                            <div>
                                                @error('logo')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="space-y-2">
                                            <label class="block text-sm font-medium leading-6 text-gray-900">Institute
                                                Banner</label>
                                            <div
                                                class="mt-2 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                                <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                        fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path
                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="banner"
                                                            class="relative cursor-pointer rounded-md bg-white dark:bg-slate-800/50 font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                                            <span>Upload banner</span>
                                                            <input id="banner" name="banner" type="file"
                                                                class="sr-only">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                                                </div>
                                            </div>

                                            @error('banner')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 py-4">
                            <button type="reset" class="py-2 px-3 my-3 w-full inline-flex justify-center items-center gap-2  border border-transparent font-semibold bg-slate-500 text-white hover:bg-slate-600 focus:outline-none focus:ring-2  rounded">Cancel</button>
                            <x-admin.submit-button class="rounded">Submit</x-admin.submit-button>
                        </div>

                    </div>

                </form>
                <script type="text/javascript">
                    // tinymce.init({
                    //     selector: 'textarea.tinymce-editor',
                    //     height: 200,
                    //     menubar: false,
                    //     // plugins: 'powerpaste advcode table lists checklist',
                    //     // toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table',

                    // });

                    flatpickr("#startDate", {
                        altFormat: "DD-MM-YYYY",
                        defaultDate: {!! json_encode(\Carbon\Carbon::create($institute->startDate)) !!},
                    });

                    flatpickr("#endDate", {
                        altFormat: "DD-MM-YYYY",
                        defaultDate: {!! json_encode(\Carbon\Carbon::create($institute->endDate)) !!},
                    });
                </script>

            </div>



        </div>



</x-app-layout>
