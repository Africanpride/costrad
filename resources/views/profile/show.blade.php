<x-app-layout>
    {{-- <x-admin.pageheader /> --}}
    <div class="grid md:grid-cols-12 gap-4 md:gap-2 ">
        <div class=" col-span-12 md:col-span-3 md:border-r border-gray-200 dark:border-gray-700 ">
            <nav class="flex flex-col " aria-label="Tabs" role="tablist">

                <button
                    class="border-dashed border-t border-b dark:border-slate-800	 text-left flex gap-y-6 w-full h-full hover:bg-gray-100 p-5 transition-all dark:hover:bg-white/[.075] hs-tab-active:text-gray-600 hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-slate-900 "
                    id="basic-tabs-item-1" data-hs-tab="#basic-tabs-1" aria-controls="basic-tabs-1" role="tab" active>
                    <x-heroicon-o-user-circle
                        class=" flex-shrink-0 w-8 h-8 text-gray-800 mt-0.5 mr-6 dark:text-gray-200" />
                    <div>
                        <div>
                            <h3 class="block font-bold text-gray-800 dark:text-white">Profile Information</h3>
                            <p class="text-gray-600 dark:text-gray-400">The simplest way to keep your portfolio always
                                up-to-date.</p>
                        </div>
                    </div>
                </button>
                <button
                    class="border-dashed border-b dark:border-slate-800	 text-left flex gap-y-6 w-full h-full hover:bg-gray-100 p-5 transition-all dark:hover:bg-white/[.075] hs-tab-active:text-gray-600 hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-slate-900 "
                    id="basic-tabs-item-2" data-hs-tab="#basic-tabs-2" aria-controls="basic-tabs-2" role="tab"
                    active>
                    <x-heroicon-o-lock-closed
                        class=" flex-shrink-0 w-8 h-8 text-gray-800 mt-0.5 mr-6 dark:text-gray-200" />
                    <div>
                        <div>
                            <h3 class="block font-bold text-gray-800 dark:text-white">Update Password</h3>
                            <p class="text-gray-600 dark:text-gray-400">Ensure your account is using a long, random
                                password to stay secure.

                            </p>
                        </div>
                    </div>
                </button>
                <button
                    class="border-dashed border-b dark:border-slate-800	 text-left flex gap-y-6 w-full h-full hover:bg-gray-100 p-5 transition-all dark:hover:bg-white/[.075] hs-tab-active:text-gray-600 hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-slate-900 "
                    id="basic-tabs-item-3" data-hs-tab="#basic-tabs-3" aria-controls="basic-tabs-3" role="tab"
                    active>
                    <x-heroicon-o-shield-check
                        class=" flex-shrink-0 w-8 h-8 text-gray-800 mt-0.5 mr-6 dark:text-gray-200" />
                    <div>
                        <div>
                            <h3 class="block font-bold text-gray-800 dark:text-white">Multifactor Authentication (2FA)
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400">Add additional security to your account using
                                two factor authentication.</p>
                        </div>
                    </div>
                </button>
                <button
                    class="border-dashed border-b dark:border-slate-800	 text-left flex gap-y-6 w-full h-full hover:bg-gray-100 p-5 transition-all dark:hover:bg-white/[.075] hs-tab-active:text-gray-600 hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-slate-900 "
                    id="basic-tabs-item-4" data-hs-tab="#basic-tabs-4" aria-controls="basic-tabs-4" role="tab"
                    active>
                    <x-heroicon-o-computer-desktop
                        class=" flex-shrink-0 w-8 h-8 text-gray-800 mt-0.5 mr-6 dark:text-gray-200" />
                    <div>
                        <div>
                            <h3 class="block font-bold text-gray-800 dark:text-white">Manage Browser Sessions</h3>
                            <p class="text-gray-600 dark:text-gray-400">Manage and log out your active sessions on other
                                browsers and devices.</p>
                        </div>
                    </div>
                </button>
                <button
                    class="border-dashed border-b dark:border-slate-800	 text-left flex gap-y-6 w-full h-full hover:bg-gray-100 p-5 transition-all dark:hover:bg-white/[.075] hs-tab-active:text-gray-600 hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-slate-900 "
                    id="basic-tabs-item-5" data-hs-tab="#basic-tabs-5" aria-controls="basic-tabs-5" role="tab"
                    active>
                    <x-heroicon-o-minus-circle
                        class=" flex-shrink-0 w-8 h-8 text-gray-800 mt-0.5 mr-6 dark:text-gray-200" />
                    <div>
                        <div>
                            <h3 class="block font-bold text-gray-800 dark:text-white">Delete Account</h3>
                            <p class="text-gray-600 dark:text-gray-400">Permanently delete your account. </p>
                        </div>
                    </div>
                </button>
                <button
                    class="border-dashed border-b dark:border-slate-800	 text-left flex gap-y-6 w-full h-full hover:bg-gray-100 p-5 transition-all dark:hover:bg-white/[.075] hs-tab-active:text-gray-600 hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-slate-900 "
                    id="basic-tabs-item-6" data-hs-tab="#basic-tabs-6" aria-controls="basic-tabs-6" role="tab"
                    active>
                    <x-heroicon-o-bell-alert
                        class=" flex-shrink-0 w-8 h-8 text-gray-800 mt-0.5 mr-6 dark:text-gray-200" />
                    <div>
                        <div>
                            <h3 class="block font-bold text-gray-800 dark:text-white">Alerts & Notifications</h3>
                            <p class="text-gray-600 dark:text-gray-400">Set alerts and notifications </p>
                        </div>
                    </div>
                </button>


            </nav>
        </div>

        <div class="col-span-12 md:col-span-9 ">
            <div id="basic-tabs-1" role="tabpanel" aria-labelledby="basic-tabs-item-1">
                <div class="mx-auto w-full">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')

                        {{-- <x-jet-section-border /> --}}
                    @endif
                </div>
            </div>
            <div id="basic-tabs-2" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-2">
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                {{-- <x-jet-section-border /> --}}
            @endif
            </div>
            <div id="basic-tabs-3" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-3">
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                {{-- <x-jet-section-border /> --}}
            @endif
            </div>
            <div id="basic-tabs-4" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-4">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>
            <div id="basic-tabs-5" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-5">
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                {{-- <x-jet-section-border /> --}}

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
            </div>
            <div id="basic-tabs-6" class="hidden" role="tabpanel" aria-labelledby="basic-tabs-item-6">
                <p class="text-gray-500 dark:text-gray-400">
                    NOtifications
                </p>
            </div>
        </div>
    </div>

</x-app-layout>
