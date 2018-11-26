{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
@endsection



 --}}





@include('frontend/parts/head')
@include('frontend/parts/header')

<!-- Form -->
<div id="form-wrapper">
<section class="form-section">
<form action="{{ route('register') }}" method="POST">
      @csrf
            <h2>Registrate:</h2>

            <input type="text" name="first_name" placeholder="Nombre" value="{{ old('first_name') }}" required>
            @if ($errors->has('first_name'))
                <p class="warning">
                    {{ $errors->first('first_name') }}
                </p>
            @endif


            <input type="text" name="last_name" placeholder="Apellido" value="{{ old('last_name') }}" required>
            @if ($errors->has('last_name'))
                <p class="warning">
                    {{ $errors->first('last_name') }}
                </p>
            @endif

            <input type="number" maxlength="8" name="dni" placeholder="N° de DNI" value="{{ old('dni') }}" required>
            @if ($errors->has('dni'))
                <p class="warning">
                    {{ $errors->first('dni') }}
                </p>
            @endif

            <input type="number" name="tel" placeholder="N° Teléfono" value="{{ old('tel') }}" required>
            @if ($errors->has('tel'))
                <p class="warning">
                    {{ $errors->first('tel') }}
                </p>
            @endif

            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <p class="warning">
                    {{ $errors->first('email') }}
                </p>
            @endif

            <input type="password" name="password" placeholder="Contraseña" required>
            @if ($errors->has('password'))
               <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
               </span>
           @endif



            <input type="password" name="password_confirmation" placeholder="Re-ingresar contraseña" required>

      <input type="submit" value="Registrarme">
</form>
<a href="login" class="form-bottom-link">Ya tengo cuenta</a>
<!-- <a href="preguntas_frecuentes.html" class="form-bottom-link">Preguntas Frecuentes</a> -->
</section></div>
</main>

@include('frontend/parts/scripts')
