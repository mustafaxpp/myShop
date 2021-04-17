<x-guestuser-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        {{-- Facebook And Google Social Media --}}
        <div class="rounded-t mb-0 px-6 py-6">
            <div class="text-center mb-3">
                <h6 class="text-gray-600 text-sm font-bold">Register with</h6>
            </div>
            <div class="btn-wrapper text-center">
                <a href="{{ url('auth/facebook') }}" class="active:bg-blue-100 hover:bg-blue-300 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow inline-flex items-center font-bold text-xs" type="button" style="transition: all 0.15s ease 0s;"><img alt="..." class="w-5 mr-1 hover:text-white-800" src="https://www.flaticon.com/svg/vstatic/svg/2111/2111393.svg?token=exp=1618450029~hmac=0e2a91090d56f40988b5a7eb9421514c"> <span class="hover:text-white-800"> Facebook </span> </a>
                <button class="active:bg-gray-100 hover:bg-gray-300 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow inline-flex items-center font-bold text-xs" type="button" style="transition: all 0.15s ease 0s;"><img alt="..." class="w-5 mr-1" src="https://www.flaticon.com/svg/vstatic/svg/281/281764.svg?token=exp=1618449415~hmac=f274752d0b55ba363968d6885ab44daa">Google</button>
            </div>
            <hr class="mt-6 border-b-1 border-gray-400">
            {{-- <div class="text-center mb-3">
                <h6 class="text-gray-600 text-sm font-bold mt-6"> OR </h6>
            </div> --}}
        </div>
        {{-- End Facebook And Google Social Media --}}
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guestuser-layout>
