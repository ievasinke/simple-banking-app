<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account') }}
        </h2>
    </x-slot>
    <div class="space-y-4 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <a href="/accounts/{{ $account['id'] }}" class="block px-4 py-6 border border-grey-200 rounded-lg">
            <div class="font-bold text-blue-500 text-sm">
                {{ $account->number }}
            </div>
            <div>
                <strong>{{ $account['currency_code'] }}</strong> {{ $account['balance'] }}
            </div>
        </a>
    </div>
</x-app-layout>
