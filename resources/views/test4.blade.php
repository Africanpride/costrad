<x-main-layout>
    @auth

        <img class="w-50 aspect-square" src="{{ Auth::user()->profile_photo_url }}" alt="">
    @endauth
    {{-- <img class="w-16 aspect-square" src="{{ asset('storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/costrad_lecture.jpg')}}" alt=""> --}}

    {{-- <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe> --}}


    @php
        $path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');

        echo $path_parts['dirname'], "\n";
        echo $path_parts['basename'], "\n";
        echo $path_parts['extension'], "\n";
        echo $path_parts['filename'], "\n";
    @endphp
</x-main-layout>
