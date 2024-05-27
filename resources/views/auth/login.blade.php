@extends('frontend.index')
@section('main')

<div class="flex items-center justify-center min-h-full bg-gray-100">
    <!-- session status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="relative flex flex-col my-7 mx-2 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">
            <span class="mb-2 text-4xl font-bold">{{ __('auth.welcome_back') }}</span>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="py-2">
                    <span class="mb-2 text-md">{{ __('auth.email_or_username') }}</span>
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="login" id="login" value="{{ old('login') }}" required autofocus
                        autocomplete="current-password" />
                </div>
                <div class="py-2">
                    <span class="mb-1 text-md">{{ __('auth.passwords') }}</span>
                    <input type="password" name="password" id="password"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        value="{{ old('password') }}" required autofocus autocomplete="password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <x-input-error :messages="$errors->get('login')" class="mt-2" />
                </div>
                <div class="flex justify-between w-full py-1">
                    <div class="mb-2">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('auth.remember_me') }}</span>
                        </label>
                    </div>
                    <div class="mb-4 text-right">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('auth.forgot_password') }}
                        </a>
                        @endif
                    </div>
                </div>
                <button
                    class="w-full bg-black text-white p-2 rounded-lg mb-2 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                    {{ __('auth.sign_in') }}
                </button>
            </form>
            <div class="grid grid-cols-3 items-center text-black">
                <hr class="text-gray-400">
                <p class="text-center">{{ __('auth.or') }}</p>
                <hr class="text-gray-400">
            </div>
            <button onclick="window.location.href='/auth/google/redirect/user'"
                class="mt-2 border border-blue-400 text-blue-700 hover:bg-blue-700 hover:text-white p-2 rounded-lg mb-6 border-black-300 border-width-4 border-opacity-50">
                <img src="{{ asset('/frontend/assets/images/login-images/google.svg') }}" alt="img"
                    class="w-6 h-6 inline mr-2" />
                {{ __('auth.sign_in_with_google') }}
            </button>

            <!-- Forgot Password Link -->

            <div class="text-center text-gray-400">
                {{ __('auth.dont_have_account') }} <a href="/register">
                    <span class="font-bold text-black">{{ __('auth.sign_up_for_free') }}</span>
                </a>
            </div>
        </div>
        <!-- {/* right side */} -->

    </div>
</div>


@endsection
