{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
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
<form action="{{ route('login') }}" method="POST">
@csrf

            <h2>Ingresá:</h2>
            <input id="email" type="email"  name="email" placeholder="Email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <p class="warning">
                    {{ $errors->first('email') }}
              </p>
            @endif

            <input id="password" type="password" name="password" placeholder="Contraseña" value="" required>
            @if ($errors->has('password'))
                <p class="warning">
                {{ $errors->first('password') }}
              </p>
            @endif

      <input type="submit" value="Ingresar">
      <div class="caja-recuerdame">
          <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="recuerdame" for="remember">Recuerdame</label>
      </div>
</form>
<a href="register" class="form-bottom-link">Todavía no tengo cuenta</a>
<a href="{{ route('password.request') }}" class="form-bottom-link">Olvidaste tu contraseña?</a>
</section></div>

@include('frontend/parts/scripts')
