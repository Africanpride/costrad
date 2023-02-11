<x-main-layout>
    <!-- component -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <!-- This is an example component -->
    <div class="bg-gray-200 p-10 flex flex-wrap sys-app-notCollapsed ">
        <!--this contains my photo, email and some information.-->
        <div class="p-4 w-full ">
            <div class="w-1/3 py-4 px-6 flex mx-auto ">
                <span class="px-2 mx-2 inline-block capitalize font-medium ">
                    <span class="block text-xl mt-3">Built by</span>
                </span>
                <img src="https://lh3.googleusercontent.com/-U0lTbxzh0bE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdJubMZweMDYD49ddsxq1wXai_9Cg/s48-c/photo.jpg"
                    alt="alt placeholder" class="w-12 h-12 mt-1 rounded-full inline-block">
                <span class="px-2 mx-2 inline-block capitalize font-medium">
                    <span class="block text-xl">Hamza Nouali</span>
                    <span class="block font-normal text-gray-700">Web Developer</span>
                </span>
            </div>
            <div class="p-4 text-center">
                <a href="https://twitter.com/AppClsname" target="_tab" class="p-2 mx-2 ">
                    <i class="fab fa-twitter inline-block w-5">
                    </i>
                    <span class="mx-2 ">@ClsnameApp</span>
                </a>
                <a href="https://twitter.com/HamzaNouali3" target="_tab" class="p-2 mx-2 ">
                    <i class="fab fa-twitter inline-block w-5">
                    </i>
                    <span class="mx-2 ">@hamzanouali</span>
                </a>
                <span class="p-2 mx-2 ">
                    <i class="fas fa-envelope inline-block w-5">
                    </i>
                    <span class="mx-2 ">hamza.nouali.business@gmail.com</span>
                </span>
                <a href="https://www.linkedin.com/in/hamza-nouali-8786ab19a/" target="_tab" class="p-2 mx-2 ">
                    <i class="fab fa-linkedin inline-block w-5">
                    </i>
                    <span class="mx-2 ">hamza nouali</span>
                </a>
            </div>
            <p class="p-4 text-center w-3/5 mx-auto">These are HTML & CSS components built using Tailwind CSS framework,
                you can
                download it (100% Free and well documented)
                to learn from it or even re-use it.</p>
        </div>
        <!--horizontal navigations-->
        <div class="p-4 pb-0 mx-auto flex flex-wrap ">
            <div class="p-4 w-full lg:w-1/2 bg-gray-800">
                <!--dark mode - without text - icons only-->
                <div class="p-2 text-gray-700 bg-gray-900 rounded-lg shadow-lg ">
                    <span class="px-2 mr-2 border-r border-gray-800">
                        <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                            alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto">
                    </span>
                    <span class="px-1 hover:text-white cursor-pointer">
                        <i class="fas fa-stream p-2 bg-gray-800 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 hover:text-white cursor-pointer">
                        <i class="fas fa-search p-2 bg-gray-800 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 hover:text-white cursor-pointer">
                        <i class="fas fa-th p-2 bg-gray-800 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 hover:text-white cursor-pointer">
                        <i class="w-8 fas fa-calendar-alt p-2 bg-gray-800 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 hover:text-white cursor-pointer w-8 relative">
                        <i class="fas fa-bell p-2 bg-gray-800 rounded-full">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>
                    </span>
                    <span class="hover:text-white cursor-pointer w-10 relative float-right mr-3">
                        <i class="fas fa-user p-2 bg-gray-800 rounded-full">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>
                    </span>
                </div>
            </div>
            <div class="p-4 w-full lg:w-1/2">
                <!--dark mode - without text - icons only-->
                <div class="p-2 text-gray-900 bg-white rounded-lg shadow-lg ">
                    <span class="px-2 mr-2 border-r border-gray-800">
                        <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                            alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto">
                    </span>
                    <span class="px-1 cursor-pointer hover:text-gray-700">
                        <i class="fas fa-stream p-2 bg-gray-200 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 cursor-pointer hover:text-gray-700">
                        <i class="fas fa-search p-2 bg-gray-200 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 cursor-pointer hover:text-gray-700">
                        <i class="fas fa-th p-2 bg-gray-200 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 cursor-pointer hover:text-gray-700">
                        <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 w-8 relative cursor-pointer hover:text-gray-700">
                        <i class="fas fa-bell p-2 bg-gray-200 rounded-full">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>
                    </span>
                    <span class="w-10 relative float-right mr-3 cursor-pointer hover:text-gray-700">
                        <i class="fas fa-user p-2 bg-gray-200 rounded-full">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>
                    </span>
                </div>
            </div>
            <div class="p-4 w-full lg:w-1/2 bg-gray-800">
                <!--dark mode - text and icons-->
                <div class="p-2 text-gray-700 bg-gray-900 rounded-lg shadow-lg font-medium capitalize">
                    <span class="px-2 mr-2 border-r border-gray-800">
                        <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                            alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto">
                    </span>
                    <span class="px-2 py-1 cursor-pointer hover:bg-gray-800 hover:text-gray-300 text-sm rounded mb-5">
                        <i class="w-8 fas fa-stream p-2 bg-gray-800 rounded-full">
                        </i>
                        <span class="mx-1">categories</span>
                    </span>
                    <span class="px-2 py-1 cursor-pointer hover:bg-gray-800 hover:text-gray-300 text-sm rounded mb-5">
                        <i class="w-8 fas fa-th p-2 bg-gray-800 rounded-full">
                        </i>
                        <span class="mx-1">menu</span>
                    </span>
                    <span class="px-1 hover:text-white cursor-pointer">
                        <i class="fas fa-search p-2 bg-gray-800 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 hover:text-white cursor-pointer">
                        <i class="w-8 fas fa-calendar-alt p-2 bg-gray-800 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 hover:text-white cursor-pointer w-8 relative">
                        <i class="w-8 fas fa-bell p-2 bg-gray-800 rounded-full">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>
                    </span>
                    <span class="hover:text-white cursor-pointer w-10 relative float-right mr-3">
                        <i class="fas fa-user p-2 bg-gray-800 rounded-full">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>
                    </span>
                </div>
            </div>
            <div class="p-4 w-full lg:w-1/2">
                <!--light mode - text and icons-->
                <div class="p-2 text-gray-900 bg-white rounded-lg shadow-lg font-medium capitalize">
                    <span class="px-2 mr-2 border-r border-gray-800">
                        <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                            alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto">
                    </span>
                    <span class="px-2 py-1 cursor-pointer hover:bg-gray-200 hover:text-gray-700 text-sm rounded mb-5">
                        <i class="w-8 fas fa-stream p-2 bg-gray-200 rounded-full">
                        </i>
                        <span class="mx-1">categories</span>
                    </span>
                    <span class="px-2 py-1 cursor-pointer hover:bg-gray-200 hover:text-gray-700 text-sm rounded mb-5">
                        <i class="w-8 fas fa-th p-2 bg-gray-200 rounded-full">
                        </i>
                        <span class="mx-1">menu</span>
                    </span>
                    <span class="px-1 cursor-pointer hover:text-gray-700">
                        <i class="fas fa-search p-2 bg-gray-200 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 cursor-pointer hover:text-gray-700">
                        <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">
                        </i>
                    </span>
                    <span class="px-1 w-8 relative cursor-pointer hover:text-gray-700">
                        <i class="w-8 fas fa-bell p-2 bg-gray-200 rounded-full">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>
                    </span>
                    <span class="w-10 relative float-right mr-3 cursor-pointer hover:text-gray-700">
                        <i class="w-8 fas fa-user p-2 bg-gray-200 rounded-full">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>
                    </span>
                </div>
            </div>
        </div>
        <!--vertical navigations-->
        <div class="p-4 pt-0 mx-auto flex flex-wrap ">
            <!--dark mode - tight side navigation with yellow notification-->
            <div class="p-4 w-24 bg-gray-800">
                <div class="py-4 px-2 text-gray-700 bg-gray-900 rounded-lg text-center shadow-lg">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                        alt="alt placeholder" class="w-8 h-8 mx-auto mb-5">
                    <span class="cursor-pointer hover:text-white px-2 block mb-5">
                        <i class="fas fa-stream">
                        </i>
                    </span>
                    <span class="cursor-pointer hover:text-white px-2 block mb-5">
                        <i class="fas fa-search p-2 bg-gray-800 rounded-full">
                        </i>
                    </span>
                    <span class="cursor-pointer hover:text-white px-2 block mb-5 relative">
                        <i class="fas fa-users">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-2 text-xs bg-yellow-500 text-black font-medium px-2 shadow-lg rounded-full border-2 border-gray-900">3</span>
                    </span>
                    <span class="cursor-pointer hover:text-white px-2 block mb-5">
                        <i class="fas fa-calendar-alt">
                        </i>
                    </span>
                </div>
            </div>
            <div class="p-4 w-24 bg-gray-800">
                <!--dark mode - tight side navigation with red notification-->
                <div class="py-4 px-2 text-gray-700 bg-gray-900 rounded text-center shadow-lg">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                        alt="alt placeholder" class="w-8 h-8 mx-auto mb-5">
                    <span class="cursor-pointer hover:text-white px-2 block mb-5">
                        <i class="fas fa-stream">
                        </i>
                    </span>
                    <span class="cursor-pointer hover:text-white px-2 block mb-5">
                        <i class="fas fa-search p-2 bg-gray-800 rounded-full">
                        </i>
                    </span>
                    <span class="cursor-pointer hover:text-white px-2 block mb-5 relative">
                        <i class="fas fa-bell">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-2 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full border-2 border-gray-900">3</span>
                    </span>
                    <span class="cursor-pointer px-2 block mb-5 relative">
                        <span
                            class="absolute right-0 top-0 -mt-2 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full border-2 border-gray-900">3</span>
                        <img src="https://lh3.googleusercontent.com/-U0lTbxzh0bE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdJubMZweMDYD49ddsxq1wXai_9Cg/s48-c/photo.jpg"
                            alt="alt placeholder" class="w-8 h-8 mx-auto mb-5 rounded-full">
                    </span>
                </div>
            </div>
            <div class="p-4 w-64 bg-gray-800">
                <!--dark mode - wide side navigation-->
                <div
                    class="w-full py-4 px-2 text-gray-700 bg-gray-900 rounded-lg text-left capitalize font-medium shadow-lg">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                        alt="alt placeholder" class="w-8 h-8 mx-auto mb-5 ">
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">
                        <i class="w-8 fas fa-stream p-2 bg-gray-800 rounded-full">
                        </i>
                        <span class="mx-2">categories</span>
                    </span>
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">
                        <i class="w-8 fas fa-search p-2 bg-gray-800 rounded-full">
                        </i>
                        <span class="mx-2">search</span>
                    </span>
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">
                        <span class="w-8 mb-5 relative">
                            <i class="w-8 fas fa-user p-2 bg-gray-800 rounded-full">
                            </i>
                            <span
                                class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>
                        </span>
                        <span class="mx-2">sign ups</span>
                    </span>
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">
                        <i class="w-8 fas fa-th p-2 bg-gray-800 rounded-full">
                        </i>
                        <span class="mx-2">menu</span>
                    </span>
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">
                        <i class="w-8 fas fa-calendar-alt p-2 bg-gray-800 rounded-full">
                        </i>
                        <span class="mx-2">calendar</span>
                    </span>
                </div>
            </div>
            <div class="p-4 w-64 ">
                <!--light mode - wide side navigation-->
                <div
                    class="w-full py-4 px-2 text-gray-900 bg-white rounded-lg text-left capitalize font-medium shadow-lg">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                        alt="alt placeholder" class="w-8 h-8 mx-auto mb-5 ">
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                        <i class="w-8 fas fa-stream p-2 bg-gray-200 rounded-full">
                        </i>
                        <span class="mx-2">categories</span>
                    </span>
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                        <i class="w-8 fas fa-search p-2 bg-gray-200 rounded-full">
                        </i>
                        <span class="mx-2">search</span>
                    </span>
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                        <span class="w-8 mb-5 relative">
                            <i class="w-8 fas fa-user p-2 bg-gray-200 rounded-full">
                            </i>
                            <span
                                class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>
                        </span>
                        <span class="mx-2">sign ups</span>
                    </span>
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                        <i class="w-8 fas fa-th p-2 bg-gray-200 rounded-full">
                        </i>
                        <span class="mx-2">menu</span>
                    </span>
                    <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">
                        <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">
                        </i>
                        <span class="mx-2">calendar</span>
                    </span>
                </div>
            </div>
            <div class="p-4 w-24 ">
                <!--light mode - tight side navigation with red notification-->
                <div class="py-4 px-2 text-gray-900 bg-white rounded text-center shadow-lg ">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                        alt="alt placeholder" class="w-8 h-8 mx-auto mb-5">
                    <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">
                        <i class="fas fa-stream">
                        </i>
                    </span>
                    <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">
                        <i class="fas fa-search p-2 bg-gray-200 rounded-full">
                        </i>
                    </span>
                    <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5 relative">
                        <i class="fas fa-bell">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-2 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full border-2 border-white">3</span>
                    </span>
                    <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5 relative">
                        <img src="https://lh3.googleusercontent.com/-U0lTbxzh0bE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdJubMZweMDYD49ddsxq1wXai_9Cg/s48-c/photo.jpg"
                            alt="alt placeholder" class="w-8 h-8 mx-auto mb-5 rounded-full">
                        <span
                            class="absolute right-0 top-0 -mt-2 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full border-2 border-white ">3</span>
                    </span>
                </div>
            </div>
            <div class="p-4 w-24 ">
                <!--light mode - tight side navigation with yellow notification-->
                <div class="py-4 px-2 bg-white text-gray-900 rounded-lg text-center shadow-lg">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                        alt="alt placeholder" class="w-8 h-8 mx-auto mb-5">
                    <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">
                        <i class="fas fa-stream">
                        </i>
                    </span>
                    <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">
                        <i class="fas fa-search p-2 bg-gray-200 rounded-full">
                        </i>
                    </span>
                    <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5 relative">
                        <i class="fas fa-users">
                        </i>
                        <span
                            class="absolute right-0 top-0 -mt-2 text-xs bg-yellow-500 text-black font-medium px-2 shadow-lg rounded-full border-2 border-white">3</span>
                    </span>
                    <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">
                        <i class="fas fa-calendar-alt">
                        </i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 uppercase text-xs text-gray-500 sm:mb-0 dark:text-gray-400 space-x-4">
                <li>
                    <a href="http://">Privacy</a>
                </li>
                <li>
                    <a href="http://">Terms</a>
                </li>
                <li>
                    <a href="http://">About </a>
                </li>
                <li>
                    <a href="http://">Faqs</a>
                </li>
                <li>
                    <a href="http://">About</a>
                </li>
                <li>
                    <a href="http://">Help</a>
                </li>
                <li>
                    <a href="http://">Accessibility</a>
                </li>

            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="flex justify-between items-center ">
            <span class="block uppercase text-xs  text-gray-500 sm:text-center dark:text-gray-400 ">&copy; &MediumSpace;<a
                href="https://flowbite.com/" class="hover:underline">{{ config('app.name') }}&trade;</a> All Rights Reserved.
        </span>
        <span>123</span>
        </div>
    </footer>

</x-main-layout>
