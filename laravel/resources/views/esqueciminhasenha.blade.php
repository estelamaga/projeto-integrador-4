@extends('layouts.master')
@section('content')

<div class="container">
  <form class="esqueci form-login" action="esqueciMinhaSenha.php" method="post">
    <h1 class="esqueci">Esqueceu sua senha?</h1>
    Digite o email que voce utiliza para acessar sua conta <br>
    <input class="form-control" type="text" name="" value=""><br><br>
    <button class="form-login-esqueci btn" type="submit">Enviar </button>
  </form>
</div>

@stop
