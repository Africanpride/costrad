<div>
    <div class="px-4 pb-2 pt-4 grid grid-cols-1 md:grid-cols-4 gap-4">


        <div
            class="  border dark:border-gray-700/10  border-gray-500/10 rounded-xl h-36 bg-slate-200 dark:bg-gray-950 dark:text-white p-4  shadow flex flex-col justify-between  ">
            <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton'] tracking-wider">
                Institute
                Details</div>
            <div class="flex justify-between items-center">
                <div class="capitalize flex-none text-lg font-semibold dark:text-white">
                    <span class="text-2xl  ">
                        {{-- <span class="text-slate-700">{{ $totalUsers }}</span> --}}
                        <span
                            class=" text-slate-700 dark:text-slate-200">{{ $this->pastInstitutes() }}/{{ $institutes->count() }}<span
                                class="text-2xl"></span> </span>

                    </span>
                </div>
                <div>
                    <x-lucide-users class="w-12 h-12 dark:text-firefly-500  text-firefly-500/80" />
                </div>
            </div>
            <div class="flex w-full h-2 bg-gray-300/50 rounded-full overflow-hidden dark:bg-gray-700">
                <div class="flex overflow-hidden bg-firefly-700 dark:bg-firefly-500" role="progressbar"
                    style="width: {{ ($this->pastInstitutes() / $institutes->count()) * 100 }}%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div
            class="  border dark:border-gray-700/10  border-gray-500/10 rounded-xl h-36 bg-slate-200 dark:bg-gray-950 dark:text-white p-4  shadow flex flex-col justify-between  ">
            <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton'] ">Transactions</div>
            <div class="flex justify-between items-center">
                <div class="capitalize flex-none text-lg font-semibold dark:text-white">
                    <div class=" text-xl gap-x-2 ">
                        <span class=" text-slate-700 dark:text-slate-200">
                            {{ 'GHS ' . number_format(App\Models\Transaction::sum('amount') / 100, 2, '.', ',') }}
                        </span>

                    </div>
                </div>
                <div>
                    <x-lucide-coins class="w-12 h-12 dark:text-firefly-500  text-firefly-500/80" />
                </div>
            </div>
            <div class="text-sm tracking-tight">
                <span class="font-bold">Latest: {{ App\Models\Transaction::latestFormattedAmount() }}</span>
            </div>
        </div>
        <div
            class="  border dark:border-gray-700/10  border-gray-500/10 rounded-xl h-36 bg-slate-200 dark:bg-gray-950 dark:text-white p-4  shadow flex flex-col justify-between  ">
            <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton'] ">Users</div>
            <div class="flex justify-between items-center">
                <div class="capitalize flex-none text-lg font-semibold dark:text-white">
                    <span class="text-2xl  ">
                        <span class=" text-slate-700 dark:text-slate-200">{{ App\Models\User::count() }}
                        </span>
                </div>
                <div>
                    <x-lucide-scan-face class="w-12 h-12 dark:text-firefly-500  text-firefly-500/80" />
                </div>
            </div>
            <div class="invisible w-full h-1.5 bg-gray-300/50 rounded-full overflow-hidden dark:bg-gray-700">
                <div class="flex flex-col justify-center overflow-hidden bg-slate-700 dark:bg-firefly-500"
                    role="progressbar" style="width: {{ ($this->pastInstitutes() / $institutes->count()) * 100 }}%"
                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div
            class="  border dark:border-gray-700/10  border-gray-500/10 rounded-xl h-36 bg-slate-200 dark:bg-gray-950 dark:text-white p-4  shadow flex flex-col justify-between  ">
            <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton']">Donations</div>
            <div class="flex justify-between items-center">
                <div class="capitalize flex-none text-lg font-semibold dark:text-white">
                    <div class=" text-xl gap-x-2 ">
                        <span class=" text-slate-700 dark:text-slate-200">
                            {{ 'GHS ' . number_format(App\Models\Donations::sum('amount') / 100, 2, '.', ',') }}
                        </span>

                    </div>
                </div>
                <div>
                    <x-lucide-wallet class="w-12 h-12 dark:text-firefly-500  text-firefly-500/80" />
                </div>
            </div>
            <div class="text-sm tracking-tight">
                <span class="font-bold">Latest:
                    {{ 'GHS ' . number_format(App\Models\Donations::all()->last()->amount / 100, 2, '.', ',') }}
                </span>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-12 md:gap-4 px-4 py-2">

        <livewire:admin.transactions.latest-transaction-list />

        <div class="col-span-12 md:col-span-6 space-y-4">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
                <div
                    class=" rounded-xl h-36 bg-slate-200 dark:bg-gray-950 dark:text-white p-4  shadow flex flex-col justify-between  border dark:border-gray-700/10  border-gray-500/10">
                    <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton']">
                        <div class="flex justify-between items-center">
                            <div class="dark:text-white font-bold">
                                Up-Next:
                            </div>
                            <a href="{{ route('institute.show', $nextInstitute) }}"
                                class="btn  h-6 w-6 rounded-full bg-gray-500/50 dark:bg-gray-800 p-0 font-medium text-slate-800 dark:text-white hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-300/50 focus:bg-slate-500/50 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-between items-center gap-x-4">

                        <div>
                            <img class="inline-block h-[2.975rem] w-[2.975rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                                src="{{ $nextInstitute->institute_logo }}" alt="{{ $nextInstitute->name }}">

                        </div>
                        <div class="tracking-widest uppercase text-gradient__teal font-bold text-3xl">
                            {{ $nextInstitute->acronym }}</div>
                    </div>
                    <div class="text-sm tracking-tight">
                        <div class=" font-bold">{{ $nextInstitute->duration }}, {{ now()->format('Y') }}</div>
                    </div>
                </div>

                <div
                    class=" rounded-xl h-36 bg-slate-200 dark:bg-gray-950 dark:text-white p-4  shadow flex flex-col justify-between  border dark:border-gray-700/10  border-gray-500/10">
                    <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton']">
                        <div class="flex justify-between items-center">
                            <div class="dark:text-white font-bold">
                                Up-Next:
                            </div>
                            <a href="{{ route('institute.show', $nextInstitute) }}"
                                class="btn  h-6 w-6 rounded-full bg-gray-500/50 dark:bg-gray-800 p-0 font-medium text-slate-800 dark:text-white hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-300/50 focus:bg-slate-500/50 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-between items-center gap-x-4">

                        <div>
                            <img class="inline-block h-[2.975rem] w-[2.975rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                                src="{{ $nextInstitute->institute_logo }}" alt="{{ $nextInstitute->name }}">

                        </div>
                        <div class="tracking-widest uppercase text-gradient__teal font-bold text-3xl">
                            {{ $nextInstitute->acronym }}</div>
                    </div>
                    <div class="text-sm tracking-tight">
                        <div class=" font-bold">{{ $nextInstitute->duration }}, {{ now()->format('Y') }}</div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
                <div
                    class=" rounded-xl h-36 bg-slate-200 dark:bg-gray-950 dark:text-white p-4  shadow flex flex-col justify-between  border dark:border-gray-700/10  border-gray-500/10">
                    <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton']">
                        <div class="flex justify-between items-center">
                            <div class="dark:text-white font-bold">
                                Up-Next:
                            </div>
                            <a href="{{ route('institute.show', $nextInstitute) }}"
                                class="btn  h-6 w-6 rounded-full bg-gray-500/50 dark:bg-gray-800 p-0 font-medium text-slate-800 dark:text-white hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-300/50 focus:bg-slate-500/50 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-between items-center gap-x-4">

                        <div>
                            <img class="inline-block h-[2.975rem] w-[2.975rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                                src="{{ $nextInstitute->institute_logo }}" alt="{{ $nextInstitute->name }}">

                        </div>
                        <div class="tracking-widest uppercase text-gradient__teal font-bold text-3xl">
                            {{ $nextInstitute->acronym }}</div>
                    </div>
                    <div class="text-sm tracking-tight">
                        <div class=" font-bold">{{ $nextInstitute->duration }}, {{ now()->format('Y') }}</div>
                    </div>
                </div>

                <div
                    class=" rounded-xl h-36 bg-slate-200 dark:bg-gray-950 dark:text-white p-4  shadow flex flex-col justify-between  border dark:border-gray-700/10  border-gray-500/10">
                    <div class="text-slate-800 dark:text-white capitalize flex-none text-lg font-['anton']">
                        <div class="flex justify-between items-center">
                            <div class="dark:text-white font-bold">
                                Up-Next:
                            </div>
                            <a href="{{ route('institute.show', $nextInstitute) }}"
                                class="btn  h-6 w-6 rounded-full bg-gray-500/50 dark:bg-gray-800 p-0 font-medium text-slate-800 dark:text-white hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-300/50 focus:bg-slate-500/50 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:hover:shadow-navy-450/50 dark:focus:bg-navy-450 dark:focus:shadow-navy-450/50 dark:active:bg-navy-450/90  grid place-items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 11l5-5m0 0l5 5m-5-5v12"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-between items-center gap-x-4">

                        <div>
                            <img class="inline-block h-[2.975rem] w-[2.975rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                                src="{{ $nextInstitute->institute_logo }}" alt="{{ $nextInstitute->name }}">

                        </div>
                        <div class="tracking-widest uppercase text-gradient__teal font-bold text-3xl">
                            {{ $nextInstitute->acronym }}</div>
                    </div>
                    <div class="text-sm tracking-tight">
                        <div class=" font-bold">{{ $nextInstitute->duration }}, {{ now()->format('Y') }}</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
