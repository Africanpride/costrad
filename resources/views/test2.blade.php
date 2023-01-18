<x-app-layout>

    <div class="container mx-auto p-8 space-y-4">
        <div class="flex items-center">
            <input type="checkbox" id="hs-basic-with-description-unchecked" class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 ring-1 ring-transparent   focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

            before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
            <label for="hs-basic-with-description-unchecked" class="text-sm text-gray-500 ml-3 dark:text-gray-400">Unchecked</label>
          </div>



            <img src="{{ Auth::user()->avatar_url }}" alt="" class="h-12 w-12 rounded-full">
        </div>
        <button type="button"
            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-white text-slate-800 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:bg-slate-800 dark:text-white dark:focus:ring-offset-gray-800"
            data-hs-overlay="#hs-insurance">
            Open offcanvas
        </button>
        <div>

            <ul class="grid grid-cols-6 gap-3 items-center text-sm">
                @forelse ($roles as $role)
                    <li class="flex my-3 ">
                        <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                fill="currentColor" fill-opacity="0.1" />
                            <path
                                d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 dark:text-gray-400">
                            {{ $role->name }}

                        </span>
                    </li>

                @empty
                    <div>Sorry No Roles Available</div>
                @endforelse
            </ul>
        </div>
        <hr class="py-4">
        {{ __('Permissions Below') }}
        <ul class="grid grid-cols-4 gap-3 space-x-4 items-center text-sm">
            @forelse ($permissions as $permission)
                <li class="flex space-x-3 my-3 ">
                    <svg class="flex-shrink-0 h-6 w-6 text-blue-600" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                            fill="currentColor" fill-opacity="0.1" />
                        <path
                            d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                            fill="currentColor" />
                    </svg>
                    <span class="text-gray-800 dark:text-gray-400">
                        {{ $permission->name }}

                    </span>
                </li>

            @empty
                <div>Sorry No Roles Available</div>
            @endforelse
        </ul>


    </div>
    <div class="flex justify-center">
        <svg viewBox="0 0 700 380" fill="none" width="300" xmlns="http://www.w3.org/2000/svg" id="svg">
            <path class="text-gray-300"
                d="M100 350C100 283.696 126.339 220.107 173.223 173.223C220.107 126.339 283.696 100 350 100C416.304 100 479.893 126.339 526.777 173.223C573.661 220.107 600 283.696 600 350"
                stroke="currentColor" stroke-width="40" stroke-linecap="round"></path>
            <path
                d="M100 350C100 283.696 126.339 220.107 173.223 173.223C220.107 126.339 283.696 100 350 100C416.304 100 479.893 126.339 526.777 173.223C573.661 220.107 600 283.696 600 350"
                stroke="#2f49d0" stroke-width="40" stroke-linecap="round" stroke-dasharray="485.4"
                stroke-dashoffset="78.54" id="svgPath" class="svgPath"></path>

            {{-- <circle cx="587.7641290737884" cy="272.7457514062631" r="12" fill="#cc0099"></circle> --}}

            <circle cx="140" cy="350" r="5" fill="#2f49d0"></circle>
            <circle cx="144.5890038459008" cy="306.3385449282706" r="5" fill="#2f49d0"></circle>
            <circle cx="158.15545389505382" cy="264.58530495408195" r="5" fill="#2f49d0"></circle>
            <circle cx="180.10643118126103" cy="226.56509701858067" r="5" fill="#2f49d0"></circle>
            <circle cx="209.48257266463972" cy="193.93958664974724" r="5" fill="#2f49d0"></circle>
            <circle cx="244.9999999999999" cy="168.1346652052679" r="5" fill="#2f49d0"></circle>
            <circle cx="285.10643118126103" cy="150.27813157801776" r="5" fill="#2f49d0"></circle>
            <circle cx="328.0490227137926" cy="141.15040197266262" r="5" fill="#2f49d0"></circle>
            <circle cx="371.95097728620715" cy="141.1504019726626" r="5" fill="#2f49d0"></circle>
            <circle cx="414.8935688187389" cy="150.27813157801774" r="5" fill="#2f49d0"></circle>
            <circle cx="454.9999999999999" cy="168.1346652052678" r="5" fill="#2f49d0"></circle>
            <circle cx="490.51742733536014" cy="193.93958664974713" r="5" fill="#2f49d0"></circle>
            <circle cx="519.8935688187389" cy="226.5650970185806" r="5" fill="#2f49d0"></circle>
            <circle cx="541.8445461049462" cy="264.58530495408183" r="5" fill="#2f49d0"></circle>
            <circle cx="555.4109961540992" cy="306.33854492827044" r="5" fill="#2f49d0"></circle>
            <circle cx="560" cy="349.99999999999994" r="5" fill="#2f49d0"></circle>

        </svg>
    </div>


    <!-- Card Section -->
    <div class="max-w-9xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6">
            <!-- Card -->
            <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="#">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                        </svg>

                        <div class="ml-5">
                            <h3
                                class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                Ask our community
                            </h3>
                            <p class="text-sm text-gray-500">
                                Get help from 40k+ Preline users
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a data-hs-overlay="#hs-insurance" class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="#">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>

                        <div class="ml-5">
                            <h3
                                class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                Get help in the app
                            </h3>
                            <p class="text-sm text-gray-500">
                                Just head to «Help» in the app
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="#">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z" />
                        </svg>

                        <div class="ml-5">
                            <h3
                                class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                Email us
                            </h3>
                            <p class="text-sm text-gray-500">
                                Reach us at <span
                                    class="text-blue-600 font-medium dark:text-blue-500">info@site.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
            <!-- Card -->
            <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="#">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg class="mt-1 shrink-0 w-5 h-5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z" />
                        </svg>

                        <div class="ml-5">
                            <h3
                                class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                Email us
                            </h3>
                            <p class="text-sm text-gray-500">
                                Reach us at <span
                                    class="text-blue-600 font-medium dark:text-blue-500">info@site.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <input type="checkbox" id="hs-basic-usage" class="relative w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

    before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
    <label for="hs-basic-usage" class="sr-only">switch</label>

</x-app-layout>

<script>
    const scrollProgress = () => {
        return {
            init() {
                window.addEventListener('scroll', () => {
                    let winScroll = document.body.scrollTop || document.documentElement.scrollTop
                    let height = document.documentElement.scrollHeight - document.documentElement
                        .clientHeight
                    this.percent = Math.round((winScroll / height) * 100)
                })
            },
            circumference: 15 * 2 * Math.PI,
            percent: 0,
        }
    }
</script>
