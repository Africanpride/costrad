<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<x-front-layout>

    <div class="p-8">

        {{-- <div>
            @if ($isMobile)
                Display mobile-specific content
            @else
                Display desktop-specific content
            @endif
        </div>


        <div class="container mx-auto p-8 ">
            <iframe
                src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Africa%2FAbidjan&showTitle=0&showPrint=1&showTabs=1&showTz=0&title=COSTrAD&src=ZW4uZ2gjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%230B8043"
                style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe> --}}

        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal d-none"
            role="form">


            <input type="hidden" name="metadata" value="{{ json_encode($array = ['invoiceId' => '123456']) }}">


            <input type="hidden" name="email" value="{{ Auth::user()->email ?? 'johnwelsh19@gmail.com' }}"> {{-- required --}}

            <input type="hidden" name="orderID" value="345">


            <input type="hidden" name="amount" value="10000"> {{-- required in kobo --}}

            <input type="hidden" name="currency" value="GHS">

            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
            {{ csrf_field() }}


            <button
                class="bg-firefly-600 dark:bg-firefly-800 dark:focus-visible:outline-firefly-800 dark:hover:bg-firefly-700 flex focus-visible:outline focus-visible:outline-2 focus-visible:outline-firefly-600 focus-visible:outline-offset-2 font-semibold hover:bg-firefly-500 items-center mt-10 px-3 py-2 rounded-md shadow-sm text-center text-sm text-white w-auto"
                type="submit" value="Pay Now!">
                <x-lucide-plus-circle class="w-5 h-5 text-current pr-2" /> <span>{{ ('Pay Now!') }}</span>
            </button>
        </form>

    </div>



</x-front-layout>
<script>
    $('.carousel').slick({
        autoplay: true,
        slidesToShow: 3
    });
</script>
