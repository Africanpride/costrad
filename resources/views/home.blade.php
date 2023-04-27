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


    <section class="max-w-8xl p-4 md:p-8 md:pr-10 mx-auto">

        <div
            class=" min-h-[600px] mx-auto rounded-2xl border  border-gray-300/10 text-center space-y-5
         bg-slate-500/10 dark:bg-black py-16 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))]
          from-slate-900 to-gray-900">
            <livewire:what-is-costrad />

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

    <section class="max-w-8xl p-4 md:p-8 md:pr-10 mx-auto">
        <div
            class=" min-h-[600px] mx-auto rounded-2xl border  border-gray-300/10 text-center space-y-5 p-8
         bg-slate-500/10 dark:bg-black py-16 dark:bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))]
          from-slate-900 to-gray-900">
            <div class="lg:px-8 max-w-8xl md:my-16 mx-auto px-4 space-y-5 text-center">
                <h2
                    class="  text-slate-900 text-3xl sm:text-5xl tracking-tight font-bold  font-['inter'] uppercase prominent-titles">
                    News & Publications</h2>
                <p class="my-2 text-2xl font-bold
                text-slate-800 px-5 dark:text-white">
                    Providing valuable resources for researchers and analysts keen on staying up-to-date with the latest
                    developments in the 8-spheres of society.
                </p>
                <p class="text-lg leading-6 font-semibold text-sky-500 "><span>
                        <a href="{{ route('news') }}">More News & Publications</a></span> </p>
            </div>

            <div class="grid gap-4 md:grid-cols-4 sm:mx-auto md:max-w-full">
                @if ($latest->count() > 0)

                    @foreach ($latest as $article)
                        <!-- Card -->
                        <a class="group block" href="{{ route('news.show', [$article]) }}">
                            <div
                                class="flex-shrink-0 relative w-full rounded-xl overflow-hidden h-[200px] before:absolute before:inset-x-0 before:w-full before:h-full before:bg-gradient-to-t before:from-gray-900/[.7] before:z-[1]">
                                <img class="w-full h-full absolute top-0 left-0 object-cover"
                                    src="{{ $article->getFirstMediaUrl('featured_image') ? $article->getFirstMediaUrl('featured_image') : $article->featured_image }}&auto=format&fit=crop&w=1062&q=80"
                                    alt="{{ $article->title }}">
                            </div>

                            <h3
                                class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-gray-300 dark:group-hover:text-white">
                                {{ $article->title }}
                            </h3>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ $article->created_at->format('d M Y') }}
                            </p>
                        </a>
                        <!-- End Card -->
                    @endforeach

                @endif

            </div>
        </div>
    </section>

    <section class="max-w-8xl p-4 md:p-8 md:pr-10 mx-auto  ">
        <div style="background-image: url('{{ asset('images/main/quarterglobe.jpg') }}');"
            class="min-h-[35vh]  bg-center bg-cover bg-no-repeat relative rounded-2xl md:min-h-[85vh] ">
            <div
                class="bottom-0 left-0 md:left-auto md:mx-0 md:text-left mx-auto p-6 right-0 text-center">
                <!-- Card -->
                <div
                class="min-h-[35vh]  bg-center bg-cover bg-no-repeat relative  md:min-h-[85vh] h-full text-center flex justify-center items-center  ">
                <h1
                    class=" max-w-6xl md:text-3xl uppercase font-['anton'] text-3xl lg:text-4xl dark:text-gray-100 text-firefly-200">
                    We invite you to partner with us in developing leaders who have the capacity and vision to create
                    lasting and positive change in all domains of life.
                </h1>

            </div>
                <!-- End Card -->
            </div>
        </div>
    </section>




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
