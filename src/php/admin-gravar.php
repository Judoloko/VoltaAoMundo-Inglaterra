<?php
require_once("Classes/Administrador.php");

$admin = new Administrador();
$admin->usuario = $_POST['usuario'];
$admin->senha = $_POST['password'];


if ($admin->login()){
  echo "Logado"; 
} else {
  echo "Não logado";
}
?>