<?php
session_start();
if($_POST){
  $email = $_POST["email"];
  $senha = $_POST["senha"];

$_SESSION["email"]=$email;
$_SESSION["senha"]=$senha;

if ($email === $_SESSION["email"] && $senha === $_SESSION["senha"]){
  header("Location:logados.php");
} else {
  header ("Location: login.php");
}

}

 ?>
