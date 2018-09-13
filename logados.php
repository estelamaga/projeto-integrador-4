<?php include('header.html');
?>


<?php
session_start();

if (!isset($_SESSION["email"]) && !isset($_SESSION["senha"])){
  header ("Location:index.php");

}

$emailSessao = $_SESSION["email"];
$senhaSessao = $_SESSION["senha"];



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="container-fulid">
     <h1 class="logados"><?php echo "Ola, $emailSessao"; ?></h1>
      <p id="teste"><a class="logoff" href="logoff.php">Logout</a></p>
      <?php include('footer.html'); ?>
   </div>
   </body>
 </html>
