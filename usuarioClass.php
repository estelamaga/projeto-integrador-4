<?php
// transformando o cadastro em objeto:
class usuarioClass{
private $nome;
private $email;
private $senha;
private $foto;
private $sobrenome;
private $dataDeNascimento;
private $telefone;
private $cpf;
private $cnpj;
private $sexo;
private $tipoDePessoa;

public function getNome(){return $this->nome;}
public function getEmail(){return $this->email;}
public function getSenha(){return $this->senha;}
public function getFoto(){return $this->foto;}
public function setFoto($foto){$this->foto = $foto;}
public function getSobrenome(){return $this->sobrenome;}
public function getDataDeNascimento(){return $this->dataDeNascimento;}
public function getTelefone(){return $this->telefone;}
public function getCPF(){return $this->cpf;}
public function getCNPJ(){return $this->cnpj;}
public function getSexo(){return $this->sexo;}

public function _construct($tipoDePessoa, $valores){
  $this->nome = $valores["nome"];
  $this->email = $valores["email"];
  $this->senha = $valores["senha"];
  $this->telefone = $valores["telefone"];
  $this->tipoDePessoa = $valores["tipoDePessoa"];


  if ($tipoDePessoa == "pf" ){
    $this->sobrenome = $valores["sobrenome"];
    $this->cpf = $valores["cpf"];
    $this->sexo= $valores["sexo"];
    $this->dataDeNascimento = $valores["dataDeNascimento"];
  } else {
      $this->cnpj = $valores["cnpj"];
  }

}

public function cadastrarUsuario(){
  if ($this->tipoDePessoa == "pf"){
    $this->cadastrarUsuarioPessoaFisica();
  } else {
    $this->cadastrarUsuarioPessoaJuridica();
  }
}

public function cadastrarUsuarioPessoaFisica(){
  $dsn = 'mysql:host=localhost;dbname=proj_int_04;charset=utf8;port:3306';
        $db_user = 'root';
        $db_pass = 'root';
        try{
        $db = new PDO($dsn, $db_user, $db_pass);
        $query = $db->prepare('INSERT INTO usuarios("nome", "email", "senha", "sobrenome", "cpf", "sexo", "dataDeNascimento", "telefone") values (:nome, :email, :senha, :sobrenome, :cpf, :sexo, :dataDeNascimento, :telefone)');
        $query->execute([':nome' => $this->nome,
        ':email' => $$this->email,
        ':senha' => $this->senha,
        ':sobrenome' => $this->sobrenome,
        ':cpf' => $this->cpf,
        ':sexo' => $this->sexo,
        ':dataDeNascimento' => $this->dataDeNascimento,
        ':telefone' => $this->telefone]);

      return $db->lastInsetId();

        }catch(PDOException $e){
        echo $e->getMessage();
        die();

  }
}

public function cadastrarUsuarioPessoaJuridica(){
  $dsn = 'mysql:host=localhost;dbname=proj_int_04;charset=utf8;port:3306';
        $db_user = 'root';
        $db_pass = 'root';
        try{
        $db = new PDO($dsn, $db_user, $db_pass);
        $query = $db->prepare('INSERT INTO usarios("nome", "email", "senha", "cnpj", "telefone") values (:nome, :email, :senha, :cnpj, :telefone)');
        $query->execute([':nome' => $this->nome, ':email' => $this->email, ':senha' => $this->senha, ':cnpj' => $this->cnpj, 'telefone' => $this->telefone]);
        return $db->lastInsetId();

        }catch(PDOException $e){
        echo $e->getMessage();
        die();
      }

  }



}
?>
