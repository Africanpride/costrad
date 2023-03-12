<div class="my-6  overflow-hidden ">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 ">
        <div class="w-full md:col-span-6 ">
            <input wire:model.debounce.200ms="search" wire:keydown.escape="resetFilters" wire:keydown.tab="resetFilters"
                type="text"
                class="py px-3 pr-9 block w-full border focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border dark:text-gray-400"
                placeholder="Search by First Name, Last Name or Email ...">
        </div>

        <div class="w-full md:col-span-2 ">

            <select id="grid-state" wire:model="orderBy"
                class="py px-3 pr-9 block w-full border focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border dark:text-gray-400">
                <option value>Order Table by</option>
                <option value="id">ID</option>
                <option value="firstName">First Name</option>
                <option value="lastName">Last Name</option>
                <option value="email">Email</option>
                <option value="created_at">Sign Up Date</option>
            </select>

        </div>
        <div class="w-full md:col-span-2 ">

            <select id="grid-state" wire:model="orderAsc"
                class="py px-3 pr-9 block w-full border focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border dark:text-gray-400">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>


        </div>

        <div class="w-full md:col-span-2 ">
            <select wire:model="perPage"
                class="py px-3 pr-9 block w-full border focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border dark:text-gray-400"
                id="grid-state">
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>100</option>
            </select>
        </div>

    </div>

</div>





<div class="mt-6 border dark:border-0 overflow-hidden ">
    <div class="overflow-x-auto">
        <div class="align-middle inline-block min-w-full">
            <table class="min-w-full border-secondary-300 rounded-md dark:border-secondary-900">
                <thead>
                    <tr
                        class=" bg-gray-200 dark:border-secondary-900 dark:bg-secondary-900 text-secondary-900  dark:text-secondary-400">
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                            <span class="lg:pl-2">Name</span>
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                            Email Address
                        </th>
                        <th scope="col"
                            class="px-6 py-3  uppercase tracking-wider  hidden md:table-cell text-left text-xs leading-4 font-medium ">
                            Institute History
                        </th>

                        <th scope="col"
                            class="px-2 py-2 text-xs leading-4 font-medium whitespace-no-wrap  uppercase tracking-wider  hidden md:table-cell text-left">
                            Country
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs leading-4 font-medium  uppercase tracking-wider  hidden md:table-cell text-left">
                            Telephone
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs leading-4 font-medium  uppercase tracking-wider  hidden md:table-cell text-left">
                            Ban/Remove Access
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-secondary-100 bg-white dark:bg-secondary-800 dark:divide-secondary-900"
                    x-max="1">

                    @if ($users->count() > 0)
                        @foreach ($users as $user)
                            <tr>
                                <td
                                    class="px-6 py-3  w-auto whitespace-no-wrap text-sm  font-medium text-secondary-900 dark:text-white">
                                    <div class="flex items-center">
                                        <div class="shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="{{ $user->profile_photo_url }}" alt="User avatar">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-[12px] leading-5 font-medium whitespace-nowrap">
                                                {{ $user->full_name }}
                                            </div>
                                            <div
                                                class="text-[9px] leading-5 text-secondary-500 dark:text-secondary-400">
                                                Registered <time datetime="{{ $user->created_at }}"
                                                    class="capitalize">{{ $user->created_at->diffForHumans() }}
                                                </time>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-sm leading-5 text-secondary-500 dark:text-secondary-400">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg> <span class="ml-1.5">{{ $user->email }}</span>
                                    </div>
                                </td>
                                <td
                                    class="hidden md:table-cell px-6 py-3 whitespace-no-wrap text-sm leading-5 text-left">

                                    <div class="flex flex-col justify-center items-center space-y-1">
                                        <!-- Avatar Group -->
                                        {{-- <div class="sm:flex sm:justify-center sm:items-center text-center sm:text-left">
                <div class="flex-shrink-0 pb-5 sm:flex sm:pb-0 sm:pr-5">
                    <!-- Avatar Group -->
                    <div class="flex justify-center -space-x-3">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"
                            src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                            alt="Image Description">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"
                            src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                            alt="Image Description">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"
                            src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=300&h=300&q=80"
                            alt="Image Description">
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"
                            src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                            alt="Image Description">
                        <span
                            class="inline-flex items-center justify-center h-8 w-8 rounded-full ring-2 ring-white bg-gray-800 dark:bg-gray-900 dark:ring-gray-800">
                            <span
                                class="text-xs font-medium leading-none text-white uppercase">7</span>
                        </span>
                    </div>
                    <!-- End Avatar Group -->
                </div>

            </div> --}}
                                        <span
                                            class="inline-flex items-center justify-center h-7 w-7 rounded-full ring-2 ring-white bg-gray-800 dark:bg-gray-900 dark:ring-gray-800">
                                            <span class="text-xs font-medium leading-none text-white uppercase">0</span>
                                        </span>
                                    </div>
                                </td>
                                <td
                                    class="hidden md:table-cell px-2 py-2 whitespace-no-wrap text-sm leading-5 text-left">
                                    <div class="flex justify-start items-end gap-2 ">
                                        {{-- <span>{{ $user->profile->country_flag }}</span> --}}

                                        <span class="capitalize whitespace-no-wrap text-[10px] ">{{ $user->profile->country }}</span>
                                    </div>

                                </td>
                                <td
                                    class="hidden md:table-cell px-6 py-3 whitespace-no-wrap text-sm leading-5 text-left">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-secondary-100 text-secondary-800 dark:bg-secondary-900 dark:text-secondary-400">
                                        {{ $user->profile->telephone }}
                                    </span>
                                </td>
                                <td
                                    class="hidden md:table-cell px-6 py-3 whitespace-no-wrap text-sm leading-5 text-secondary-500 dark:text-secondary-400 text-left">
                                    <input type="checkbox" id="hs-meetups-near-you"
                                        class="relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200   ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

        before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">

                                </td>

                            </tr>
                        @endforeach

                    @endif
                </tbody>
            </table>
        </div>
        <div
            class="flex items-center justify-between px-4 py-3 sm:px-6 border-t border-secondary-200 rounded-b-md bg-white dark:bg-secondary-800 dark:border-secondary-900">
            <div class="flex-1 flex justify-between sm:hidden">

            </div>
            <div class=" sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm leading-5 text-secondary-900 dark:text-secondary-400">
                        Showing
                        <span class="font-medium">1</span>
                        to
                        <span class="font-medium">1</span>
                        of
                        <span class="font-medium"> 1</span>
                        results
                    </p>
                </div>
                <div>
                    {!! $users->links() !!}

                </div>

            </div>
        </div>
    </div>
</div>
