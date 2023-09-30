@extends('frontend.index')
@section('main')


<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="relative flex flex-col m-4 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">
            <span class="mb-3 text-3xl font-bold text-center">{{ __('auth.register_user') }}</span>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="py-2">
        <span class="mb-2 text-md">{{ __('auth.name') }}</span>
        <input type="text"
            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            name="name" id="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="py-2">
        <span class="mb-2 text-md">{{ __('auth.username') }}</span>
        <input type="text"
            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            name="username" id="username" value="{{ old('username') }}" required autofocus
            autocomplete="username" />
        <x-input-error :messages="$errors->get('username')" class="mt-2" />
    </div>
    <div class="py-2">
        <span class="mb-2 text-md">{{ __('auth.email') }}</span>
        <input type="text"
            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            name="email" id="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div class="py-2">
        <span class="mb-1 text-md">{{ __('auth.passwords') }}</span>
        <input type="password" name="password" id="password"
            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            value="{{ old('password') }}" required autofocus autocomplete="password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="py-2">
        <span class="mb-2 text-md">{{ __('auth.confirm_password') }}</span>
        <input type="password" name="password_confirmation" id="password_confirmation"
            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            value="{{ old('password_confirmation') }}" required autofocus
            autocomplete="password_confirmation" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="m-2">
    </div>
    <button
        class="w-full bg-black text-white p-2 rounded-lg mb-2 hover:bg-white hover:text-black hover:border hover:border-gray-300">
        {{ __('auth.register') }}
    </button>
</form>
<div class="grid grid-cols-3 items-center text-gray-400">
    <hr class="text-gray-400">
    <p class="text-center">{{ __('auth.or') }}</p>
    <hr class="text-gray-400">
</div>

<button
    class="mt-2 border border-blue-400 text-blue-700 hover:bg-gray-800 hover:text-white p-2 rounded-lg mb-6 border-black-300 border-width-4 border-opacity-50">
    <img src="{{ asset('/frontend/assets/images/login-images/google.svg') }}" alt="img"
        class="w-6 h-6 inline mr-2" />
    {{ __('auth.sign_in_with_google') }}
</button>

<div class="text-center text-gray-400">
    <span class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        {{ __('auth.already_registered') }}
    </span>
    <a href="{{ route('login') }}" class="font-bold text-black" >{{ __('auth.login_here') }}</a>
</div>

        </div>
        <!-- {/* right side */} -->

    </div>
</div>




@endsection
