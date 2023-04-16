<div>

    <section class="max-w-8xl p-4 md:p-8 md:pr-10 mx-auto">
        <div class="kenburns min-h-[55vh] bg-center bg-cover bg-no-repeat relative rounded-3xl md:min-h-[85vh]"
            style="background-image: url('{{ $institute->getFirstMediaUrl('banner') }}');">

            <div
                class="absolute bottom-0 left-0 right-0 max-w-md text-center mx-auto p-6 md:left-auto md:text-left md:mx-0">
                <!-- Card -->
                <div class="px-5 py-4 inline-block bg-white rounded-2xl md:p-7 dark:bg-gray-900">
                    <div class="hidden md:block">
                        <h3 class=" font-bold text-gray-800 text-sm dark:text-gray-200"> <span
                                class="uppercase">{{ $institute->acronym }}</span>: A Critical Mandate.
                        </h3>
                        <p class="mt-2 text-gray-800 dark:text-gray-200 text-xs text-left">
                            <span class="text-xs">{!! $institute->overview !!}</span>
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

    {{-- <img class="w-full h-[750px] relative" src="{{ $institute->institute_banner_url }}" alt="{{ $institute->name }}"> --}}
    {{-- <x-institute.stats price="{{ $institute->price }}" /> --}}
    <div class="bg-white dark:bg-gray-900 py-8">
        <div class="mx-auto max-w-7xl px-4 lg:px-5 space-y-5">

            <div class="mb-5">
                <div class="mx-auto max-w-4xl sm:text-center pb-10">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-50 sm:text-4xl">
                        Other Key Subjects Treated at <span class="uppercase">{{ $institute->acronym }}</span>
                    </h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
                        Foundations for brain architecture in early childhood, Early childhood development, Developing
                        children into sons, Strategic Innovative and effective child development systems and Futuristic
                        systems of education.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-5 md:gap-3 gap-4 pb-10">

                    @foreach ($images as $image)
                        <div class="group rounded-xl overflow-hidden cursor-pointer" href="#">
                            <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                                <img class="w-full h-full absolute top-0 left-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                                    src="{{ $image->getUrl() }}" style="aspect-ratio: 16 / 9;" alt="Image Description">

                            </div>
                        </div>
                        {{-- <img src="{{ $image->getUrl() }}" alt="" style="aspect-ratio: 16 / 10;" class="rounded-2xl
            group-hover:scale-105 transition-transform duration-500 ease-in-out "> --}}
                    @endforeach
                </div>
            </div>
            <div
                class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 dark:ring-gray-700 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-10 lg:flex-auto">
                    <h4 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-50">{{ $institute->name }}
                    </h4>
                    <p class=" text-base leading-7 text-gray-600 dark:text-gray-300">
                        {!! $institute->about !!}
                    </p>
                    <div class=" flex items-center gap-x-4">
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
                        class="rounded-2xl bg-gray-300/40 dark:bg-blue-900/10 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto max-w-xs px-8">
                            <p class="text-base font-semibold text-gray-600 dark:text-gray-400">Pay once, own it forever
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
                                Invoices and receipts
                                available for easy company reimbursement
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="relative  mx-auto max-w-7xl h-42 pt-8 ">
    <!-- Overview -->
<figure>
    <img class=" rounded-2xl"
        src="{{ asset('images/main/training.jpg') }}"
        alt="Image Description">
    {{-- <figcaption class="mt-3 text-sm text-left text-gray-500">
        {{ $newsroom->overview }}
    </figcaption> --}}
</figure>

</div>
