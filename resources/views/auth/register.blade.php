@extends('layouts.app')

@section('isi')
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('Register') }}</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
            <form class="user" action="{{ route('register') }}" method="POST">
                @csrf
            <div class="form-group" >
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

            </div>
                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">{{ __('Register') }}</button>
            </form>
            <hr>
            <div class="text-center">
                <a class="btn btn-link" href="{{ route('login') }}">{{ __('Already Have Account? Login!') }}</a>
            </div>
			</div>
		</div>
</div>
	</div>
</div>
@endsection
