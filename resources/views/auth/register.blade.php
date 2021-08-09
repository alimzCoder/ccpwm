@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
    <div class="container">
        <div class="text-center text-2xl">Register</div>
        <div class="grid grid-cols-1 mt-10">
        <form class="mx-auto" method="POST" action="{{ route('register') }}">
        @csrf
            <div class="">
                <label for="name" class="text-sm px-1 italic">{{ __('Name') }}</label>
                <div class="">
                    <input id="name" type="name"
                           class="w-80 border rounded-lg h-10 @error('name') is-invalid @enderror"
                           placeholder=" name..." name="name" value="{{ old('name') }}" required
                           autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-4">
                <label for="email" class="text-sm px-1 italic">{{ __('E-Mail Address') }}</label>
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
                <label for="password" class="text-sm px-1 italic">{{ __('Password') }}</label>
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
                <label for="password" class="text-sm px-1 italic">{{ __('Password') }}</label>
                <div class="">
                    <input id="password" type="password"
                           class="w-80 border rounded-lg h-10 @error('password') is-invalid @enderror"
                           placeholder=" Confirm Password..." name="password_confirmation" value="{{ old('password_confirmation') }}" required
                           autocomplete="password_confirmation" autofocus>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-4 flex justify-end items-center">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="bg-blue-500 rounded-lg px-8 py-2 text-white">
                        {{ __('Register') }}
                    </button>
                </div>

        </form>
        </div>

    </div>


@endsection
