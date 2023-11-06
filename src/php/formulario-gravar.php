<?php
require_once "Classes/Feedback.php";
$usuarios = new Feedback();
$usuarios->nome = $_POST['nome'];
$usuarios->email = $_POST['email'];
$usuarios->idade = $_POST['idade'];
$usuarios->sexo = $_POST['sexo'];
$usuarios->cidade = $_POST['cidade'];
$usuarios->nota = $_POST['nota'];
$usuarios->comentario = $_POST['comentario'];
$usuarios->status_comentario = "Não respondido";
$usuarios->inserir();
?>