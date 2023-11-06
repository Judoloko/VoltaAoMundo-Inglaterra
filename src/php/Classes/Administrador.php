<?php
class Administrador
{
  public $id;
  public $usuario;
  public $senha;

  public function __construct($id = false)
  {
    if ($id) {
      $this->id = $id;
    }
  }




  public function login()
  {
    $sql = "SELECT * FROM user WHERE `user-admin` = '{$this->usuario}' AND senha = '{$this->senha}'";
    
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=login-inglaterra', 'root', '');

    $resultado = $conexao->query($sql);

    $lista = $resultado->fetchAll();

    return $lista;
  }



}
