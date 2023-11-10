<?php
  // Testando conexão com o banco de dados
  $dbHost =  'Localhost';
  $dbUsername =  'root';
  $dbPassword =  '';
  $dbName =  'login-inglaterra';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  // if ($conexao->connect_error) 
  // {
  //   echo "Erro";
  // } else {
  //   echo "Conexão efetuada com sucesso";
  // }

?>