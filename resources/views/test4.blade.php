<x-front-layout>
    @auth

    {{ App\Models\User::count() }} <br>
    {{ App\Models\Profile::count() }} <br>


    {{ Auth::user()->profile->bio  }}
    <br>
    {{ Auth::user()->staff ? 'Staff' : 'Non Staff' }}

        <img class="w-50 aspect-square" src="{{ Auth::user()->profile_photo_url }}" alt="">
    @endauth
    {{-- <img class="w-16 aspect-square" src="{{ asset('storage/files/986bcb09-ec3c-4975-8302-d979b4f28608/costrad_lecture.jpg')}}" alt=""> --}}

    {{-- <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe> --}}


</x-front-layout>
