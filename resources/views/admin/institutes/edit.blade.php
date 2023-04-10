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
                                href="{{ url('admin/institutes/') }}">

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
                                    <label
                                    class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                                    Institute Name</label>
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
                                    <label
                                    class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                                    Enable/Disable Registration</label>
                                    <div class="flex items-start py-2 relative">
                                        <div class="flex items-center h-5">
                                            <input id="hs-checkbox-archive" name="active" type="checkbox"
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
                                        <label
                                        class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                                        Acronym</label>
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
                                            <label
                                            class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                                            Amount</label>
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
                                        class=" placeholder:py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
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
                                        class="tinyText py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        rows="3">{{ old('about', optional($institute)->about) }}</textarea>
                                    @error('about')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="py-6 ">
                            <label
                            class=" font-medium text-gray-700 dark:text-gray-300 text-xs text-[0.7rem] flex justify-start">
                            Upload Banner Images</label>
                            <input type="file" name="images[]" id="small-file-input" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                              file:bg-transparent file:border-0
                              file:bg-gray-100 file:mr-4
                              file:py-2 file:px-4
                              dark:file:bg-gray-700 dark:file:text-gray-400" multiple>

                            @error('images')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-4 py-4">
                            <button type="reset"
                                class="py-2 px-3 my-3 w-full inline-flex justify-center items-center gap-2  border border-transparent font-semibold bg-slate-500 text-white hover:bg-slate-600 focus:outline-none focus:ring-2  rounded">Cancel</button>
                            <x-admin.submit-button class="rounded">Submit</x-admin.submit-button>
                        </div>

                    </div>

                </form>


            </div>



        </div>
                <script type="text/javascript">
                    flatpickr("#startDate", {
                        altFormat: "DD-MM-YYYY",
                        defaultDate: {!! json_encode(\Carbon\Carbon::create($institute->startDate)) !!},
                    });

                    flatpickr("#endDate", {
                        altFormat: "DD-MM-YYYY",
                        defaultDate: {!! json_encode(\Carbon\Carbon::create($institute->endDate)) !!},
                    });

                    const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

                    tinymce.init({
                        skin: 'oxide-dark',
                        content_css: 'dark',
                        selector: 'textarea.tinyText',
                        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                        editimage_cors_hosts: ['picsum.photos'],
                        menubar: 'file edit view insert format tools table help',
                        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                        toolbar_sticky: false,
                        toolbar_sticky_offset: isSmallScreen ? 102 : 108,
                        autosave_ask_before_unload: true,
                        autosave_interval: '30s',
                        autosave_prefix: '{path}{query}-{id}-',
                        autosave_restore_when_empty: false,
                        autosave_retention: '2m',
                        image_advtab: true,

                    });

                    $(document).ready(function() {
                        // executes when HTML-Document is loaded and DOM is ready
                        console.log("Hi 👀");

                        const inputElement = document.querySelector('input[type="file"]');
                        const pond = FilePond.create(inputElement);
                    });

                    FilePond.setOptions({
                        server: {
                            url: "{{ config('filepond.server.url') }}",
                            headers: {
                                'X-CSRF-TOKEN': "{{ @csrf_token() }}",
                            }
                        }
                    });

                    // Create the FilePond instance
                    FilePond.create(document.querySelector('input[name="images[]"]'), {
                        chunkUploads: true
                    });
                </script>



</x-app-layout>

