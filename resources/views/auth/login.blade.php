@extends('layouts.layoutForms')

@section('content')

<div class="container" style="height:500px">
    <div class="row" style="display: flex; flex-direction: column; align-content:center">
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="col-10 col-sm-10 col-md-8 col-lg-4 inputregister">
                <label for="email"><i class="fas fa-envelope"></i></label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="joe@schmoe.com"><br>
                <p class="errors">{{$errors->first('email')}}</p>
            </div>
            <div class="col-10 col-sm-10 col-md-8 col-lg-4 inputregister">
            <label for="pass"><i class="fas fa-unlock"></i></label>
                <input id="password" type="password" name="password" autocomplete="new-password" placeholder="Contraseña"><br>
                <p class="errors">{{$errors->first('password')}}</p>
            </div>
            <div class="col-10 col-sm-10 col-md-8 col-lg-4 checkbox">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
                </label>
            </div>
            <div class="col-10 col-sm-12 col-md-8 col-lg-4 botonera-login">
                <div class="row" style="display: flex; flex-direction: row; justify-content: space-between;">
                    <input class="button2" type="submit" name="boton" value="{{ __('Login') }}">
                    <a class="button" href="{{ route('register') }}">Sign up</a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- <script src="{{ asset('js/login.js') }}" defer> </script> -->
@endsection
