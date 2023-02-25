<x-app-layout>
    <x-admin.pageheader model-name="Manage Institute " description="Instititues &<br /> College" action="
    {{ $institute->name }}" add-button="false"
        class="mx-4" >
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
        </x-admin-pageheader>

        <div>
            <div class=" space-y-4 pb-12">

                <form method="POST" action="{{ route('institutes.update', [$institute->slug]) }}" id=""
                    accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="max-w-4xl mx-auto">
                        <div class="my-8 space-y-3">


                            <div class="flex justify-end items-center gap-x-5">
                                <div class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-800 dark:text-gray-200">
                                    Last Edited
                                </div>
                                <p class="text-xs sm:text-sm text-gray-800 dark:text-gray-200">{{ $institute->created_at->format('D, M d, Y h:i A')  }}</p>
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
                                        About Institute</label>

                                    <textarea name="about"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        rows="4">
                                        {{ old('about', optional($institute)->about) }}
                                    </textarea>
                                    @error('about')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{--
                                <div class="flex justify-between items-center gap-4">
                                    @if ($institute->logo)
                                        <div>
                                            <img class="block  w-[3.375rem] aspect-square rounded-full ring-2 ring-white dark:ring-firefly-900"
                                                src={{ $institute->logo->temporaryUrl() }} alt="{{ __('temporary file name') }}">
                                        </div>
                                    @endif

                                    <div class="block w-full">
                                        <label for="small-file-input"
                                            class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">Add
                                            Institute Logo</label>
                                        <input  name="logo" type="file"
                                            class="flex-auto block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                                file:bg-transparent file:border-0
                                                file:bg-gray-100 file:mr-4
                                                file:py-2 file:px-4
                                                dark:file:bg-gray-700 dark:file:text-gray-400">
                                        @error('logo')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>
                                <div class="flex flex-col  space-y-4">
                                    @if ($banner)
                                        <div class="block w-full">
                                            <img class=" aspect-auto w-full ring-2 ring-white dark:ring-firefly-900"
                                                src={{ $banner->temporaryUrl() }} alt="{{ __('temporary file name') }}">
                                        </div>
                                    @endif

                                    <div class="block w-full">
                                        <label for="small-file-input"
                                            class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">Add
                                            Institute Banner</label>

                                        <input  name="banner" type="file"
                                            class="flex-auto block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                                file:bg-transparent file:border-0
                                                file:bg-gray-100 file:mr-4
                                                file:py-2 file:px-4
                                                dark:file:bg-gray-700 dark:file:text-gray-400">
                                        @error('banner')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div> --}}
                            </div>


                            <div class="grid grid-cols-2 gap-4 py-4">
                                <x-admin.reset-button class="rounded bg-red-500">Cancel</x-admin.reset-button>
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

        </div>

</x-app-layout>
