<x-guestuser-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        {{-- Facebook And Google Social Media --}}
        <div class="rounded-t mb-0 px-6 py-6">
            <div class="text-center mb-3">
                <h6 class="text-gray-600 text-sm font-bold">Log in with</h6>
            </div>
            <div class="btn-wrapper text-center">
                <a href="{{ url('auth/facebook') }}"  class="active:bg-blue-100 hover:bg-blue-300 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow inline-flex items-center font-bold text-xs" type="button" style="transition: all 0.15s ease 0s;"><img alt="..." class="w-5 mr-1" src="{{ asset('images/facebook.svg') }}"> Facebook </a>
                <a href="{{ url('auth/google') }}" class="active:bg-gray-100 hover:bg-gray-300 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow inline-flex items-center font-bold text-xs" type="button" style="transition: all 0.15s ease 0s;"><img alt="..." class="w-5 mr-1" src="{{ asset('images/search.svg') }}">Google</a>
            </div>
            <hr class="mt-6 border-b-1 border-gray-400">
            {{-- <div class="text-center mb-3">
                <h6 class="text-gray-600 text-sm font-bold mt-6"> OR </h6>
            </div> --}}
        </div>
        {{-- Facebook And Google Social Media --}}

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guestuser-layout>
