<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500 mx-auto w-auto h-12"/>
            </a>
        </x-slot>

        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')"/>

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                             :value="old('email', $request->email)" required autofocus/>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')"/>

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required/>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
                             name="password_confirmation" required/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
