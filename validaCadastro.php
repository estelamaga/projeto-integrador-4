<?php

//$foto = $_FILE;

var_dump($_FILES);
$nomeDoARquivo = $_FILES["fotoPerfil"]["name"];
$caminhoDaFoto = "images/fotosUsuario/".$nomeDoARquivo;

$guardaRetorno= move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], $caminhoDaFoto);


 ?>
