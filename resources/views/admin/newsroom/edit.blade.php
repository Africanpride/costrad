<x-app-layout>
    <x-admin.pageheader model-name="Newsroom Items" description="News &<br /> Publications" add-button="false"
        class="mx-4">
        <x-lucide-bell class="w-5 h-5 text-current" />
        </x-admin-pageheader>
        <div class="p-4 space-y-4">
            <div class="p-8 border border-gray-300/20 rounded-xl">

                <form method="post" action="{{ route('newsroom.update', $newsroom) }}" enctype="multipart/form-data" >
                    @method('patch')
                    @csrf
                    <div class="space-y-4">

                        <div class="">
                            <x-jet-label for="title" value="{{ __('Title') }}" spellcheck="true" />
                            <x-jet-input id="title" type="text" name="title"
                                class="mt-1 block w-full dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                autocomplete="{{ $newsroom->title }}"
                                placeholder="{{ $newsroom->title ?? __('News Title.') }}"
                                value="{{ old('title', $newsroom->title) }}" required />

                            <x-jet-input-error for="title" class="mt-2" />
                        </div>
                        <div class="flex justify-between py-8 items-center gap-8">
                            <div class="w-2/4">
                                <label for="hs-hidden-select" class="sr-only">Label</label>
                                <select id="hs-hidden-select" name="category_id"
                                    class="rounded-lg py-7 px-4 pr-9 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    <option value="{{ $newsroom->category->id }}">Select News/Publication Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{  $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>

                                <x-jet-input-error for="category_id" class="mt-2" />

                            </div>
                            <div class="border border-gray-400/20 p-4  rounded-lg w-2/4">
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5 mt-1">
                                        <input id="hs-checkbox-delete" name="active" type="checkbox"
                                            class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            aria-describedby="hs-checkbox-delete-description"
                                            {{ $newsroom->active ? 'checked' : '' }}>
                                    </div>
                                    <label for="hs-checkbox-delete" class="ml-3">
                                        <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300">Make
                                            Publication Active/Inactive</span>
                                        <span id="hs-checkbox-delete-description"
                                            class="block text-sm text-gray-600 dark:text-gray-500">Tick to make News
                                            Item Available to public.</span>
                                    </label>
                                </div>

                                <x-jet-input-error for="active" class="mt-2" />

                            </div>
                        </div>
                        <div class="py-8">
                            <x-jet-label for="overview" value="{{ __('Featured Image') }}" />

                            <input type="file" name="featured_image" id="large-file-input"
                                class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                            file:bg-transparent file:border-0
                            file:bg-gray-100 file:mr-4
                            file:py-3 file:px-4 file:sm:py-5
                            dark:file:bg-gray-700 dark:file:text-gray-400">
                            {{-- <x-jet-input id="featured_image" type="file" name="{{ $newsroom->featured_image }}"
                                class="mt-1 block w-full dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"/> --}}

                            <x-jet-input-error for="featured_image" class="mt-2" />
                        </div>
                        <div class="">
                            <x-jet-label for="overview" value="{{ __('Overview') }}" />
                            <textarea name="overview" id="overview" spellcheck="true"
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="{{ $newsroom->overview ?? __('News Overview') }}">{{ old('overview', optional($newsroom)->overview) }}</textarea>

                            <x-jet-input-error for="overview" class="mt-2" />
                        </div>

                        <div class="">
                            <textarea name="body" id="body" spellcheck="true"
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="{{ $newsroom->body ?? __('News Content') }}">{{ old('body', optional($newsroom)->body) }}</textarea>


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
                        <x-jet-button>{{ __('Submit') }}</x-jet-button>
                    </div>
                </form>
            </div>
        </div>

    </x-admin.pageheader>

    <script type="text/javascript">
        const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');

        const initOptions = {
            selector: 'textarea#body',
            height: 500,
            menubar: true,
            content_css: 'dark',
            plugins: [
                'searchreplace visualblocks code ',
                'media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fullscreen code',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        };

        if (darkModeMediaQuery.matches) {
            // Dark mode is enabled
            initOptions.skin = 'oxide-dark';
        }

        tinymce.init(initOptions);
    </script>

    <style>
        /*
 Removes margins on paragraphs,
 might be useful for mail clients
*/
        /*p { margin: 0 }*/

        /*
* For rendering images inserted using the image plugin.
* Includes image captions using the HTML5 figure element.
*/

        figure.image {
            display: inline-block;
            border: 1px solid gray;
            margin: 0 2px 0 1px;
            background: #f5f2f0;
        }

        figure.align-left {
            float: left;
        }

        figure.align-right {
            float: right;
        }

        figure.image img {
            margin: 8px 8px 0 8px;
        }

        figure.image figcaption {
            margin: 6px 8px 6px 8px;
            text-align: center;
        }


        /*
 Alignment using classes rather than inline styles
 check out the "formats" option
*/

        img.align-left {
            float: left;
        }

        img.align-right {
            float: right;
        }

        /* Basic styles for Table of Contents plugin (toc) */
        .mce-toc {
            border: 1px solid gray;
        }

        .mce-toc h2 {
            margin: 4px;
        }

        .mce-toc li {
            list-style-type: none;
        }


        /*
* Premium Plugins CSS
*/

        /* The Checklist Plugin */

        .tox-checklist>li:not(.tox-checklist--hidden) {
            list-style: none;
            margin: 0.25em 0;
            position: relative;
        }

        .tox-checklist>li:not(.tox-checklist--hidden)::before {
            content: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%3E%3Cg%20id%3D%22checklist-unchecked%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Crect%20id%3D%22Rectangle%22%20width%3D%2215%22%20height%3D%2215%22%20x%3D%22.5%22%20y%3D%22.5%22%20fill-rule%3D%22nonzero%22%20stroke%3D%22%234C4C4C%22%20rx%3D%222%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E%0A");
            cursor: pointer;
            height: 1em;
            margin-left: -1.5em;
            margin-top: 0.125em;
            position: absolute;
            width: 1em;
        }

        .tox-checklist li:not(.tox-checklist--hidden).tox-checklist--checked::before {
            content: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%3E%3Cg%20id%3D%22checklist-checked%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Crect%20id%3D%22Rectangle%22%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%234099FF%22%20fill-rule%3D%22nonzero%22%20rx%3D%222%22%2F%3E%3Cpath%20id%3D%22Path%22%20fill%3D%22%23FFF%22%20fill-rule%3D%22nonzero%22%20d%3D%22M11.5703186%2C3.14417309%20C11.8516238%2C2.73724603%2012.4164781%2C2.62829933%2012.83558%2C2.89774797%20C13.260121%2C3.17069355%2013.3759736%2C3.72932262%2013.0909105%2C4.14168582%20L7.7580587%2C11.8560195%20C7.43776896%2C12.3193404%206.76483983%2C12.3852142%206.35607322%2C11.9948725%20L3.02491697%2C8.8138662%20C2.66090143%2C8.46625845%202.65798871%2C7.89594698%203.01850234%2C7.54483354%20C3.373942%2C7.19866177%203.94940006%2C7.19592841%204.30829608%2C7.5386474%20L6.85276923%2C9.9684299%20L11.5703186%2C3.14417309%20Z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E%0A");
        }


        /* The Page Embed plugin */

        .tiny-pageembed--21by9,
        .tiny-pageembed--16by9,
        .tiny-pageembed--4by3,
        .tiny-pageembed--1by1 {
            display: block;
            overflow: hidden;
            padding: 0;
            position: relative;
            width: 100%;
        }

        .tiny-pageembed--21by9 {
            padding-top: 42.857143%;
        }

        .tiny-pageembed--16by9 {
            padding-top: 56.25%;
        }

        .tiny-pageembed--4by3 {
            padding-top: 75%;
        }

        .tiny-pageembed--1by1 {
            padding-top: 100%;
        }

        .tiny-pageembed--21by9 iframe,
        .tiny-pageembed--16by9 iframe,
        .tiny-pageembed--4by3 iframe,
        .tiny-pageembed--1by1 iframe {
            border: 0;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }


        /* The Media Embed plugin */

        .ephox-summary-card {
            border: 1px solid #AAA;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
            padding: 10px;
            overflow: hidden;
            margin-bottom: 1em;
        }

        .ephox-summary-card a {
            text-decoration: none;
            color: inherit;
        }

        .ephox-summary-card a:visited {
            color: inherit;
        }

        .ephox-summary-card-title {
            font-size: 1.2em;
            display: block;
        }

        .ephox-summary-card-author {
            color: #999;
            display: block;
            margin-top: 0.5em;
        }

        .ephox-summary-card-website {
            color: #999;
            display: block;
            margin-top: 0.5em;
        }

        .ephox-summary-card-thumbnail {
            max-width: 180px;
            max-height: 180px;
            margin-left: 2em;
            float: right;
        }

        .ephox-summary-card-description {
            margin-top: 0.5em;
            display: block;
        }
    </style>
