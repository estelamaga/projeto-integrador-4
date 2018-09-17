<?php
session_start();

if (isset($_SESSION["email"])){
  $emailSessao=$_SESSION["email"];
  //header ("Location:index.php");
}

include('header.php');
?>
   <div class="container-fulid">
     <h1 class="logados"><?php echo "Ola, $emailSessao"; ?></h1>
      <p id="teste"><a class="logoff" href="logoff.php">Logout</a></p>
   </div>
   <?php include('footer-vero.php'); ?>
