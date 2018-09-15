<?php include('header.html');
?>
  <div class="container">
    <form class="text-center form-login" method="POST" action="verificaLogin.php">
    <h1> Fazer login</h1>
    <br>
    <?php
      if(isset($_GET['error'])){
        echo "<div class='alert alert-danger'>Autenticação negada</div>";
      } else   if(isset($_GET['cadastro'])){
        echo "<div class='alert alert-success'>Cadastro realizado com sucesso</div>";
      }
    ?>
    <label for="">Email:</label>
    <input required type="text" name="email" placeholder="Ex:pedro@hotmail.com" class="form-control">
    <label for="">Senha:</label>
    <input required type="password" name="senha" placeholder="******" class="form-control">
    <!-- <label> <input type="checkbox"> Lembrar usuario</label> -->

    <a style="font-size: 10px;" href="esqueciMinhaSenha.php"> Esqueci minha senha</a>
    <br>
    <button class="btn" type="submit">Entrar </button>


    <br>

    <br>
    <button  class="btn Facebook" type="submit">Entrar com Facebook</button>
    <p>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a></p>
    </form>
  </div>
<?php include('footer.html'); ?>
