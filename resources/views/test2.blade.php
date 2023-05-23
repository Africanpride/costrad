<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>





    <div class="p-8">
        <!-- Card Section -->
        <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <form>
                <!-- Card -->
                <div class="bg-white rounded-xl shadow dark:bg-slate-900">
                    <div class="relative h-40 rounded-t-xl bg-no-repeat bg-cover bg-center"
                        style="background-image: url('{{ asset('images/main/profile_banner.svg') }}')">
                        <div class="absolute top-0 right-0 p-4">
                            <button type="button"
                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                </svg>
                                Upload header
                            </button>
                        </div>
                    </div>

                    <div class="space-y-6 p-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <x-jet-label for="firstName" value="{{ __('First Name') }}" />
                                <x-jet-input id="firstName" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.firstName" autocomplete="firstName" />
                                <x-jet-input-error for="firstName" class="mt-2" />
                            </div>
                            <div>
                                <x-jet-label for="lastName" value="{{ __('Last Name') }}" />
                                <x-jet-input id="lastName" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.lastName" autocomplete="lastName" />
                                <x-jet-input-error for="lastName" class="mt-2" />
                            </div>

                            <!-- Add more fields here -->
                            <div>
                                <x-jet-label for="title" value="{{ __('Title') }}" />
                                <x-jet-input id="title" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.title" autocomplete="title" />
                                <x-jet-input-error for="title" class="mt-2" />
                            </div>
                            <div>
                                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                                <x-jet-input id="gender" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.gender" autocomplete="gender" />
                                <x-jet-input-error for="gender" class="mt-2" />
                            </div>

                            <div>
                                <x-jet-label for="dateOfBirth" value="{{ __('Date of Birth: DD/MM/YYYY') }}" />
                                <x-jet-input id="dateOfBirth" type="text" placeholder="Date of Birth"
                                class="mt-1 block w-full" datepicker  datepicker-autohide datepicker-format="dd/mm/yyyy" datepicker-title="Choose Date of Birth"
                               wire:model.defer="state.dateOfBirth" autocomplete="dateOfBirth" />
                            </div>


                            <div>
                                <x-jet-label for="address1" value="{{ __('Address 1') }}" />
                                <x-jet-input id="address1" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.address_1" autocomplete="address1" />
                                <x-jet-input-error for="address1" class="mt-2" />
                            </div>

                            <div>
                                <x-jet-label for="address2" value="{{ __('Address 2') }}" />
                                <x-jet-input id="address2" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.address_2" autocomplete="address2" />
                                <x-jet-input-error for="address2" class="mt-2" />
                            </div>
                            <div>
                                <x-jet-label for="city" value="{{ __('City') }}" />
                                <x-jet-input id="city" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.city" autocomplete="city" />
                                <x-jet-input-error for="city" class="mt-2" />
                            </div>

                            <div>
                                <x-jet-label for="state" value="{{ __('State') }}" />
                                <x-jet-input id="state" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.state" autocomplete="state" />
                                <x-jet-input-error for="state" class="mt-2" />
                            </div>
                            <div>
                                <x-jet-label for="zipcode" value="{{ __('Zip Code') }}" />
                                <x-jet-input id="zipcode" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.zipcode" autocomplete="zipcode" />
                                <x-jet-input-error for="zipcode" class="mt-2" />
                            </div>

                            <div>
                                <x-jet-label for="country" value="{{ __('Country') }}" />
                                <x-jet-input id="country" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.country" autocomplete="country" />
                                <x-jet-input-error for="country" class="mt-2" />
                            </div>
                            <div>
                                <x-jet-label for="telephone" value="{{ __('Telephone') }}" />
                                <x-jet-input id="telephone" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.telephone" autocomplete="telephone" />
                                <x-jet-input-error for="telephone" class="mt-2" />
                            </div>

                            <div>
                                <x-jet-label for="emergencyContactName" value="{{ __('Emergency Contact Name') }}" />
                                <x-jet-input id="emergencyContactName" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.emergencyContactName"
                                    autocomplete="emergencyContactName" />
                                <x-jet-input-error for="emergencyContactName" class="mt-2" />
                            </div>
                            <div>
                                <x-jet-label for="emergencyContactTelephone"
                                    value="{{ __('Emergency Contact Telephone') }}" />
                                <x-jet-input id="emergencyContactTelephone" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.emergencyContactTelephone"
                                    autocomplete="emergencyContactTelephone" />
                                <x-jet-input-error for="emergencyContactTelephone" class="mt-2" />
                            </div>

                            <div>
                                <x-jet-label for="nationality" value="{{ __('Nationality') }}" />
                                <x-jet-input id="nationality" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.nationality" autocomplete="nationality" />
                                <x-jet-input-error for="nationality" class="mt-2" />
                            </div>
                            <div>
                                <x-jet-label for="active" value="{{ __('Active') }}" />
                                <x-jet-input id="active" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.active" autocomplete="active" />
                                <x-jet-input-error for="active" class="mt-2" />
                            </div>

                            <div>
                                <x-jet-label for="bio" value="{{ __('Bio') }}" />
                                <x-jet-input id="bio" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.bio" autocomplete="bio" />
                                <x-jet-input-error for="bio" class="mt-2" />
                            </div>
                            <div>
                                <x-jet-label for="resume" value="{{ __('Resume') }}" />
                                <x-jet-input id="resume" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.resume" autocomplete="resume" />
                                <x-jet-input-error for="resume" class="mt-2" />
                            </div>

                            <div>
                                <x-jet-label for="disabled" value="{{ __('Disabled') }}" />
                                <x-jet-input id="disabled" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.disabled" autocomplete="disabled" />
                                <x-jet-input-error for="disabled" class="mt-2" />
                            </div>
                            <div>
                                <x-jet-label for="maritalStatus" value="{{ __('Marital Status') }}" />
                                <x-jet-input id="maritalStatus" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.marital_status" autocomplete="maritalStatus" />
                                <x-jet-input-error for="maritalStatus" class="mt-2" />
                            </div>

                            <div>
                                <x-jet-label for="avatar" value="{{ __('Avatar') }}" />
                                <x-jet-input id="avatar" type="text" class="mt-1 block w-full"
                                    wire:model.defer="state.avatar" autocomplete="avatar" />
                                <x-jet-input-error for="avatar" class="mt-2" />
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </div>

</x-app-layout>
