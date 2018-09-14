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
        if ($senha === $usuariosArray['usuarios'][$key]['senha']){//verifica senha
          $_SESSION["email"]=$email;
          header('Location: logados.php');
        }else{
          header('Location: login.php?error=true');
        }
      }
  }

}

 ?>
