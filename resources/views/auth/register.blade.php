<x-guest-layout>
    <x-auth-card>
            <x-slot name="logo">
                <a class="mt-6 text-center" href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500 mx-auto h-12 w-auto"/>
                </a>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Sign up
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Or
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                        start your 14-day free trial
                    </a>
                </p>
            </x-slot>


            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                <form class="space-y-6" method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')"/>

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                 required autofocus/>
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')"/>

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                 required/>
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')"/>

                        <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="new-password"/>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                 type="password"
                                 name="password_confirmation" required/>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Register
                        </button>
                    </div>
                </form>
            </div>

    </x-auth-card>
</x-guest-layout>
