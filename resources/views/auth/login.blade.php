<x-guest-layout>
<main class="form-signin text-center">
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

<form method="POST" action="{{ route('login') }}">
@csrf

    <img class="mb-4" src="{{ asset('/img/bootstrap.svg') }}" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" :value="old('email')" required autofocus autocomplete="email">
      <label for="email" value="{{ __('Email') }}">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required autocomplete="current-password">
      <label for="password" value="{{ __('Password') }}">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> {{ __('Remember me') }}
      </label>
    </div>
    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
    @endif
    
    <div class="flex justify-end mt-4">
    <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Log in') }}</button>
    </div>
  </form>
</main>
</x-guest-layout>
