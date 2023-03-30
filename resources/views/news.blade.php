<x-front-layout>

    <section class="relative z-20 overflow-hidden p-6 pt-24 pb-12 ">
        <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[920px] text-center lg:mb-20 space-y-3">
                <x-top-title>
                    COSTrAD: News, Articles & publications
                    <x-slot name="icon">
                        <x-lucide-trending-up class="dark:text-white  w-5 h-5 " />
                    </x-slot>

                    <x-slot name="paragraph">
                        The College of Sustainable Transformation and Development (<a href="{{ url('costrad') }}"
                            class=" bg-clip-text bg-gradient-to-l from-firefly-600 to-violet-500 text-transparent dark:from-firefly-400 dark:to-violet-400 font-bold">COSTrAD</a>)
                        is an initiative of the Logos-Rhema Foundation for Leadership Resource Development, a
                        Non-Governmental Foundation registered in Ghana.
                    </x-slot>

                </x-top-title>
            </div>
        </div>
        <!-- vision -->

        <!-- End vision -->

        <div class="absolute bottom-0 right-0 z-[-1] opacity-10">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
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

        <div class="max-w-7xl mx-auto space-y-6 ">
            <div class="block md:flex md:space-x-2 px-2 lg:p-0">
                <a class="mb-4 md:mb-0 w-full md:w-2/3 relative rounded inline-block" style="height: 24em;"
                    href="{{  route('news.show', [$latest]) }}" target="_blank">
                    <div class="absolute left-0 bottom-0 w-full h-full z-10"
                        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                    <img src="{{ $latest->getFirstMediaUrl('featured_image') ? $latest->getFirstMediaUrl('featured_image') : $latest->featured_image }}&auto=format&fit=crop&w=900&q=60"
                        class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover">
                    <div class="p-4 absolute bottom-0 left-0 z-20">
                        <span
                            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $latest->category->title }}</span>
                        <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                            {{ $latest->title }}
                        </h2>
                        <div class="flex mt-3">
                            <img src="{{ $latest->author->profile_photo_url }}"
                                class="h-10 w-10 rounded-full mr-2 object-cover">
                            <div>
                                <p class="font-semibold text-gray-200 text-sm"> {{$latest->author->full_name }} </p>
                                <p class="font-semibold text-gray-400 text-xs"> {{ $latest->updated_at->format('d-M') }} </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="w-full md:w-1/3 relative rounded" style="height: 24em;" href="./blog.html" target="_blank">
                    <div class="absolute left-0 top-0 w-full h-full z-10"
                        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                    <img src="https://images.unsplash.com/photo-1543362906-acfc16c67564?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1301&amp;q=80"
                        class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover">
                    <div class="p-4 absolute bottom-0 left-0 z-20">
                        <span
                            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Science</span>
                        <h2 class="text-3xl font-semibold text-gray-100 leading-tight">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit.</h2>
                        <div class="flex mt-3">
                            <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BODFjZTkwMjItYzRhMS00OWYxLWI3YTUtNWIzOWQ4Yjg4NGZiXkEyXkFqcGdeQXVyMTQ0ODAxNzE@._V1_UX172_CR0,0,172,256_AL_.jpg"
                                class="h-10 w-10 rounded-full mr-2 object-cover">
                            <div>
                                <p class="font-semibold text-gray-200 text-sm"> Chrishell Staus </p>
                                <p class="font-semibold text-gray-400 text-xs"> 15 Aug </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @forelse ($news as $article)
                    <article class=" overflow-hidden rounded-lg border border-gray-100/20 shadow-md relative">
                        <div class="relative">
                            <a href=" {{ route('news.show', [$article]) }}">
                                <img alt="Office"
                                    src="{{ $article->getFirstMediaUrl('featured_image') ? $article->getFirstMediaUrl('featured_image') : $article->featured_image }}&auto=format&fit=crop&w=900&q=60"
                                    class="h-48 w-full object-cover" />
                            </a>
                            {{-- <span class="absolute left-0 bottom-0 bg-firefly-800 text-white" >123</span> --}}
                        </div>

                        <div class="p-4 sm:p-6 space-y-3">
                            <div class="uppercase text-[8px] py-5">{{ $article->created_at->diffForHumans() }}</div>
                            <a href=" {{ route('news.show', [$article]) }}">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 uppercase">
                                    {{ $article->title }}
                                </h3>
                            </a>

                            <p class="mt-2 !text-[14px] leading-relaxed text-gray-500 !line-clamp-5">
                                {!! $article->body !!}

                            </p>

                            <a href=" {{ route('news.show', [$article]) }}"
                                class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                                Find out more

                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                        <div
                            class="bg-firefly-600 px-2 py-1 absolute right-0 bottom-0 rounded-tl-lg text-xs text-white inline-flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="px-1"> {{ $article->category->title }}</span>
                        </div>
                    </article>
                @empty
                @endforelse
            </div>
            <div class="py-6">{{ $news->links() }}</div>
        </div>

    </section>


    <livewire:subscribe />
</x-front-layout>
