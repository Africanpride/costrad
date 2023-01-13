<x-app-layout>

    <div class="container mx-auto p-4">
        <div>

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
    <!-- End Card Section -->
    <div class="max-w-6xl pt-16 pb-10 px-4 sm:px-6 lg:px-8 md:pt-20 lg:pt-0 lg:pb-20 mx-auto">
        <div class="bg-gray-100 relative rounded-xl p-5 sm:py-16 before:absolute before:top-0 before:left-0 before:bg-[url('../svg/component/banner-bg-gray.svg')] before:bg-no-repeat before:bg-top before:bg-contain before:w-2/3 before:h-full before:z-0 dark:bg-[#151c2f] dark:before:bg-[url('../svg/component/banner-bg-dark.svg')]">
          <div class="max-w-xl relative z-10 text-center mx-auto">
            <div class="mb-5">
              <h2 class="text-2xl font-bold md:text-3xl dark:text-white">Subscribe</h2>
              <p class="mt-3 text-gray-500 dark:text-gray-400">Get all the latest Preline updates and news.</p>
            </div>

            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup">
              <form action="https://praline.us10.list-manage.com/subscribe/post?u=eddd28397383718c2f15e15c2&amp;id=b97f8fe839" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
                <div id="mc_embed_signup_scroll">
                  <div class="grid sm:flex gap-3">
                    <input type="email" value="" name="EMAIL" id="mce-EMAIL" class="block w-full border-gray-200 sm:text-sm shadow-sm rounded-md p-3 dark:bg-[#151c2f] dark:border-gray-800 dark:text-gray-400" placeholder="Email address">
                    <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="inline-block text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-white font-medium rounded-md cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-gray-100 transition py-2.5 px-6 dark:focus:ring-offset-[#151c2f]">
                  </div>

                  <div id="mce-responses" class="mt-3 text-gray-500 dark:text-gray-400">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                  </div>

                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_eddd28397383718c2f15e15c2_b97f8fe839" tabindex="-1" value=""></div>
                </div>
              </form>
            </div>
            <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
          </div>
        </div>
      </div>
</x-app-layout>
