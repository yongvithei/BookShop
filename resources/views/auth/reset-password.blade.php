@extends('frontend.index')
@section('main')
    @section('title')
        Reset Password
    @endsection
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <div class="text-center">
            <h4 class="my-2 font-weight-bold text-lg">{{ __('main.reset_password') }}</h4>
        </div>
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('main.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
                <x-input-label for="password" :value="__('main.password')"/>
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('main.confirm_password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('main.reset_button') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@endsection
