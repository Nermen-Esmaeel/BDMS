<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div>
            <x-input-label for="name" :value="__('First Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!--Last Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Last Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!--User Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('User Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="user_name" :value="old('user_name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <!-- Age -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Age')" />
            <x-text-input id="name" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

        </div>

        <!-- Weight -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Weight')" />
            <x-text-input id="name" class="block mt-1 w-full" type="number" step="any" name="weight" :value="old('weight')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Phone')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Address')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- city -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('City')" />
            <select name="city" id="" class="block mt-1 w-full" style="  border: 2px solid;border-radius: 5px;">
                @foreach ($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>

        <!-- Blood Group -->

        <div class="mt-4">
            <x-input-label for="name" :value="__('Blood Group')" />
            <select name="blood" id="" class="block mt-1 w-full" style="  border: 2px solid;border-radius: 5px;">
                @foreach ($bloods as $blood)
                <option value="{{$blood->id}}">{{$blood->name}}</option>
                @endforeach
            </select>
        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
