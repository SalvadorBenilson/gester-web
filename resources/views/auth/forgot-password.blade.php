<x-guest-layout>
<main class="form-signin text-center">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

    <x-jet-validation-errors class="mb-4" />

    <form method="POST" action="{{ route('password.email') }}">
            @csrf

    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" :value="old('email')" required autofocus autocomplete="email">
      <label for="email" value="{{ __('Email') }}">Email address</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Email Password Reset Link') }}</button>
    </form>
</main>
</x-guest-layout>
