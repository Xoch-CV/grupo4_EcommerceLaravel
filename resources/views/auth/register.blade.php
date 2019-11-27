@extends('layouts.layoutForms')

@section('content')
<div class="container-fluid container">
    <div class="header">
        <h3>{{ __('Registrate') }}</h3>
    </div>
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                     <!-- Nombre y Apellido -->
                    <div class="row">
                         <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                            <label for="name"><i class="fas fa-user"></i></label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Nombre"><br>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                         </div>
                        <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                            <label for="surname"><i class="fas fa-user"></i></label>
                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" autocomplete="surname" autofocus placeholder="Apellido"><br>
                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="row">
                        <div class="col-11 col-sm-12 col-md-10 col-lg-11 inputregister">
                            <label for="email"><i class="fas fa-envelope"></i></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="joe@schmoe.com"><br>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Pass y Confirmacion pass -->
                    <div class="row">
                        <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                            <label for="pass"><i class="fas fa-unlock"></i></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Mínimo 8 caracteres"><br>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-11 col-sm-12 col-md-10 col-lg-5 inputregister">
                            <label for="re-pass"><i class="fas fa-lock"></i></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Mínimo 8 caracteres"><br>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Check box -->
                    <div class="row">
                        <div class="col-11 col-sm-12 col-md-10 col-lg-11 checkbox">
                            <input type="checkbox" name="checkbox" value="checked"/>
                            <span>Estoy de acuerdo con los  <a href="#" class="form-control">Términos y condiciones.</span></a><br>
                            @error('checkbox')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                    <!-- Buttons -->
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
                            <input class="button2" type="submit" name="boton" value="Registrarme">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                            <a class="button" href={{ route('login') }}>Ya tengo usuario</a>
                        </div>
                    </div>
                </form>
            </div>
                    <!-- Imagen singno exclamacion -->
                    <div class="col-10 col-sm-10 col-md-10 col-lg-2">
                        <img class="register" src="{{asset('img/signo.png')}}" alt="">
                    </div>
    </div>        
</div>
@endsection


​
   