<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <x-slot name="pagetitle">

            <h2
                style="font-family: Nunito; font-size: 30px; font-weight: 900; line-height: 52.5px; letter-spacing: 2px; text-align: center;  color: #3D6670; display: inline-block; padding: 0 10px;">
                SIGN UP
            </h2>


        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid gap-6">
                <!-- Name -->
                <div class="space-y-2">
                    {{-- <x-label for="name" :value="__('Name')" /> --}}
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="name" class="block w-full" type="text" name="name"
                            :value="old('name')" required autofocus placeholder="{{ __('username') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Email Address -->
                <div class="space-y-2">
                    {{-- <x-label for="email" :value="__('email')" /> --}}
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="email" class="block w-full" type="email" name="email"
                            :value="old('email')" required placeholder="{{ __('email') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    {{-- <x-label for="password" :value="__('Password')" /> --}}
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password" class="block w-full" type="password" name="password" required
                            autocomplete="new-password" placeholder="{{ __('password') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Confirm Password -->
                <div class="space-y-2">
                    {{-- <x-label for="password_confirmation" :value="__('Confirm Password')" /> --}}
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password_confirmation" class="block w-full" type="password"
                            name="password_confirmation" required placeholder="{{ __('confirm password') }}" />
                    </x-input-with-icon-wrapper>
                </div>
                    {{-- Invitations code --}}
                    <div class="space-y-2">
                        {{-- <x-label for="name" :value="__('Name')" /> --}}
                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon id="invitationcode" class="block w-full" type="text" name="invitationcode"
                                :value="old('invitationcode')" required autofocus placeholder="{{ __('Invitation code') }}" />
                        </x-input-with-icon-wrapper>
                    </div>
                <div>
                    <x-button class="custom-button justify-center w-full gap-2">
                        {{-- <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" /> --}}
                        <span>{{ __('REGISTER') }}</span>
                    </x-button>

                </div>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Already registered?') }}
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">
                        {{ __('SIGN IN') }}
                    </a>
                </p>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
