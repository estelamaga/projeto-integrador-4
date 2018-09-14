<?php

// O cliente solicita que, no cadastro, o usuario possa fazer o upload de uma foto do perfil.
//$foto = $_FILE;

// var_dump($_FILES);
$nomeDoARquivo = $_FILES["fotoPerfil"]["name"];
$caminhoDaFoto = "images/fotosUsuario/".$nomeDoARquivo;
$guardaRetorno= move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], $caminhoDaFoto);

// ------------------------------------------------------------------------------------------------

// O formulario deve ser validado do lado do servidor.

$arquivo="usuarios.json";

if (file_exists($arquivo)) {
  $dados=file_get_contents($arquivo);
  $dados=json_decode($dados,true); // para array associativo // adicionei , true para tornar o array associativo// sem ele ele retorna um objeto.
  $formdados=$_POST;
  $formdados["caminhofoto"]=$caminhoDaFoto;
  $dados["usuarios"][]=$formdados;
  $dadosemjson=json_encode($dados); //json string
 file_put_contents($arquivo,$dadosemjson);
 header('Location: login.php?cadastro=true');
}else{
  $dados=["usuarios"=>[]];
  $dados["usuarios"][]=$_POST;
  $formdados=json_encode($dados); //json string
  file_put_contents($arquivo,$formdados);
  echo "arquivo criado";
}

 ?>
