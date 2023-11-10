<?php

  // Teste para confirmar se os dados são enviados

  // if(isset($_POST["submit"]))
  // {
  //   print_r('Nome: '. $_POST['nome']);
  //   print_r('<br>');
  //   print_r('Email: '. $_POST['email']);
  //   print_r('<br>');
  //   print_r('Idade: '. $_POST['idade']);
  //   print_r('<br>');
  //   print_r('Sexo: '. $_POST['sexo']);
  //   print_r('<br>');
  //   print_r('Cidae: '. $_POST['cidade']);
  //   print_r('<br>');
  //   print_r('Nota: '. $_POST['nota']);
  //   print_r('<br>');
  //   print_r('Comentario: '. $_POST['comentario']);
  //   print_r('<br>');
  // }

  // Inclui as configurações do banco de dados
  include_once('config.php');

  // Verifica se o formulário foi submetido
  if(isset($_POST["submit"])) {
    // Coleta os dados do formulário usando $_POST
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $cidade = $_POST['cidade'];
    $nota = $_POST['nota'];
    $comentario = $_POST['comentario'];
    $status_comentario = "Não respondido"; 

    // Executa uma consulta SQL para inserir os dados na tabela "feedback"
    $resultado = mysqli_query($conexao, "INSERT INTO feedback(nome,email,idade,sexo,cidade,nota,comentario,status_comentario) VALUES ('$nome','$email','$idade','$sexo', '$cidade', '$nota', '$comentario','$status_comentario')");
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicons -->
  <link rel="shortcut icon" href="../assets/inglaterra.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">



  <!-- Link para meu CSS -->
  <link rel="stylesheet" href="../css/faleConosco.css">

  <!-- Importando estilos especifico -->
  <link rel="stylesheet" href="../css/header.css">
 

  <title>Volta Ao Mundo - Inglaterra</title>
</head>

<body>
  <!-- INICIO HEADER -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="left-top">
      <img src="../assets/inglaterra.png" alt="bandeira da Inglaterra">
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mx-auto mt-6 mb-2">
        <li class="nav-item">
          <a class="nav-link mx-5 font-menu " href="../../index.html">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5 font-menu" href="../pages/historia.html">História</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5 font-menu" href="../pages/sobre.html">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5 font-menu" href="../pages/turismo.html">Turismo</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link mx-5 font-menu" href="../pages/gastronomia.html">Gastronomia</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link mx-5 font-menu" href="faleConosco.html">Fale Conosco</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- FIM HEADER -->
  <!-- INICIO MAIN -->
  <div class="box">
    <form action="faleConosco.php" method="POST">
      <fieldset>
        <legend><b>Fórmulario de Feedeback</b></legend>
      </fieldset><br><br>

      <div class="inputBox">
        <input type="text" name="nome" id="nome" class="inputUser" required>
        <label for="nome" class="labelInput"><b>Nome Completo:</b> </label>
      </div><br><br>

      <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label for="email" class="labelInput"><b>Email:</b></label>
      </div><br><br>

      <div class="inputBox">
        <input type="number" name="idade" id="idade" class="inputUser" required>
        <label for="idade" class="labelInput"><b>Idade:</b></label>
      </div><br><br>

      <p><b>Sexo:</b></p>
      <input type="radio" id="masculino" name="sexo" value="masculino" required>
      <label for="masculino">Masculino</label>
      <input type="radio" id="feminino" name="sexo" value="feminino" required>
      <label for="feminino">Feminino</label>
      <input type="radio" id="outro" name="sexo" value="outro" required>
      <label for="outro">Outro</label><br><br>

      <div class="inputBox">
        <input type="text" name="cidade" id="cidade" class="inputUser" required>
        <label for="cidade" class="labelInput"><b>Cidade:</b></label>
      </div><br><br>

      <div class="inputBox">
        <input type="number" name="nota" id="nota" min="1" max="10">
        <label for="nota"><b>Nota para o site</b></label>
      </div><br><br>

      <div class="inputBox">
        <label for="comentario"><b>Comentario:</b></label><br>
        <textarea id="comentario" name="comentario" rows="4" cols="50" required></textarea>
      </div><br><br>

      
      <input type="submit" name="submit" value="Enviar" id="submit"></input:>
      

    </form>
  </div>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>