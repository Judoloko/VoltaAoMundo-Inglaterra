<?php
require_once("Classes/Administrador.php");

$admin = new Administrador();
$admin->usuario = $_POST['usuario'];
$admin->senha = $_POST['password'];



if ($admin->login() == null) {
  //Usuario ou senha invalida
  header('Location: usuario-erro.php');
} else {
  session_start();
  $_SESSION['usuario_logado'] = $usuario_logado;
  header('Location: ../pages/dashboard.html');
}

?>