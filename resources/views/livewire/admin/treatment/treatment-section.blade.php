<x-app-layout>
    <x-admin.pageheader model-name="{{ __('Treatment Types') }}" description="Maintain <br /> Treatments Types"
        add-button="false" class="mx-4">
        <x-lucide-cross class="w-6 h-6 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-3">

            <!-- Jumbotron -->
            <div class="p-6 shadow rounded-lg bg-firefly-50 dark:bg-slate-900 dark:text-white hidden">

                <div class="space-y-3">
                    <p class="max-w-7xl">
                        {{ __('In a hospital setting, a treatment is usually referred to as a "procedure" or "medical intervention." The exact terminology may vary depending on the context and the specific type of treatment being performed. For example, a surgical procedure may be referred to as an "operation," while a diagnostic test may be referred to as an "examination".') }}


                    <div class="gap-4 grid grid-cols-1 md:flex justify-start items-center">
                        <x-admin.generic-button onclick="Livewire.emit('openModal', 'admin.treatment.add-treatment')">
                            <span class="flex items-center justify-center gap-2">
                                <x-lucide-cross class="w-6 h-6 text-green-500 " />
                                {{ __('Add New Treatment Type') }}
                            </span>
                        </x-admin.generic-button>
                        {{-- <x-admin.generic-button
                            onclick="Livewire.emit('openModal', 'admin.permissions.add-permission')">
                            <span class="flex items-center justify-center gap-2">
                                <x-heroicon-o-adjustments-horizontal class="w-6 h-6 text-yellow-400 " />
                                Add New Permission
                            </span>
                        </x-admin.generic-button> --}}
                    </div>

                </div>
                <hr class="my-6 dark:border-gray-600 border-firefly-200" />
                <livewire:admin.available-treatments />
                {{-- <hr class="my-6 dark:border-gray-600 border-firefly-200" />
                <livewire:admin.available-permissions /> --}}
            </div>
            <!-- Jumbotron -->

            <!-- Jumbotron -->
            {{-- <div class="p-2 shadow rounded-lg bg-gray-100 dark:bg-slate-900 dark:text-white "> --}}
            <div class="p-2  ">
                <div class="flex justify-end items-center">

                    <x-admin.generic-button onclick="Livewire.emit('openModal', 'admin.treatment.add-treatment')">
                        <span class="flex items-center justify-center gap-2">
                            <x-lucide-cross class="w-6 h-6 text-green-500 " />
                            {{ __('Add New Treatment Type') }}
                        </span>
                    </x-admin.generic-button>
                </div>

                {{-- <div class="flex flex-row justify-between my-2">
                    <h2 class="font-semibold text-3xl">Administrator Privileges</h2>
                </div>
                <div class="space-y-3">
                    <p class="max-w-2xl">
                        These are members of <b>{{ config('app.name') }}</b> with Administrator Privileges in the
                        organization. You may create new roles and permissions here.
                    </p>
                </div> --}}


                <div class="mt-6 border dark:border-0 overflow-hidden ">
                    <div class="overflow-x-auto">
                        <div class="align-middle inline-block min-w-full">
                            <table class="shadow min-w-full border-secondary-300 rounded-md dark:border-secondary-900">
                                <thead>
                                    <tr
                                        class=" bg-gray-200 dark:border-secondary-900 dark:bg-secondary-900 text-secondary-900  dark:text-secondary-400">
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                                            <span class="lg:pl-2">Treatment Details</span>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                                            Description
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs leading-4 font-medium  uppercase tracking-wider dark:text-secondary-400">
                                            Price
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3  uppercase tracking-wider  hidden md:table-cell text-left text-xs leading-4 font-medium ">
                                            Added By
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs leading-4 font-medium  uppercase tracking-wider  hidden md:table-cell text-left">
                                            Active
                                        </th>

                                    </tr>
                                </thead>
                                <tbody
                                    class="divide-y divide-secondary-100/40 bg-white dark:bg-secondary-800 dark:divide-secondary-900/30"
                                    x-max="1">
                                    @foreach ($treatments as $treatment)
                                        <tr>
                                            <td
                                                class="px-6 py-3 whitespace-no-wrap text-sm leading-5 font-medium text-secondary-900 dark:text-white">
                                                <div class="flex items-center">
                                                    <div class="shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                            src="https://ui-avatars.com/api/?name={{ $treatment->name }}&amp;color=1d4ed8&amp;background=dbeafe"
                                                            alt="User avatar">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium">
                                                            {{ $treatment->name }}
                                                        </div>
                                                        <div
                                                            class="text-sm leading-5 text-secondary-500 dark:text-secondary-400">
                                                            Registered <time datetime="{{ Auth::user()->created_at }}"
                                                                class="capitalize">{{ $treatment->created_at->diffForHumans() }}
                                                            </time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="px-6 py-3 text-sm leading-5 text-secondary-500 dark:text-secondary-400">
                                                <div class="flex items-center">
                                                    <svg class="w-5 h-5 text-green-500"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd"></path>
                                                    </svg> <span class="ml-1.5">{{ $treatment->description }}</span>
                                                </div>
                                            </td>
                                            <td
                                                class="hidden md:table-cell px-6 py-3 whitespace-no-wrap text-sm leading-5 text-secondary-500 dark:text-secondary-400 text-left">
                                                {{ __('$') }}{{ $treatment->price }}
                                            </td>
                                            <td
                                                class="hidden md:table-cell px-5 py-3 whitespace-no-wrap text-sm leading-5 text-left">
                                                <span
                                                    class="px-3 inline-flex text-xs leading-5 font-semibold rounded-full bg-secondary-100 text-secondary-800 dark:bg-secondary-900 dark:text-secondary-400">
                                                    {{ $treatment->author->full_name }}
                                                </span>
                                            </td>
                                            <td
                                                class="table-cell px-6 py-3 whitespace-no-wrap text-sm leading-5 text-secondary-500 dark:text-secondary-400 text-left">
                                                <div class="w-full flex items-center justify-between gap-2">
                                                    <x-lucide-check-circle-2
                                                        class="{{ $treatment->active ? 'text-green-500' : 'text-red-500' }}
                                                w-5 h-5 duration-500" />
                                                    <span>

                                                        <div class="hs-tooltip flex items-center">
                                                            <input wire:click="toggleActive({{ $treatment->id }})" type="checkbox"
                                                                id="hs-tooltip-example"
                                                                class="hs-tooltip-toggle relative shrink-0 w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                                            before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                                                {{ $treatment->active ? 'checked' : '' }}>

                                                            <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Toggle Treatment on/off

                                                            </div>
                                                        </div>

                                                    </span>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class=" p-4 md:px-6 py-3 border-t border-secondary-200/40 rounded-b-md bg-white dark:bg-secondary-800 dark:border-secondary-900/40 dark:text-white">
                            {{ $treatments->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </div>


</x-app-layout>
