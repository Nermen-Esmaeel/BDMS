<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <!-- First Name -->
        <div>
            <x-input-label for="name" :value="__('First Name')" />
            <x-text-input id="name" name="first_name" type="text" class="mt-1 block w-full" :value="old('name', $user->firsName)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!--Last Name -->
        <div>
            <x-input-label for="name" :value="__('Last Name')" />
            <x-text-input id="name" name="last_name" type="text" class="mt-1 block w-full" :value="old('name', $user->lastName)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <!--User Name -->
        <div>
            <x-input-label for="name" :value="__('User Name')" />
            <x-text-input id="name" name="username" type="text" class="mt-1 block w-full" :value="old('name', $user->userName)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>


        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <!-- Age -->
        <div>
            <x-input-label for="name" :value="__('Age')" />
            <x-text-input id="name" name="age" type="number" class="mt-1 block w-full" :value="old('name', $user->age)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <!-- Weight -->
        <div>
            <x-input-label for="name" :value="__('Weight')" />
            <x-text-input id="name" name="weight" type="number" step="any" class="mt-1 block w-full" :value="old('name', $user->weight)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="name" :value="__('Phone')" />
            <x-text-input id="name" name="phone" type="text" class="mt-1 block w-full" :value="old('name', $user->phone)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="name" :value="__('Phone')" />
            <x-text-input id="name" name="phone" type="text" class="mt-1 block w-full" :value="old('name', $user->phone)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <!-- Address -->
        <div>
            <x-input-label for="name" :value="__('Address')" />
            <x-text-input id="name" name="address" type="text" class="mt-1 block w-full" :value="old('name', $user->address)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <!-- city -->
        <div>
            <x-input-label for="name" :value="__('City')" />
            <select name="city" id="" class="block mt-1 w-full" style="  border: 2px solid;border-radius: 5px;">
                @foreach ($cities as $city)
                <option value="{{$city->id}}">{{$user->city->name}}</option>
                @endforeach
            </select>
        </div>

        <!-- Blood Group -->

        <div class="mt-4">
            <x-input-label for="name" :value="__('Blood Group')" />
            <select name="blood" id="" class="block mt-1 w-full" style="  border: 2px solid;border-radius: 5px;">
                <option value="{{$user->blood->id}}">{{ $user->blood->name }}</option>
                @foreach ($bloods as $blood)
                <option value="{{$blood->id}}">{{$blood->name}}</option>
                @endforeach
            </select>

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
