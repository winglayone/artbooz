@extends('layouts.navur')

@section('content')
<body class="backgroundreset">
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="formreset">
                <div class="cardkepala"><img class="iconlogin" src="{{ asset('img/Reset.png') }}">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">


                        <div class="form-group row">

                            <div class="cardkepala">
                                <input id="email" type="email" placeholder="E-Mail Address" class="forminputmail @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="cardkepala">
                                <input id="password" type="password" placeholder="Password" class="forminputmail @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="cardkepala">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="forminputmail" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                                <a style="font-size:20px;" class="linka" href="/">
                                    Home
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
