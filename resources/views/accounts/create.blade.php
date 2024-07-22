<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Account') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('accounts.store') }}">
        @csrf
{{--        <div class="py-12">--}}
        {{--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
        {{--                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
        {{--                    <div class="p-6 text-gray-900">--}}
        {{--                        {{ __("You're logged in!") }}--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="py-12">
        <!-- Currency code -->
        <div>
            <x-input-label for="currency_code" :value="__('Currency Code')"/>
            <x-text-input id="currency_code" class="block mt-1 w-full" type="text" name="currency_code"
                          :value="old('currency_code')" required autofocus autocomplete="first_name"/>
            <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
        </div>

        <!-- Last Name -->
        {{--    <div>--}}
        {{--        <x-input-label for="last_name" :value="__('Last Name')" />--}}
        {{--        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />--}}
        {{--        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />--}}
        {{--    </div>--}}
        <!-- Account Type -->
        <div>
            <label for="type">Account Type:</label>
            <select id="type" name="type" required>
                <option value="checking">Checking</option>
                <option value="saving">Saving</option>
            </select>
        </div>
        {{--    <button type="submit">Create Account</button>--}}
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Create Account') }}
            </x-primary-button>
        </div>
        </div>
    </form>
</x-app-layout>
