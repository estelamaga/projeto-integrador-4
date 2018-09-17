<?php
session_start();


  $emailSessao=(isset($_SESSION["email"]))?$_SESSION["email"]:"";
  //header ("Location:index.php");


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php include('header.html');
     ?>
     <div class="container-fulid">
     <h1 class="logados"><?php echo "Ola, $emailSessao"; ?></h1>
      <p id="teste"><a class="logoff" href="logoff.php">Logout</a></p>
      <?php include('footer.html'); ?>
   </div>
   </body>
 </html>
