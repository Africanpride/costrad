<x-app-layout>
    <x-admin.pageheader model-name="Transactions " description="Instititues &<br /> College" add-button="false"
        class="mx-4">
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
        </x-admin-pageheader>

        <div>
            <!-- Jumbotron -->
            <div class="p-6 shadow  bg-gray-100 dark:bg-slate-900/10 dark:text-white ">
                <div class="flex flex-row justify-between my-2">
                    <h2 class="font-semibold text-3xl">Financial Transactions</h2>
                </div>
                <div class="space-y-3">
                    <p class="max-w-2xl">
                        These are financial transactions of <b>{{ config('app.name') }}</b> .
                    </p>
                </div>


                <div class="mt-6 border dark:border-0 overflow-hidden ">
                    <div class="overflow-x-auto">
                        <div class="align-middle inline-block min-w-full">
                            <table class="min-w-full border-secondary-300 rounded-md dark:border-secondary-900">
                                <thead>
                                    <tr
                                        class=" bg-gray-200 dark:border-secondary-900 dark:bg-secondary-900 text-secondary-900  dark:text-secondary-400">
                                        <th scope="col"
                                            class="px-3  py-2  text-left text-[11px] leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                                            <span class="lg:pl-2">Institute</span>
                                        </th>
                                        <th scope="col"
                                            class="px-3  py-2  text-left text-[11px] leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400 ">
                                            <span class="lg:pl-2">Participant</span>

                                        </th>
                                        <th scope="col"
                                            class="px-3  py-2   uppercase tracking-wider  hidden md:table-cell text-left text-[11px] leading-4 font-medium ">
                                            Reference
                                        </th>
                                        <th scope="col"
                                            class="px-3  py-2  text-[11px] leading-4 font-medium  uppercase tracking-wider  hidden md:table-cell text-left">
                                            Amount
                                        </th>
                                        <th scope="col"
                                            class="px-2 py-2  text-[11px] leading-4 whitespace-nowrap font-medium  uppercase tracking-wider  hidden md:table-cell text-left">
                                            Invoice
                                        </th>


                                        <th scope="col"
                                            class="px-3  py-2  text-left text-[11px] leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                                            Status
                                        </th>

                                    </tr>
                                </thead>
                                <tbody
                                    class="divide-y divide-secondary-100 bg-white dark:bg-secondary-800 dark:divide-secondary-900"
                                    x-max="1">
                                    @if ($transactions->count() > 0)
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td
                                                    class="px-3  py-2  whitespace-no-wrap text-sm leading-5 font-medium text-secondary-900 dark:text-white">
                                                    <div class="flex items-center">
                                                        <div class="shrink-0 h-12 w-12">
                                                            <img class="h-12 w-12 rounded-full"
                                                                src="{{ $transaction->institute->institute_logo }}"
                                                                alt="User avatar">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div
                                                                class="text-sm leading-5 font-medium whitespace-nowrap">
                                                                {{ $transaction->institute->name }}
                                                            </div>
                                                            <div
                                                                class="text-sm leading-5 text-secondary-500 dark:text-secondary-400 whitespace-nowrap">
                                                                Registered <time
                                                                    datetime="{{ Auth::user()->created_at }}"
                                                                    class="capitalize">{{ $transaction->created_at->diffForHumans() }}
                                                                </time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-3  py-2  whitespace-no-wrap text-sm leading-5 font-medium text-secondary-900 dark:text-white">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <div
                                                                class="text-sm leading-5 font-medium whitespace-nowrap flex gap-x-2 justify-start items-center">
                                                                <svg class="w-4 h-4 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span> {{ $transaction->participant->full_name }}</span>
                                                            </div>
                                                            <div
                                                                class="text-sm leading-5 text-secondary-500 dark:text-secondary-400 whitespace-nowrap">
                                                                <div class="capitalize">{{ Auth::user()->email }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-3  py-2  text-sm leading-5 text-secondary-500 dark:text-secondary-400">
                                                    <div class="flex items-center">

                                                        <span
                                                            class="ml-1.5 whitespace-no-wrap ">{{ $transaction->reference }}</span>
                                                    </div>
                                                </td>
                                                <td
                                                    class="hidden md:table-cell px-3  py-2  whitespace-no-wrap text-sm leading-5 text-left">
                                                    <span class="ml-1.5 whitespace-no-wrap ">GHS12369</span>

                                                </td>
                                                <td
                                                    class="hidden md:table-cell px-3  py-2  whitespace-no-wrap text-sm leading-5 text-secondary-500 dark:text-secondary-400 text-left">
                                                    56236987
                                                </td>

                                                <td
                                                    class="hidden md:table-cell px-3  py-2  whitespace-no-wrap text-sm leading-5 text-secondary-500 dark:text-secondary-400 text-left">
                                                    <div
                                                        class="inline-flex items-center px-2 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>

                                                        <h2 class="text-sm font-normal">Paid</h2>
                                                    </div>

                                                </td>

                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="flex items-center justify-between px-3  py-3 sm:px-6 border-t border-secondary-200 rounded-b-md bg-white dark:bg-secondary-800 dark:border-secondary-900">
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
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->



        </div>

</x-app-layout>
