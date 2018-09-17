<?php
session_start();
if($_POST){
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $usuariosJson = 'usuarios.json';
  $usuarios = file_get_contents($usuariosJson);
  $usuariosArray = json_decode($usuarios, true);



  foreach ($usuariosArray['usuarios'] as $key => $value) {
      if(in_array($email, $usuariosArray['usuarios'][$key])){//verifica se usuario existe
        if (password_verify($senha, $usuariosArray['usuarios'][$key]['senha'])){//verifica senha
          $_SESSION["email"]=$email;
          header('Location: logados.php');
        }else{
          header('Location: login.php?error=true');
        }
      }
  }

}
// <!-- INICIO DO LEMBRAR USUARIO -->

if ($_POST && $_POST["lembrar"] === "sim"):
$expira = time() + 60*60*24*30;
setCookie('CookieLembrete', ('SIM'), $expira);
setCookie('CookieEmail', $email, $expira);
setCookie('CookieSenha', $senha, $expira);

else:

setCookie('CookieLembrete');
setCookie('CookieEmail');
setCookie('CookieSenha');

endif;
//
// $_COOKIE["CookieEmail"]= (isset($_COOKIE['CookieEmail'])) ? base64_decode($_COOKIE['CookieEmail']) : '';
// $_COOKIE['CookieSenha'] = (isset($_COOKIE['CookieSenha'])) ? base64_decode($_COOKIE['CookieSenha']) : '';
// $_COOKIE['CookieLembrete']= (isset($_COOKIE['CookieLembrete'])) ? base64_decode($_COOKIE['CookieLembrete']) : '';
$_SESSION["checked"] = ($_POST["lembrar"] === "sim") ? 'checked' : '';


?>
