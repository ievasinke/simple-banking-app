<x-app-layout>
    <x-slot:heading>
        Account
    </x-slot:heading>
    <div class="space-y-4">
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
