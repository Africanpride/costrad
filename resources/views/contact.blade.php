<x-main-layout>
    <!-- contact -->
    <section class="min-h-screen bg-cover " {{-- style="background-image: {{ asset('storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/costrad_lecture.jpg') }}" --}}
        style="background-image: url(' {{ asset('storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/bg2.png') }}')">
        <div class="flex flex-col min-h-screen bg-black/60">
            <div class="container flex flex-col flex-1 px-6 py-12 mx-auto">
                <div class="flex-1 lg:flex lg:items-center lg:-mx-6">
                    <div class="text-white lg:w-1/2 lg:mx-6">
                        <h1 class="text-xl text-firefly-300 font-semibold capitalize lg:text-xl">We look forward to
                            hearing from you soon!</h1>

                        <p class="max-w-xl mt-6 text-xl">
                            we've made it easy for you to reach out to us whenever you need to. Our form is available
                            24/7 and our team is always ready to assist you. So if you have any questions, concerns, or
                            just want to chat, we encourage you to reach out to us today.


                        </p>

                        <div class="mt-6 md:mt-8 hidden">
                            <h2 class="text-firefly-300 text-xl ">Our Social Media Handles</h2>

                            <div class="flex mt-4 -mx-1.5 ">
                                <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-firefly-500"
                                    href="#">
                                    <x-lucide-twitter class="w-8 h-8 text-current" />
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="mt-8 lg:w-1/2 lg:mx-6">

                        <div
                            class="w-full px-8 py-10 mx-auto overflow-hidden bg-white shadow-2xl rounded-xl dark:bg-gray-900 lg:max-w-xl">
                            <h1 class="text-xl font-medium text-gray-700 dark:text-gray-200">Contact form</h1>

                            <p class="mt-2 text-gray-500 dark:text-gray-400">
                                Whether you have a question, concern, or simply want to provide feedback, our team is
                                here to help.
                            </p>
                            <div class="flex justify-start items-center gap-x-2" >
                                @error('g-recaptcha-score')
                                    <x-lucide-check-circle-2 class="text-red-500 h-4 w-4" />

                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <form method="POST" action="{{ route('contact-form') }}" id="contactForm"
                                accept-charset="UTF-8" class="form-horizontal space-y-4" enctype="multipart/form-data">
                                @csrf



                                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                <input type="hidden" name="g-recaptcha-score" id="g-recaptcha-score">

                                <div class="grid grid-cols-2 gap-x-2">
                                    <div>
                                        <div class="">
                                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Full
                                                Name</label>

                                            <input name="name" value="{{ old('name') }}" type="text"
                                                placeholder="Dr. Kwame Prince"
                                                class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-firefly-400 focus:ring-firefly-300 focus:ring-opacity-40 dark:focus:border-firefly-300 focus:outline-none focus:ring" />
                                        </div>
                                        <div class="flex justify-start items-center gap-x-2" >
                                            @error('name')
                                                <x-lucide-check-circle-2 class="text-red-500 h-4 w-4" />

                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div>
                                        <div class="">
                                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email
                                                address</label>
                                            <input name="email" value="{{ old('email') }}" type="email"
                                                placeholder="kwame.prince@costrad.org"
                                                class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-firefly-400 focus:ring-firefly-300 focus:ring-opacity-40 dark:focus:border-firefly-300 focus:outline-none focus:ring" />
                                        </div>
                                        <div class="flex justify-start items-center gap-x-2" >
                                            @error('email')
                                                <x-lucide-check-circle-2 class="text-red-500 h-4 w-4" />

                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="w-full mt-6">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Message</label>
                                    <div class="flex justify-start items-center gap-x-2" >
                                        @error('message')
                                            <x-lucide-check-circle-2 class="text-red-500 h-4 w-4" />

                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <textarea name="message" value="{{ old('message') }}"
                                        class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-48 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-firefly-400 focus:ring-firefly-300 focus:ring-opacity-40 dark:focus:border-firefly-300 focus:outline-none focus:ring"
                                        placeholder="Message">{{ old('message') }}</textarea>
                                </div>



                                <button type="submit"
                                    class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-firefly-600 rounded-md hover:bg-firefly-500 focus:outline-none focus:ring focus:ring-firefly-400 focus:ring-opacity-50">
                                    get in touch
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact -->


    <!-- vision -->
    <div class="md:p-12 p-4 hidden">
        <div class="relative overflow-hidden rounded-2xl">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex absolute -top-96 left-1/2 transform -translate-x-1/2">
                <div
                    class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900">
                </div>
                <div
                    class="bg-gradient-to-tl from-firefly-50 via-firefly-100 to-firefly-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-firefly-900/70">
                </div>
            </div>
            <!-- End Gradients -->

            <div class="relative z-10 py-8">
                <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                    <div class="max-w-9xl text-center mx-auto">
                        <p
                            class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-firefly-600 to-violet-500 text-transparent dark:from-firefly-400 dark:to-violet-400 uppercase ">
                            COSTrAD: Our Transformational Vision
                        </p>

                        <!-- Title -->
                        <div class="mt-5 max-w-10xl">
                            <h1
                                class="block font-semibold text-firefly-800 text-xl md:text-3xl  dark:text-gray-200 font-['roboto'] uppercase">
                                Seeing the invisible, hearing the inaudible, touching the intangible, perceiving the
                                imperceptible and doing the seemingly impossible.
                            </h1>
                        </div>
                        <!-- End Title -->

                        <!-- Buttons -->
                        <div class="mt-8 grid gap-3 w-full sm:inline-flex sm:justify-center">
                            <a class="inline-flex justify-center items-center gap-x-3 text-center bg-firefly-600 hover:bg-firefly-700 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-firefly-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800"
                                href="{{ url('our-process') }}">
                                Start the Journey
                                <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </a>
                            <a class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-firefly-800 hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:text-white dark:hover:bg-gray-800 dark:hover:border-gray-900 dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800"
                                href="{{ url('/institutes') }}">
                                <x-lucide-globe class="w-5 h-5 text-current " />
                                Our Institutes
                            </a>
                        </div>
                        <!-- End Buttons -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End vision -->


    @push('head-script')
        <script>
            function callbackThen(response) {
                response.json().then(function(data) {
                    if (data.success && data.score > 0.5) {
                        console.log(data);
                        document.getElementById('g-recaptcha-response').value = data.success;
                        document.getElementById('g-recaptcha-score').value = data.score;
                    } else {

                    }
                });
            }

            function callbackCatch(error) {
                console.log('Error;' + error);

            }
        </script>
        {!! htmlScriptTagJsApi([
            'callback_then' => 'callbackThen',
            'callback_catch' => 'callbackCatch',
        ]) !!}
    @endpush

</x-main-layout>
