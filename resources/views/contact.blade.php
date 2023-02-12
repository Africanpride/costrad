<x-main-layout>
    <!-- contact -->
    <section class="min-h-screen bg-cover "
    {{-- style="background-image: {{ asset('storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/costrad_lecture.jpg') }}" --}}
        style="background-image: url(' {{ asset('storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/banner2.jpg') }}')">
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

                        <div class="mt-6 md:mt-8">
                            <h2 class="text-firefly-300 text-xl ">Our Social Media Handles</h2>

                            <div class="flex mt-4 -mx-1.5 ">
                                <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-blue-500"
                                    href="#">
                                    <x-lucide-twitter class="w-8 h-8 text-current" />
                                </a>

                                <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-blue-500"
                                    href="#">
                                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2 8.80005C16.4731 8.80005 17.694 9.30576 18.5941 10.2059C19.4943 11.1061 20 12.327 20 13.6V19.2H16.8V13.6C16.8 13.1757 16.6315 12.7687 16.3314 12.4687C16.0313 12.1686 15.6244 12 15.2 12C14.7757 12 14.3687 12.1686 14.0687 12.4687C13.7686 12.7687 13.6 13.1757 13.6 13.6V19.2H10.4V13.6C10.4 12.327 10.9057 11.1061 11.8059 10.2059C12.7061 9.30576 13.927 8.80005 15.2 8.80005Z"
                                            fill="currentColor" />
                                        <path d="M7.2 9.6001H4V19.2001H7.2V9.6001Z" fill="currentColor" />
                                        <path
                                            d="M5.6 7.2C6.48366 7.2 7.2 6.48366 7.2 5.6C7.2 4.71634 6.48366 4 5.6 4C4.71634 4 4 4.71634 4 5.6C4 6.48366 4.71634 7.2 5.6 7.2Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>

                                <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-blue-500"
                                    href="#">
                                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>

                                <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-blue-500"
                                    href="#">
                                    <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z"
                                            fill="currentColor" />
                                    </svg>
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

                            <form class="mt-6">
                                <div class="flex-1">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Full Name</label>
                                    <input type="text" placeholder="Dr. Kwame Prince"
                                        class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                                </div>

                                <div class="flex-1 mt-6">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email
                                        address</label>
                                    <input type="email" placeholder="kwame.prince@costrad.org"
                                        class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                                </div>

                                <div class="w-full mt-6">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Message</label>
                                    <textarea
                                        class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-48 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        placeholder="Message"></textarea>
                                </div>

                                <button
                                    class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
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
    <div class="md:p-12 p-4">
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
                                <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
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




</x-main-layout>
