<<?php
class loginClass{

  private $email;
  private $senha;

  public function __construct($email, $senha){
    $this->email = $email;
    $this->senha = $senha;
  }

  public function logar(){

    // String de conexão:
    $dsn = 'mysql:host=localhost;dbname=proj_int_04;charset=utf8;port:3306';
    // Usuário e senha:
    $db_user = 'root';
    $db_pass = 'root';
    // Conectando com o Banco de Dados:
    $db = new PDO($dsn, $db_user, $db_pass);
    // Fechar conexão - não é necessário:
    //$db = null;

    $query = $db->query('SELECT * FROM usuarios WHERE email =:email and senha = :senha');
    $query->fetchAll(PDO::FETCH_ASSOC);
  }catch(PDOException $e){
    echo $e->getMessage();
    die();
  }
  }



 ?>
