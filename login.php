<?php include('header.html');
?>
  <div class="container">
    <form class="text-center form-login" method="POST" action="verificaLogin.php">
    <h1> Fazer login</h1>
    <label for="">Email:</label>
    <input required type="text" name="email" placeholder="Ex:pedro@hotmail.com" class="form-control">
    <label for="">Senha:</label>
    <input required type="password" name="senha" value="******" class="form-control">
    <a style="font-size: 10px;" href="esqueciMinhaSenha.php"> Esqueci minha senha</a>
    <br>
    <button class="btn" type="submit">Entrar </button>

    <br>

    <br>
    <button  class="btn Facebook" type="submit">Entrar com Facebook</button>
    <p>Não tem cadastro? <a href="#">Cadastre-se</a></p>
    </form>
  </div>
<?php include('footer.html'); ?>
