<x-jet-form-section submit="updateProfileInformation">

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4">
                <x-jet-label for="photo" value="{{ __('Profile Photo') }}" />
                <div class="flex justify-start items-center gap-4">
                    <div class="col-span-1">
                        <!-- Profile Photo File Input -->
                        <input type="file" class="hidden" wire:model="photo" x-ref="photo"
                            x-on:change="
                     photoName = $refs.photo.files[0].name;
                     const reader = new FileReader();
                     reader.onload = (e) => {
                         photoPreview = e.target.result;
                     };
                     reader.readAsDataURL($refs.photo.files[0]);
             " />


                        <!-- Current Profile Photo -->
                        <div class="mt-2" x-show="! photoPreview">
                            <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->firstName }}"
                                class="rounded-full h-20 w-20 object-cover">
                        </div>

                        <!-- New Profile Photo Preview -->
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                            </span>
                        </div>
                    </div>

                    <div class="col-span-2 flex gap-2 justify-start items-center">
                        <div>
                            <x-jet-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                                {{ __('Select A New Photo') }}
                            </x-jet-button>

                        </div>
                        <div>
                            @if ($this->user->profile_photo_path)
                                <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                                    {{ __('Remove Photo') }}
                                </x-jet-secondary-button>
                            @endif

                        </div>
                    </div>

                </div>
                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="firstName" value="{{ __('First Name') }}" />
            <x-jet-input id="firstName" type="text" class="mt-1 block w-full" wire:model.defer="state.firstName"
                autocomplete="firstName" />
            <x-jet-input-error for="firstName" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="lastName" value="{{ __('Last Name') }}" />
            <x-jet-input id="lastName" type="text" class="mt-1 block w-full" wire:model.defer="state.lastName"
                autocomplete="lastName" />
            <x-jet-input-error for="lastName" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                !$this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900"
                        wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save Settings') }}
        </x-jet-button>
        <x-jet-action-message class="mr-3" on="saved">
            <div class="max-w-xs bg-white border rounded-md shadow-lg dark:bg-gray-800 dark:border-gray-700"
                role="alert">
                <div class="flex p-4">
                    <div class="flex-shrink-0">
                        <svg class="h-4 w-4 text-green-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-gray-700 dark:text-gray-400">
                            Successfully Saved.
                        </p>
                    </div>
                </div>
            </div>
        </x-jet-action-message>

    </x-slot>
</x-jet-form-section>
