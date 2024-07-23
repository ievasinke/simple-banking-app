<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('My Accounts') }}
            </h2>
            <a href="/accounts/create">
                    {{ __('Create Account') }}
            </a>
        </div>
    </x-slot>
    <div class="space-y-6 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @foreach($accounts as $account)
            <a href="/accounts/{{ $account['id'] }}" class="block px-4 py-6 border border-grey-200 rounded-lg ">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $account->number }}
                </div>
                <div>
                    <strong>{{ $account['currency_code'] }}</strong> {{ $account['balance'] }}
                </div>
            </a>
        @endforeach
    </div>
</x-app-layout>
