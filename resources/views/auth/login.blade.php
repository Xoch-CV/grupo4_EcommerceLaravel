@extends('layouts.layoutForms')

@section('content')
<div class="container-fluid container">
    <div class="header">
        <h3>{{ __('Login') }}</h3>
    </div>
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email -->
                        <div class="form-group row ">
                            <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                                <label for="email"><i class="fas fa-envelope"></i></label>
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="joe@schmoe.com"><br>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Pass -->
                        <div class="form-group row">
                            <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                            <label for="pass"><i class="fas fa-unlock"></i></label>
                            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Contraseña"><br>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>
                        <!-- Check box -->
                        <div class="form-group row ">
                            <div class="col-11 col-sm-12 col-md-10 col-lg-5 checkbox">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                            </label>
                            </div>
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="row botonera-login">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <input class="button2" type="submit" name="boton" value="{{ __('Login') }}">
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <a class="button" href="{{ route('register') }}">Sign up</a>
                            </div>
                            <div class="col-11 col-sm-12 col-md-10 col-lg-11">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
<!-- <script src="{{ asset('js/login.js') }}" defer> </script> -->
@endsection
