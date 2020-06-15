<?php

class usuario{
    private $nome;
    private $username;
    private $email;
    private $senha;

    public function __construct(){
      $this->nome = $nome;
      $this->username = $username;
      $this->email = $email;
      $this->senha = $senha;
    }
    public function save(){
      $db = new db();
      $sql = (
      "INSERT INTO usuarios
                 (nome,username,email,senha)
       VALUES
                (:nome,:username,:email,:senha)");
      $consulta = $db->prepare($sql);
      $consulta->execute{
        [
          ":nome"=> $this->nome,
          ":username"=> $this->username,
          ":email"=> $this->email,
          ":senha"=> $this->senha
         ]
      }
  }
}
?>
