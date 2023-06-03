<x-app-layout>
    <x-admin.pageheader model-name="Invoices" description="{{ __('My Invoices') }}" add-button="false" class="mx-4">
        <x-heroicon-o-finger-print class="w-6 h-6 text-current" />
    </x-admin.pageheader>
    <!-- user/invoices.blade.php -->

    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Institute / Invoice
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Amount
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Issued / Due
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transactions as $transaction)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="{{ $transaction->institute->institute_logo }}"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap font-bold">
                                                {{ $transaction->institute->name }}
                                            </p>
                                            <p class="text-gray-600 whitespace-no-wrap">{{ $transaction->institute->duration }}, {{ now()->format('Y') }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">GHC {{ $transaction->amount }}</p>
                                    <p class="text-gray-600 whitespace-no-wrap">USD</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $transaction->created_at->format('d M, Y') }}</p>
                                    <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span class="m-0.5 inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium {{ ($transaction->invoice->status) == 'pending' ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">{{ $transaction->invoice->status }}</span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                    <button type="button" class="inline-block text-gray-500 hover:text-gray-700">
                                        <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            @empty
{{ __('Empty. Nothing Here.') }}
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-4">Invoices</h2>

                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 bg-gray-100 border-b">Invoice ID</th>
                                    <th class="px-4 py-2 bg-gray-100 border-b">Participant Name</th>
                                    <th class="px-4 py-2 bg-gray-100 border-b">Institute Name</th>
                                    <!-- Add more table headers if needed -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td class="px-4 py-2 border-b">{{ $transaction->invoice->id }}</td>
                                        <td class="px-4 py-2 border-b">{{ $transaction->participant->name }}</td>
                                        <td class="px-4 py-2 border-b">{{ $transaction->institute->name }}</td>
                                        <!-- Add more table cells for additional data -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
