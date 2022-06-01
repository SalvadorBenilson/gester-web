<x-guest-layout>

@foreach ($errors->all() as $error)
  <div class="alert alert-danger d-flex justify-content" role="alert">
    <ul class="list-disc list-inside text-sm text-center">
      <li>{{ $error }}</li>
    </ul>
  </div>
@endforeach

<main class="form-signin text-center">

@if (session('status'))
  <div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
  </div>
@endif

<form method="POST" action="{{ route('login') }}">
  @csrf

    <img src="{{ asset('/img/briefcase-fill.svg') }}" alt="Bootstrap" width="50" height="50">
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
