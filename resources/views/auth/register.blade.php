@extends('layouts.master')

@section('content')
<body class="backgroundreg">
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="formreg">
                <div class="cardkepala"><img class="iconlogin" src="../img/Register.png">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                          <div class="form-group row">

                            <div class="cardkepala">
                                <img class="iconlogo" src="../img/Name.png"><input id="name" type="text" placeholder="Name" class="forminput @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="cardkepala">
                                <img class="iconlogo" src="../img/Email.png"><input id="email" type="email" placeholder="E-Mail Address" class="forminput @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="cardkepala">
                                <img class="iconlogo" src="../img/Password.png"><input id="password" type="password" placeholder="Password" class="forminput @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="cardkepala">
                                <img class="iconlogo" src="../img/Confirm.png"><input id="password-confirm" type="password" placeholder="Confirm Password" class="forminput" name="password_confirmation" required autocomplete="new-password">
                            </div>
                          </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
