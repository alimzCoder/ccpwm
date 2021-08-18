@extends('layouts.main')

@section('content')
            <div class="text-center text-2xl">Log In</div>

            <div class="grid grid-cols-1 mt-10">
                <form method="POST" class="mx-auto" action="{{ route('login') }}">
                    @csrf
                    <div class="mx-auto">
                        <label for="email" class="text-sm italic">{{ __('E-Mail Address') }}</label>
                        <div class="">
                            <input id="email" type="email"
                                   class="w-80 border rounded-lg h-10 @error('email') is-invalid @enderror"
                                   placeholder=" Email..." name="email" value="{{ old('email') }}" required
                                   autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="password" class="text-sm italic">{{ __('Password') }}</label>
                        <div class="">
                            <input id="password" type="password"
                                   class="w-80 border rounded-lg h-10 @error('password') is-invalid @enderror"
                                   placeholder=" Password..." name="password" value="{{ old('password') }}" required
                                   autocomplete="password" autofocus>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="">
                            <div class="form-check">
                                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center gap-4 mt-4">
                        <div class="">
                            <button type="submit" class="bg-blue-500 rounded-lg px-8 py-2 text-white">
                                {{ __('Login') }}
                            </button>
                        </div>
                            @if (Route::has('password.request'))
                                <a class="hover:text-red-500 text-sm" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                </form>

            </div>
@endsection
