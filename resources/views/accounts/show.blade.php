<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Account') }}
            </h2>
            <a href="/transactions/create">
                {{ __('Send money') }}
            </a>
        </div>
    </x-slot>
    <div class="space-y-4 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <a href="/accounts/{{ $account['id'] }}" class="block bg-white px-4 py-6 border border-grey-200 rounded-lg">
            <div class="font-bold text-blue-500 text-sm">
                {{ $account->number }}
            </div>
            <div>
                <strong>{{ $account['currency_code'] }}</strong> {{ $account['balance'] }}
            </div>
        </a>
    </div>

    <x-table>
        <x-slot name="headers">
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Account number</th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Currency code</th>
            <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Amount</th>
        </x-slot>

        @foreach($transactions as $transaction)
            <tr>
                @php
                    $amount = $transaction->amount;
                    $isReceived = ($transaction->receiver === $account->number);
                    $amountSign = $isReceived ? '+' : '-';
                    $amountClass = $isReceived ? 'text-green-600' : 'text-red-500';
                @endphp
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <span class="text-sm leading-5 text-gray-900">{{ $isReceived ? $transaction->sender : $transaction->receiver }}</span>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">{{ $transaction->currency_code }}</span>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5">
                    <span class="{{ $amountClass }}">{{ $amountSign }}{{ number_format($transaction->amount, 2) }}</span>
                </td>
            </tr>
        @endforeach
    </x-table>
</x-app-layout>
