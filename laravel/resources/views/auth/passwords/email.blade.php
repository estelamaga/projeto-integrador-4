@extends('layouts.master')
@section('content')

<div class="container">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
      <form class="esqueci form-login" action="{{ route('password.email') }}" method="POST">
        @csrf
        <h1 class="esqueci">{{ __('Esqueceu sua senha?') }}</h1><br>
        Digite o email que voce utiliza para acessar sua conta <br></br>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required><br><br>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        <button class="form-login-esqueci btn" type="submit">
              {{ __('Enviar') }}
         </button>
      </form>
    </div>
    
@endsection
