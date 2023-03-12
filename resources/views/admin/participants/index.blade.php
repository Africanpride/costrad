<x-app-layout>
    <x-admin.pageheader model-name="PARTICIPANTS LIST" description="Participants &<br /> Management" add-button="false"
        class="mx-4">
        <x-heroicon-o-user-group class="w-5 h-5 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-3">

            <!-- Jumbotron -->
            <div class="p-6 shadow rounded-lg  bg-gray-100 dark:bg-slate-900/10 dark:text-white ">
                <div class="flex flex-row justify-between my-2">
                    <h2 class="font-semibold text-3xl">Participant List & CRM ({{ $participants->count() }})</h2>
                </div>
                <div class="space-y-3">
                    <p class="max-w-2xl">
                        These are participants of <b>{{ config('app.name') }}</b> with Administrator Privileges in the
                        organization. You may create new roles and permissions here.
                    </p>
                </div>

                <div class="py-8 space-y-2">
                    <livewire:admin.participant.participant-table />
                </div>


            </div>
            <!-- Jumbotron -->

        </div>


    </x-admin.pageheader>
