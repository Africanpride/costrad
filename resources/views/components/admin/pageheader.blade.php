{{-- <livewire:alert> --}}
<div class="bg-base-300 flex items-center justify-between my-5 px-5 py-10">
    <div class="flex items-stretch">
        <div class="text-current text-xs">{{ __('Maintain') }} <br> {{ $description ? ' '}} </div>
        <div class="h-10 border border-l  border-base-200 mx-4"></div>
        <div class="flex flex-nowrap  ">
            <div class="h-9 w-9">
                <img class="object-cover w-full h-full rounded-full"
                    src="https://ui-avatars.com/api/?name={!! Auth::user()->full_name ?? config('app.name') !!}">
            </div>
        </div>
    </div>

    <div class="hidden md:block">
        <div class="badge badge-neutral badge-lg py-4 ">
            {{-- <x-fluentui-people-team-32-o class="w-5 h-5 mr-2 text-current" /> --}}
            {{ $modelName }}
        </div>
    </div>
</div>

    <!-- Jumbotron -->
    <div class="p-6 shadow rounded-lg bg-firefly-50 dark:bg-slate-800 dark:text-white ">
        {{-- <h2 class="font-semibold text-3xl mb-5">Hello world!</h2> --}}
        <p>
          This is a simple hero unit, a simple jumbotron-style component for calling extra attention
          to featured content or information.
        </p>
        <hr class="my-6 border-firefly-300" />
        <p>
          It uses utility classes for typography and spacing to space content out within the larger
          container.
        </p>
        <button
          type="button"
          class="inline-block px-6 py-2.5 mt-4 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
        >
          Learn more
        </button>
      </div>
      <!-- Jumbotron -->
