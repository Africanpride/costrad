<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2 px-3 w-full inline-flex justify-center items-center gap-2  border border-transparent font-semibold bg-indigo-500 text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800  transition']) }}>{{ $slot }}</button>

