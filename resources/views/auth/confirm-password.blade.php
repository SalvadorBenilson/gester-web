<x-guest-layout>
<main class="form-signin text-center">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" :value="old('email')" readonly>
      <label for="email" value="{{ __('Email') }}">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required autocomplete="current-password">
      <label for="password" value="{{ __('Password') }}">Password</label>
    </div>

            <div class="flex justify-end mt-4">
                <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Confirm') }}</button>
            </div>
        </form>
</main>
</x-guest-layout>
