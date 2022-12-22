<button type="button" {!! $attributes->merge([
    'class' =>
        'cursor-pointer w-auto px-6 py-2 bg-firefly-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-firefly-700 hover:shadow-lg focus:bg-firefly-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-firefly-800 active:shadow-lg transition duration-150 ease-in-out',
]) !!} data-mdb-ripple="true" data-mdb-ripple-color="light">

    {!! $slot !!}
</button>
