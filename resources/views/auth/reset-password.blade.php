<x-guest-layout>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" :value="old('email')" required>
      <label for="email" value="{{ __('Email') }}">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required autocomplete="new-password">
      <label for="password" value="{{ __('Password') }}">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
      <label for="password" value="{{ __('Confirm Password') }}">Password</label>
    </div>

            <div class="flex items-center justify-end mt-4">
            <button class="w-100 btn btn-lg btn-primary" type="submit">
                    {{ __('Reset Password') }}
            </button>
            </div>
        </form>
</x-guest-layout>
