<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.global_header')

<body class="min-h-screen bg-[#F2F2F2] text-[#2C2C2C]">
    <div class="w-screem h-screen bg-[#F2F2F2] text-[#2C2C2C] grid grid-cols-1 md:grid-cols-2 items-center justify-center content-center gap-4 md:gap-0">
        <div class="mx-auto block w-8/12">
            <a href="{{url('/')}}" class="group relative block h-64 sm:h-80 lg:h-96">
                <span class="absolute inset-0 border-2 border-dashed border-black rounded-3xl"></span>

                <div class="relative flex h-full overflow-hidden transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2 rounded-3xl bg-cover bg-no-repeat" style="background-image: url('{{ asset('images/login_welcome.jpg') }}')">
                    <div class="p-4 pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                        <h2 class="mt-12 text-white text-xl font-medium sm:text-2xl">Welcome back!</h2>
                    </div>

                    <div class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8">
                        <h3 class="mt-4 text-white text-xl font-medium sm:text-2xl">Let's collab!</h3>

                        <p class="mt-4 text-sm text-white sm:text-base">
                            This is the customer portal login, keep your projects and teams on track.
                        </p>

                        <p class="mt-8 font-bold text-white">Go home</p>
                    </div>
                </div>
            </a>
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}" class="block mx-auto w-8/12 shadow-md rounded-2xl bg-white transition-transform p-10">
            @csrf

            <img class="w-80 h-auto block mx-auto" src="{{asset('images/Web_inverted.svg')}}" alt="Nova Consulting" draggable="false" onclick="window.location.pathname = '/'">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</body>