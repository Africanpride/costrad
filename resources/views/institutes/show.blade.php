<x-front-layout>
{{-- Fetch institute Components --}}
    @switch($institute->acronym)
        @case($institute->acronym = 'fdi')
            FDI
        @break

        @case($institute->acronym = 'mti')
            MTI
        @break
        @case($institute->acronym = 'igpp')
            IGPP
        @break
        @case($institute->acronym = 'iea')
            IEA
        @break
        @case($institute->acronym = 'costrad')
            COSTRAD
        @break
        @case($institute->acronym = 'etadi')
            ETADI
        @break
        @case($institute->acronym = 'first')
            FIRST
        @break
        @case($institute->acronym = 'moci')
            MOCI
        @break
        @case($institute->acronym = 'ioasc')
            IOASC
        @break

        @default
            Default case...
    @endswitch

    <x-institute.stats price="{{ $institute->price }}" />
    <x-institute.pricing price="{{ $institute->price }}" />

</x-front-layout>
