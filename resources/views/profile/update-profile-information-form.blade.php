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
                        <div class="mt-2 relative" x-show="! photoPreview">
                            <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->firstName }}"
                                class="rounded-full h-20 w-20 object-cover z-10"   x-on:click.prevent="$refs.photo.click()">
                                <x-lucide-image-plus class="hidden w-4 h-4 text-firefly-500 dark:text-green-700 absolute bottom-0 right-1 cursor-pointer z-20" />
                        </div>

                        <!-- New Profile Photo Preview -->
                        <div class="mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                            </span>
                        </div>
                    </div>

                    <div class="col-span-2 flex gap-2 justify-start items-center">
                        <div class="grid grid-cols-2 gap-x-4">
                            <x-jet-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                                {{ __('Select A New Photo') }}
                            </x-jet-button>
                            @if ($this->user->profile_photo_path)
                                <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                                    {{ __('Remove Photo') }}
                                </x-jet-secondary-button>
                            @endif
                            <x-jet-button class="mt-2 mr-2 hidden" type="button"  data-hs-overlay="#hs-scroll-inside-body-modal">
                                {{ __('Update Bio') }}
                            </x-jet-button>

                        </div>
                        <div>

                        </div>
                    </div>

                </div>
                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <div class="grid grid-cols-2 gap-4">
            <div class="">
                <x-jet-label for="firstName" value="{{ __('First Name') }}" />
                <x-jet-input id="firstName" type="text" class="mt-1 block w-full" wire:model.defer="state.firstName"
                    autocomplete="firstName" />
                <x-jet-input-error for="firstName" class="mt-2" />
            </div>
            <div class="">
                <x-jet-label for="lastName" value="{{ __('Last Name') }}" />
                <x-jet-input id="lastName" type="text" class="mt-1 block w-full" wire:model.defer="state.lastName"
                    autocomplete="lastName" />
                <x-jet-input-error for="lastName" class="mt-2" />
            </div>

        </div>
        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                    !$this->user->hasVerifiedEmail())
                <div class="w-full text-left">
                    <p class="text-sm mt-2">
                        {{ __('Your email address is unverified.') }}

                    <div class="flex justify-start items-center gap-2">
                        <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900"
                            wire:click.prevent="sendEmailVerification">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>

                        @if ($this->verificationLinkSent)
                            <p v-show="verificationLinkSent" class=" font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif

                    </div>
                    </p>
                </div>

            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button  wire:loading.attr="disabled" wire:target="photo">
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

{{-- <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-scroll-inside-body-modal">
    Scroll inside body
  </button> --}}

<form action="">
    <div id="hs-scroll-inside-body-modal" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
          <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
              <h3 class="font-bold text-gray-800 dark:text-white">
                Profile Details
              </h3>
              <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-scroll-inside-body-modal">
                <span class="sr-only">Close</span>
                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                </svg>
              </button>
            </div>
            <div class="p-4 overflow-y-auto">
              <div class="space-y-4">
                <div>
                  <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be bold</h3>
                  <p class="mt-1 text-gray-800 dark:text-gray-400">
                    Motivate teams to do their best work. Offer best practices to get users going in the right direction. Be bold and offer just enough help to get the work started, and then get out of the way. Give accurate information so users can make educated decisions. Know your user's struggles and desired outcomes and give just enough information to let them get where they need to go.
                  </p>
                </div>

                <div>
                  <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be optimistic</h3>
                  <p class="mt-1 text-gray-800 dark:text-gray-400">
                    Focusing on the details gives people confidence in our products. Weave a consistent story across our fabric and be diligent about vocabulary across all messaging by being brand conscious across products to create a seamless flow across all the things. Let people know that they can jump in and start working expecting to find a dependable experience across all the things. Keep teams in the loop about what is happening by informing them of relevant features, products and opportunities for success. Be on the journey with them and highlight the key points that will help them the most - right now. Be in the moment by focusing attention on the important bits first.
                  </p>
                </div>

                <div>
                  <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be practical, with a wink</h3>
                  <p class="mt-1 text-gray-800 dark:text-gray-400">
                    Keep our own story short and give teams just enough to get moving. Get to the point and be direct. Be concise - we tell the story of how we can help, but we do it directly and with purpose. Be on the lookout for opportunities and be quick to offer a helping hand. At the same time realize that nobody likes a nosy neighbor. Give the user just enough to know that something awesome is around the corner and then get out of the way. Write clear, accurate, and concise text that makes interfaces more usable and consistent - and builds trust. We strive to write text that is understandable by anyone, anywhere, regardless of their culture or language so that everyone feels they are part of the team.
                  </p>
                </div>
              </div>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                <x-jet-secondary-button class="hs-dropdown-toggle"  data-hs-overlay="#hs-scroll-inside-body-modal">
                    {{ __('Close') }}
                </x-jet-secondary-button>
                <x-jet-button type="submit" class="hs-dropdown-toggle"  data-hs-overlay="#hs-scroll-inside-body-modal">
                    {{ __('Update Bio Data') }}
                </x-jet-button>
              {{-- <button type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-scroll-inside-body-modal">
                Close
              </button> --}}
              {{-- <a  class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="#">
                Save changes
              </a> --}}
            </div>
          </div>
        </div>
      </div>


</form>
