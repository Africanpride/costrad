<x-front-layout>

    <section class="max-w-8xl p-4 md:p-8 md:pr-10 mx-auto ">
        <div style="background-image: url('{{ asset('images/main/un2.jpg') }}');"
            class="min-h-[35vh]  bg-center bg-cover bg-no-repeat relative rounded-xl md:min-h-[85vh] ">
            <div
                class="absolute bottom-0 left-0 right-0 max-w-md text-center mx-auto p-6 md:left-auto md:text-left md:mx-0">
                <!-- Card -->
                <div class="px-5 py-4 inline-block bg-white rounded-lg md:p-7 dark:bg-gray-900">
                    <div class="hidden md:block">
                        <h3 class=" font-bold text-gray-800 text-sm dark:text-gray-200"> COSTrAD: A Critical Mandate.
                        </h3>
                        <p class="mt-2 text-gray-800 dark:text-gray-200 text-xs text-left">The College of Sustainable
                            Transformation and Development (COSTrAD) and the various institutes are committed to the
                            restoration, transformation and development of all spheres of society.</p>
                    </div>

                    <div class="md:mt-6">
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
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>

    <div class="lg:px-8 max-w-8xl md:my-16 mx-auto px-4 space-y-5">
        <p class="text-lg leading-6 font-semibold text-sky-500 ">New York Times Events</p>
        <h2 class="mt-4 max-w-5xl text-slate-900 text-3xl sm:text-6xl tracking-tight font-bold dark:text-white delay-500 font-['inter']"
        style="opacity: 1; transform: translate3d(0px, 0px, 0px);">Live
            events by The New York Times.</h2>
        <div class="mt-4 max-w-3xl prose prose-slate dark:prose-dark">
            <p class="text-gradient-copilot">The New York Times Events website is an online collection of virtual
                gatherings and live-streamed events
                by the 171-year-old newspaper. The Events website was built using Tailwind CSS.</p>
        </div>

    </div>


    <section class="max-w-8xl p-4 md:p-8 md:pr-10 mx-auto">

        <div
            class=" min-h-[600px] mx-auto rounded-2xl border  border-gray-300/10 text-center space-y-5
         bg-slate-500/10 dark:bg-black py-16 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))]
          from-slate-900 to-gray-900">
            <livewire:what-is-costrad />

        </div>
    </section>

    <section class=" mx-auto bg-cover"  style="background-image: url('{{ asset('images/main/quarterglobe.jpg') }}');">
        <div
            class="min-h-[35vh]  bg-center bg-cover bg-no-repeat relative  md:min-h-[85vh] h-full text-center flex justify-center items-center  ">
            <h1 class=" max-w-7xl text-2xl tracking-normal leading-snug font-bold  text-white px-8 font-['inter'] uppercase">
                We invite you to partner with us in developing leaders who have the capacity and vision to create lasting and positive change in all domains of life.


            </h1>
            <div
                class="absolute bottom-0 left-0 right-0 max-w-md text-center mx-auto p-6 md:left-auto md:text-left md:mx-0 hidden">
                <!-- Card -->
                <div class="px-5 py-4 inline-block bg-white rounded-lg md:p-7 dark:bg-gray-900">

                    <div class="hidden md:block">
                        <h3 class=" font-bold text-gray-800 text-sm dark:text-gray-200"> COSTrAD: Our Objective.
                        </h3>
                        <p class="mt-2 text-gray-800 dark:text-gray-200 text-xs text-left">The goal is to train and transform leaders who can effectively influence and impact their various organisations and nations holistically, and to create a forum where they can identify and propose solutions to systemic or structural challenges in their respective nations.</p>
                    </div>

                    <div class="md:mt-6 hidden">
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
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>


    <section class="max-w-8xl p-4 md:p-8 md:pr-10 mx-auto">

        <div
            class=" min-h-[600px] mx-auto rounded-2xl border  border-gray-300/10 text-center space-y-5
         bg-slate-500/10 dark:bg-black py-16 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))]
          from-slate-900 to-gray-900">
            <livewire:institutes-card />

        </div>
    </section>

    {{-- <div class=" dark:border-gray-300/20 text-center space-y-5 bg-slate-500/10 dark:bg-black py-16 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-900 to-gray-900">

</div> --}}


    <!-- Hero -->
    <div class="relative overflow-hidden hidden">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            {{-- <div class="max-w-2xl text-center mx-auto">
                <h1 class="dark:title-gradient ">Designed for

                </h1>
                <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Build your business here. Take it anywhere.</p>
            </div> --}}

            <div class="mt-10 relative max-w-5xl mx-auto">

                {{-- <div
                    class="w-full object-cover h-96 sm:h-[480px]
                     bg-[url({{ asset('/storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/quarterglobe.jpeg') }})] bg-no-repeat bg-center bg-cover rounded-xl"> --}}
                <div class="w-full object-cover h-96 sm:h-[480px]
                     bg-no-repeat bg-center bg-cover rounded-xl"
                    style="background-image: url('{{ asset('images/main/quarterglobe.jpg') }}');">
                </div>

                <div class="absolute inset-0 w-full h-full">
                    <div class="flex flex-col justify-center items-center w-full h-full">
                        <a class="inline-flex justify-center items-center gap-x-1.5 text-center  bg-white text-gray-800 hover:text-gray-600 rounded-full transition focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white  py-3 px-4 dark:bg-black dark:text-gray-200 dark:hover:text-gray-400 dark:focus:ring-offset-black"
                            href="#">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                            </svg>
                            Play the overview
                        </a>
                    </div>
                </div>

                <div
                    class="absolute bottom-12 -left-20 -z-[1] w-48 h-48 bg-gradient-to-b from-orange-500 to-white p-px rounded-lg dark:to-slate-900">
                    <div class="bg-white w-48 h-48 rounded-lg dark:bg-slate-900"></div>
                </div>

                <div
                    class="absolute -top-12 -right-20 -z-[1] w-48 h-48 bg-gradient-to-t from-blue-600 to-cyan-400 p-px rounded-full">
                    <div class="bg-white w-48 h-48 rounded-full dark:bg-slate-900"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <section class="py-4 md:py-8 mx-auto">

        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
                alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
            <svg viewBox="0 0 1097 845" aria-hidden="true"
                class="hidden transform-gpu blur-3xl sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:w-[68.5625rem]">
                <path fill="url(#10724532-9d81-43d2-bb94-866e98dd6e42)" fill-opacity=".2"
                    d="M301.174 646.641 193.541 844.786 0 546.172l301.174 100.469 193.845-356.855c1.241 164.891 42.802 431.935 199.124 180.978 195.402-313.696 143.295-588.18 284.729-419.266 113.148 135.13 124.068 367.989 115.378 467.527L811.753 372.553l20.102 451.119-530.681-177.031Z" />
                <defs>
                    <linearGradient id="10724532-9d81-43d2-bb94-866e98dd6e42" x1="1097.04" x2="-141.165"
                        y1=".22" y2="363.075" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#776FFF" />
                        <stop offset="1" stop-color="#FF4694" />
                    </linearGradient>
                </defs>
            </svg>
            <svg viewBox="0 0 1097 845" aria-hidden="true"
                class="absolute left-1/2 -top-52 -z-10 w-[68.5625rem] -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0">
                <path fill="url(#8ddc7edb-8983-4cd7-bccb-79ad21097d70)" fill-opacity=".2"
                    d="M301.174 646.641 193.541 844.786 0 546.172l301.174 100.469 193.845-356.855c1.241 164.891 42.802 431.935 199.124 180.978 195.402-313.696 143.295-588.18 284.729-419.266 113.148 135.13 124.068 367.989 115.378 467.527L811.753 372.553l20.102 451.119-530.681-177.031Z" />
                <defs>
                    <linearGradient id="8ddc7edb-8983-4cd7-bccb-79ad21097d70" x1="1097.04" x2="-141.165"
                        y1=".22" y2="363.075" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#776FFF" />
                        <stop offset="1" stop-color="#FF4694" />
                    </linearGradient>
                </defs>
            </svg>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Work with us</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt.
                        Qui
                        irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                </div>
                <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                    <div
                        class="grid grid-cols-1 gap-y-6 gap-x-8 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                        <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>

                        <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>

                        <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>

                        <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
                    </div>
                    <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 md:grid-cols-4">
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Offices worldwide</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">12</dd>
                        </div>

                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Full-time colleagues</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">300+</dd>
                        </div>

                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Hours per week</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">40</dd>
                        </div>

                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Paid time off</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Unlimited</dd>
                        </div>
                    </dl>
                </div>
            </div>


        </div>
    </section>


    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        {{-- <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
                <p
                    class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                    Brand new
                </p>
            </div>
            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 dark:text-gray-300  sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="07690130-d013-42bc-83f4-90de7ac68f76" x="0" y="0"
                                width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#07690130-d013-42bc-83f4-90de7ac68f76)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">The</span>
                </span>
                quick, brown fox jumps over a lazy dog
            </h2>
            <p class="text-base text-gray-700 dark:text-white  md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque
                ipsa quae.
            </p>
        </div> --}}
        <div class="grid max-w-screen-lg mx-auto space-y-6 lg:grid-cols-2 lg:space-y-0 lg:divide-x">
            <div class="space-y-6 sm:px-16">
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                    fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-base   font-bold leading-5">The deep ocean</h6>
                        <p class=" text-gray-900 dark:text-gray-300 text-lg ">
                            Webtwo ipsum orkut reddit meebo skype vimeo jajah spock empressr zimbra, mobly napster.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                    fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-base   font-bold leading-5">When has justice</h6>
                        <p class=" text-gray-900 dark:text-gray-300 ">
                            Lookout flogging bilge rat main sheet bilge water nipper fluke to go on account heave down
                            clap of thunder.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                    fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-base   font-bold leading-5">Leverage agile</h6>
                        <p class=" text-gray-900 dark:text-gray-300 ">
                            The first mate and his Skipper too will do their very best to make the others comfortable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="space-y-6 sm:px-16">
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                    fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-base   font-bold leading-5">Organically grow</h6>
                        <p class=" text-gray-900 dark:text-gray-300 ">
                            Skate ipsum dolor sit amet, alley oop vert mute-air Colby Carter flail 180 berm over the
                            sea.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                    fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-base   font-bold leading-5">Have a good one</h6>
                        <p class=" text-gray-900 dark:text-gray-300 ">
                            Cheese on toast airedale the big cheese. Danish fontina cheesy grin airedale danish fontina.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col max-w-md sm:flex-row">
                    <div class="mb-4 mr-4">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-firefly-100">
                            <svg class="w-8 h-8 text-firefly-600 sm:w-10 sm:h-10" stroke="currentColor"
                                viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                    fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h6 class="mb-3 text-base   font-bold leading-5">A slice of heaven</h6>
                        <p class=" text-gray-900 dark:text-gray-300 ">
                            A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 right-0 z-[-1]">
        <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5"
                d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                fill="url(#paint0_linear)"></path>
            <defs>
                <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#3056D3" stop-opacity="0.36"></stop>
                    <stop offset="1" stop-color="#F5F2FD" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144"></stop>
                </linearGradient>
            </defs>
        </svg>
    </div>

    <livewire:subscribe />
</x-front-layout>
