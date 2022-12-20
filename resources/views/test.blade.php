<x-app-layout>
    <x-admin.pageheader model-name="RBAC" description="Roles <br /> Permissions" add-button="false" class="mx-4">
        <x-heroicon-o-question-mark-circle class="w-6 h-6 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-3">

            <!-- Jumbotron -->
            <div class="p-6 shadow rounded-lg bg-firefly-50 dark:bg-slate-800 dark:text-white ">
                <div class="flex flex-row justify-between my-2">
                    {{-- <h2 class="font-semibold text-3xl">Administrator</h2> --}}
                </div>
                <div class="space-y-3">
                    <p class="max-w-3xl">
                        These are the Roles already in <b>{{ config('app.name') }}</b> with their
                        associated roles. You can assign new roles to existing member here.
                    </p>
                    <button type="button"
                        class="w-auto px-6 py-2 bg-firefly-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-firefly-700 hover:shadow-lg focus:bg-firefly-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-firefly-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <span class="flex items-center justify-center gap-2">
                            <x-admin.green-shield-icon class="w-5 h-5 text-green-500 " />
                            Add New Role
                        </span>
                    </button>
                </div>
                <hr class="my-6 border-firefly-300" />
                <livewire:admin.admin-roles />
            </div>
            <!-- Jumbotron -->

            <!-- Jumbotron -->
            <div class="p-6 shadow rounded-lg bg-firefly-50 dark:bg-slate-800 dark:text-white ">
                <div class="flex flex-row justify-between my-2">
                    <h2 class="font-semibold text-3xl">Administrator Accounts</h2>
                </div>
                <div class="space-y-3">
                    <p class="max-w-2xl">
                        These are members of <b>{{ config('app.name') }}</b> with Administrator Privileges in the organization.  You may create new roles and permissions here.
                    </p>
                    {{-- <button type="button"
                        class="w-auto px-6 py-2 bg-firefly-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-firefly-700 hover:shadow-lg focus:bg-firefly-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-firefly-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <span class="flex items-center justify-center gap-2">
                            <x-heroicon-o-user-circle class="w-5 h-5 text-current" />
                            Add New Role
                        </span>
                    </button> --}}
                </div>
                <hr class="my-6 border-firefly-300" />
                <p>
                    It uses utility classes for typography and spacing to space content out within the larger
                    container.
                </p>

            </div>
            <!-- Jumbotron -->




        </div>


</x-app-layout>
