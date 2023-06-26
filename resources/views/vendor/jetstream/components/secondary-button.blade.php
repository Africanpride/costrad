<button {{ $attributes->merge(['type' => 'button', 'class' => 'cursor-pointer w-full px-6 py-2 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</button>
