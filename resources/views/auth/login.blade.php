@extends('layouts.app')

@section('isi')
<div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">{{ __('Login') }}</label>
            <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div id="login-box" class="col-md-12">
                    <form class="user" action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email Address..." required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">{{ __('Login') }}</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="btn btn-link" href="{{ route('register') }}">{{ __('Dont Have Account? Create an Account!') }}</a>
                    </div>

                </div>

                <div class="for-pwd-htm">
                    <div class="form-group">
                        <label for="user" class="label">Email</label>
                        <input type="email" name="txt_email" id="username" class="form-control">
                    </div>
                    <div class="group">
                        <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                    </div>
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">

                </div>
            </div>
        </div>
    </div>
@endsection


