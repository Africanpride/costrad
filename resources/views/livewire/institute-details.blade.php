<div>
    <section class="max-w-8xl p-4 md:p-8 md:pr-10 mx-auto h-auto">

        <div class="kenburns min-h-[55vh] bg-center bg-cover bg-no-repeat relative rounded-3xl md:min-h-[85vh]"
            style="background-image: url('{{ $institute->featured_image }}');">

            <div class="absolute bottom-0 left-0 right-0 max-w-xl mx-auto p-6 md:left-auto md:text-left md:mx-0">
                <!-- Card -->
                <div class="px-5 py-4 flex bg-white rounded-2xl md:p-7 dark:bg-gray-900 flex-col justify-between gap-4 ">
                    <div class="block">
                        <div
                            class="flex justify-between items-center dark:text-gray-200 font-bold text-gray-800 text-left text-sm">
                            <h3 class="hidden md:flex  "> <span class="uppercase ">{{ $institute->acronym }}</span>: A
                                Critical
                                Mandate.
                            </h3>
                            <div class="text-gradient__teal">{{ $institute->duration }}, {{ now()->format('Y') }}</div>
                        </div>
                        <div class="my-2 text-gray-800 dark:text-gray-200 text-xs md:text-justify">
                            <span class="text-xs line-clamp-4 md:line-clamp-none">{!! $institute->overview !!}</span>

                    </div>

                    <div class="hidden md:flex justify-between items-center">
                        <a class="flex items-center gap-2 text-xs text-gray-800 hover:text-gray-500 dark:text-white dark:hover:text-gray-400"
                            href="#">
                            <svg class="w-4 h-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path
                                    d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z">
                                </path>
                            </svg>
                            Watch our AudioVisual
                        </a>

                        <div x-data="{ progress: {{ $institute->progress }} }" class="w-2/5">
                            <span x-show="progress > 0">
                                <div
                                    class="flex w-full h-6.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                    <div class="flex flex-col justify-center overflow-hidden bg-firefly-800 text-[9px] text-white text-center"
                                        role="progressbar" style="width: {{ $institute->progress }}%"
                                        aria-valuenow="{{ $institute->progress }}" aria-valuemin="0"
                                        aria-valuemax="100">Progress: {{ $institute->progress }}%</div>
                                </div>
                            </span>
                        </div>

                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>

    <section class="max-w-8xl md:px-8 mx-auto px-4">
        <div
            class="min-h-[600px] md:min-h-max bg-slate-500/10 border border-gray-300/10 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] dark:bg-black from-slate-900 mx-auto p-8 rounded-2xl space-y-5 text-left to-gray-900 py-16">
            <img class="inline-block h-[4.975rem] w-[4.975rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                src="{{ $institute->institute_logo }}" alt="{{ $institute->name }}">
            <div class="max-w-xl">
                <div
                    class="bg-gradient-to-r from-gray-200 to-white/0 h-0.5 mt-6 dark:from-gray-700 dark:to-slate-900/0">
                    <div class="bg-gray-300 w-[4.975rem] h-0.5"></div>
                </div>
            </div>
            <h2 class="mt-5 font-semibold text-sky-500 text-gradient1">{{ __('Overview') }}</h2>
            <p
                class="mt-4 gap-3 text-md md:text-3xl sm:text-xl text-slate-900 font-extrabold tracking-tight dark:text-slate-50 ">
                <span>{{ $institute->name }}:</span>
                <span class="text-gradient1">
                    @if ($institute->acronym == 'costrad')
                        (<span>{{ __('COSTrAD') }}</span>)
                    @else
                        <span class="uppercase">({{ $institute->acronym }}) </span>
                    @endif
                </span>
            </p>
            <div class="mt-4 max-w-6xl space-y-6 text-[16px] "> {!! $institute->introduction ??
                " Foundations for brain architecture in early childhood, Early childhood development, Developing
                                                children into sons, Strategic Innovative and effective child development systems and Futuristic
                                                systems of education." !!}
            </div>
            <div class="py-5">
                <div class="flex space-x-1">
                    <svg class="h-4 w-4 text-yellow-500 dark:text-white" width="51" height="51"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                            fill="currentColor"></path>
                    </svg>
                    <svg class="h-4 w-4 text-yellow-500 dark:text-white" width="51" height="51"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                            fill="currentColor"></path>
                    </svg>
                    <svg class="h-4 w-4 text-yellow-500 dark:text-white" width="51" height="51"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                            fill="currentColor"></path>
                    </svg>
                    <svg class="h-4 w-4 text-yellow-500 dark:text-white" width="51" height="51"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                            fill="currentColor"></path>
                    </svg>
                    <svg class="h-4 w-4 text-yellow-500 dark:text-gray-200" width="51" height="51"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M49.6867 20.0305C50.2889 19.3946 49.9878 18.1228 49.0846 18.1228L33.7306 15.8972C33.4296 15.8972 33.1285 15.8972 32.8275 15.2613L25.9032 0.317944C25.6021 0 25.3011 0 25 0V42.6046C25 42.6046 25.3011 42.6046 25.6021 42.6046L39.7518 49.9173C40.3539 50.2352 41.5581 49.5994 41.2571 48.6455L38.5476 32.4303C38.5476 32.1124 38.5476 31.7944 38.8486 31.4765L49.6867 20.0305Z"
                            fill="transparent"></path>
                        <path
                            d="M0.313299 20.0305C-0.288914 19.3946 0.0122427 18.1228 0.915411 18.1228L16.2694 15.8972C16.5704 15.8972 16.8715 15.8972 17.1725 15.2613L24.0968 0.317944C24.3979 0 24.6989 0 25 0V42.6046C25 42.6046 24.6989 42.6046 24.3979 42.6046L10.2482 49.9173C9.64609 50.2352 8.44187 49.5994 8.74292 48.6455L11.4524 32.4303C11.4524 32.1124 11.4524 31.7944 11.1514 31.4765L0.313299 20.0305Z"
                            fill="currentColor"></path>
                    </svg>
                </div>

                <p class="mt-3 text-sm text-gray-800 dark:text-white">
                    <span class="font-bold">4.6</span> /5 - <span class="hidden">from 12k</span> Participant Ratings
                </p>

                <div class="mt-5 hidden">
                    <!-- Star -->
                    <svg class="h-auto w-16 text-yellow-500 dark:text-white" width="80" height="27"
                        viewBox="0 0 80 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.558 9.74046H11.576V12.3752H17.9632C17.6438 16.0878 14.5301 17.7245 11.6159 17.7245C7.86341 17.7245 4.58995 14.7704 4.58995 10.6586C4.58995 6.62669 7.70373 3.51291 11.6159 3.51291C14.6498 3.51291 16.4063 5.42908 16.4063 5.42908L18.2426 3.51291C18.2426 3.51291 15.8474 0.878184 11.4961 0.878184C5.94724 0.838264 1.67578 5.50892 1.67578 10.5788C1.67578 15.5289 5.70772 20.3592 11.6558 20.3592C16.8854 20.3592 20.7177 16.8063 20.7177 11.4969C20.7177 10.3792 20.558 9.74046 20.558 9.74046Z"
                            fill="currentColor"></path>
                        <path
                            d="M27.8621 7.78442C24.1894 7.78442 21.5547 10.6587 21.5547 14.012C21.5547 17.4451 24.1096 20.3593 27.9419 20.3593C31.415 20.3593 34.2094 17.7645 34.2094 14.0918C34.1695 9.94011 30.896 7.78442 27.8621 7.78442ZM27.902 10.2994C29.6984 10.2994 31.415 11.7764 31.415 14.0918C31.415 16.4072 29.7383 17.8842 27.902 17.8842C25.906 17.8842 24.3491 16.2874 24.3491 14.0519C24.3092 11.8962 25.8661 10.2994 27.902 10.2994Z"
                            fill="currentColor"></path>
                        <path
                            d="M41.5964 7.78442C37.9238 7.78442 35.2891 10.6587 35.2891 14.012C35.2891 17.4451 37.844 20.3593 41.6763 20.3593C45.1493 20.3593 47.9438 17.7645 47.9438 14.0918C47.9038 9.94011 44.6304 7.78442 41.5964 7.78442ZM41.6364 10.2994C43.4328 10.2994 45.1493 11.7764 45.1493 14.0918C45.1493 16.4072 43.4727 17.8842 41.6364 17.8842C39.6404 17.8842 38.0835 16.2874 38.0835 14.0519C38.0436 11.8962 39.6004 10.2994 41.6364 10.2994Z"
                            fill="currentColor"></path>
                        <path
                            d="M55.0475 7.82434C51.6543 7.82434 49.0195 10.7784 49.0195 14.0918C49.0195 17.8443 52.0934 20.3992 54.9676 20.3992C56.764 20.3992 57.6822 19.7205 58.4407 18.8822V20.1198C58.4407 22.2754 57.1233 23.5928 55.1273 23.5928C53.2111 23.5928 52.2531 22.1557 51.8938 21.3573L49.4587 22.3553C50.297 24.1517 52.0135 26.0279 55.0874 26.0279C58.4407 26.0279 60.9956 23.9122 60.9956 19.481V8.18362H58.3608V9.26147C57.6423 8.38322 56.5245 7.82434 55.0475 7.82434ZM55.287 10.2994C56.9237 10.2994 58.6403 11.7365 58.6403 14.1317C58.6403 16.6068 56.9636 17.9241 55.2471 17.9241C53.4507 17.9241 51.774 16.4471 51.774 14.1716C51.8139 11.6966 53.5305 10.2994 55.287 10.2994Z"
                            fill="currentColor"></path>
                        <path
                            d="M72.8136 7.78442C69.62 7.78442 66.9453 10.2994 66.9453 14.0519C66.9453 18.004 69.9393 20.3593 73.093 20.3593C75.7278 20.3593 77.4044 18.8822 78.3625 17.6048L76.1669 16.1277C75.608 17.006 74.6499 17.8443 73.093 17.8443C71.3365 17.8443 70.5381 16.8862 70.0192 15.9281L78.4423 12.4152L78.0032 11.3772C77.1649 9.46107 75.2886 7.78442 72.8136 7.78442ZM72.8934 10.2196C74.0511 10.2196 74.8495 10.8184 75.2487 11.5768L69.6599 13.9321C69.3405 12.0958 71.097 10.2196 72.8934 10.2196Z"
                            fill="currentColor"></path>
                        <path d="M62.9531 19.9999H65.7076V1.47693H62.9531V19.9999Z" fill="currentColor"></path>
                    </svg>
                    <!-- End Star -->
                </div>
            </div>
        </div>

    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-8xl p-4 md:p-8 md:pr-10 mx-auto space-y-5">

            <div class="mb-5">

                <div class="gap-4 grid grid-cols-1 md:gap-3 md:grid-cols-5 pb-4">

                    @foreach ($images as $image)
                        <div class="group rounded-xl overflow-hidden cursor-pointer" href="#">
                            <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                                <img class="w-full h-full  absolute top-0 left-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                                    src="{{ $image->getUrl() }}" style="aspect-ratio: 16 / 7;"
                                    alt="Image Description">

                            </div>
                        </div>
                        {{-- <img src="{{ $image->getUrl() }}" alt="" style="aspect-ratio: 16 / 10;" class="rounded-2xl
            group-hover:scale-105 transition-transform duration-500 ease-in-out "> --}}
                    @endforeach
                </div>
            </div>
            <div
                class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 dark:ring-gray-700 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-10 lg:flex-auto space-y-4">
                    <h4 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-50 ">
                        {{ $institute->name }}
                    </h4>
                    <div class=" text-[16px]  text-gray-600 dark:text-gray-300 pb-5">
                        {!! $institute->about !!}
                    </div>
                    <div class=" flex items-center gap-x-4 py-6">
                        <h4 class="flex-none text-sm font-semibold leading-6 text-firefly-600 dark:text-firefly-400">
                            What’s included
                        </h4>
                        <div class="h-px flex-auto bg-gray-100 dark:bg-gray-600"></div>
                    </div>
                    <ul role="list"
                        class="mt-3 grid grid-cols-1 gap-2 text-sm leading-6 text-gray-600 dark:text-gray-300 sm:grid-cols-2">

                        @foreach ($institute->services as $service)
                            <li class="flex gap-x-3">
                                <button
                                    class="btn  h65 w-6 rounded-full bg-gray-400/40 p-0 font-medium text-slate-800 hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-200/50 focus:bg-slate-200 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                                    <x-lucide-check class="h-5 w-5 text-current dark:text-white" />
                                </button>
                                <span class="text-gray-900 dark:text-gray-300">{{ $service }}</span>
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                    <div
                        class="rounded-2xl bg-gray-300/40 dark:bg-blue-900/10 h-full py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto max-w-xs px-8">
                            <p class="text-base font-bold text-gray-600 dark:text-gray-500">Pay once, own it
                                forever
                            </p>
                            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                <span class="text-5xl font-bold tracking-tight text-gray-900 dark:text-gray-100">$
                                    {{ $institute->price }}</span>
                                <span
                                    class="text-sm font-semibold leading-6 tracking-wide text-gray-600 dark:text-gray-400">USD</span>
                            </p>
                            <a href="#"
                                class="mt-10 block w-full rounded-md bg-firefly-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-firefly-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-firefly-600 dark:bg-firefly-800 dark:hover:bg-firefly-700 dark:focus-visible:outline-firefly-800">Get
                                access</a>
                            <p class="mt-6 text-xs leading-5 text-gray-600 dark:text-gray-400">
                                Gain knowledge that lasts a lifetime. Invoices and receipts
                                available for easy company reimbursement.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative max-w-8xl p-4 md:p-8 md:pr-10 mx-auto">
        <!-- Overview -->
        <figure>
            <img class=" rounded-2xl" src="{{ asset('images/main/training.jpg') }}" alt="Image Description">
            {{-- <figcaption class="mt-3 text-sm text-left text-gray-500">
        {{ $newsroom->overview }}
    </figcaption> --}}
        </figure>
    </section>
</div>
