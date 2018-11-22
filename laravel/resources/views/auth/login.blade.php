@extends('layouts.master')

@section('content')



  <form class="text-center form-login" method="POST"  action="{{ route('login') }}">
  <h1> Fazer login</h1>
  @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
      </span>
  @endif
<br>
  @csrf
  <!--inicio do formulario  -->
  <label for="">Email:</label>
  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

  <label for="">Senha:</label>
  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

  @if ($errors->has('password'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
      </span>
  @endif
  <label> <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar usuario</label> <br><br>
  <button type="submit" class="btn btn-primary">
      {{ __('Login') }}
  </button>
  <br>

  <a class="btn btn-link" href="{{ route('password.request') }}">
      {{ __('Esqueceu sua senha?') }}
  </a>

  <br>

  <button  class="btn Facebook" type="submit">Entrar com Facebook</button>
  <p>Não tem cadastro? <a href="/cadastro">Cadastre-se</a></p>
  </form>
</div>
<!-- fim do formulario -->

@endsection
