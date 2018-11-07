    <?php
    session_start();
    include_once("loginClass.php");

      if($_POST){
        echo 'entrou no if';
        $login = new loginClass($_POST["email"], $_POST["senha"]);
        var_dump($login);
        $login->logar();
        var_dump($login);

    if(isset($_POST['error'])){
      echo "<div class='alert alert-danger'>Autenticação negada</div>";
      } elseif(isset($_POST['cadastro'])){
        echo "<div class='alert alert-success'>Cadastro realizado com sucesso</div>";
    }
    ?>

<?php include('header.php'); ?>

  <div class="container">
    <form class="text-center form-login" method="POST" action="verificaLogin.php">
    <h1> Fazer login</h1>
    <br>


    <!--inicio do formulario  -->
    <label for="">Email:</label>
    <input required type="text" name="email" placeholder="Ex:pedro@hotmail.com" class="form-control" value="<?php echo isset($_COOKIE['CookieEmail']) ? $_COOKIE['CookieEmail']: '';?>">
    <label for="">Senha:</label>
    <input required type="password" name="senha" placeholder="Digite sua senha" class="form-control" value="<?php echo isset($_COOKIE['CookieSenha'])? $_COOKIE['CookieSenha']: '';?>">
    <label> <input type="checkbox" style="text-align:center;" name="lembrar" value="sim" <?php echo isset($_COOKIE['CookieLembrete'])? 'checked': ''; ?>> Lembrar usuario</label> <br><br>

    <a style="font-size: 10px;" href="esqueciMinhaSenha.php"> Esqueci minha senha</a>
    <br>
    <button class="btn" type="submit">Entrar </button>
    <br>



    <br>

    <br>
    <button  class="btn Facebook" type="submit">Entrar com Facebook</button>
    <p>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a></p>
    </form>
  </div>
  <!-- fim do formulario -->
<?php include('footer-vero.php'); ?>
