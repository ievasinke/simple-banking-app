<x-app-layout>
    <x-slot:heading>
        Accounts
    </x-slot:heading>
    <div class="space-y-4">
        @foreach($accounts as $account)
            <a href="/accounts/{{ $account['id'] }}" class="block px-4 py-6 border border-grey-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $account->number }}
                </div>
                <div>
                    <strong>{{ $account['currency_code'] }}</strong> {{ $account['balance'] }}
                </div>
            </a>
        @endforeach
{{--        <div>--}}
{{--            {{ $jobs->links() }}--}}
{{--        </div>--}}
    </div>
</x-app-layout>
