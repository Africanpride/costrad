<div {{ $attributes->merge(['class' => 'bg-firefly-50 dark:bg-slate-800 dark:text-firefly-300 flex items-center justify-between my-5 p-14 shadow rounded-lg']) }}>
    <div class="flex  items-center">
        <div class="text-sm  text-gray-500">{!! $description ?? ' '!!} </div>
        <div class="h-7 border border-l  border-firefly-200 dark:border-firefly-800 mx-4"></div>
        <div class="flex flex-nowrap  ">
            <div class="h-10 w-10 ">
                <img class="object-cover w-full h-full rounded-full "
                    src="https://ui-avatars.com/api/?name={{ Auth::user()->full_name ?? 'AP' }}">
            </div>
        </div>
    </div>

    <div class="hidden md:block">
        <span class="flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium
         bg-firefly-200 text-gray-800 dark:bg-firefly-900 dark:text-white uppercase">
            {{ $slot ?? ' ' }}
            {{ $modelName ?? ' ' }}
        </span>
    </div>

</div>


