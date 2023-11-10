<?php

if (isset($_POST['submit'])) {
  // print_r('Nome: ' . $_POST['nome']);
  // print_r('<br>');
  // print_r('Email: ' . $_POST['email']);
  // print_r('<br>');
  // print_r('Telefone: ' . $_POST['telefone']);
  // print_r('<br>');
  // print_r('Sexo: ' . $_POST['genero']);
  // print_r('<br>');
  // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
  // print_r('<br>');
  // print_r('Cidade: ' . $_POST['cidade']);
  // print_r('<br>');
  // print_r('Estado: ' . $_POST['estado']);
  
  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['sexo'];
  $data_nasc = $_POST['data_nascimento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  

  $resultado = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado) 
        VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado')");

  header('Location: login.php');
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


  <title>Volta Ao Mundo - Inglaterra</title>
</head>

<body>

  <!-- INICIO MAIN -->
  <button class="btn btn-dark"  >
    <a href="home.php">Voltar</a>
  </button>
  <div class="box">
    <form action="formulario.php" method="POST">
      <fieldset>
        <legend><b>Fórmulario de Administrador</b></legend>
      </fieldset><br>

      <div class="inputBox">
        <input type="text" name="nome" id="nome" class="inputUser" required>
        <label for="nome" class="labelInput"><b>Nome completo:</b></label>
      </div><br><br>
      
      <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label for="email" class="labelInput"><b>Email:</b></label>
      </div><br><br>

      <div class="inputBox">
        <input type="password" name="senha" id="senha" class="inputUser" required>
        <label for="senha" class="labelInput"><b>Senha:</b></label>
      </div><br><br>


      <div class="inputBox">
        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
        <label for="telefone" class="labelInput"><b>Telefone:</b></label>
      </div><br><br>

      <p><b>Sexo:</b></p>
      <input type="radio" id="feminino" name="sexo" value="feminino" required>
      <label for="feminino"><b>Feminino</b></label>
      <br>
      <input type="radio" id="masculino" name="sexo" value="masculino" required>
      <label for="masculino"><b>Masculino</b></label>
      <br>
      <input type="radio" id="outro" name="sexo" value="outro" required>
      <label for="outro"><b>Outro</b></label><br><br>

      <label for="data_nascimento"><b>Data de Nascimento:</b></label>
      <input type="date" name="data_nascimento" id="data_nascimento" required>
      <br><br>
      
      <div class="inputBox">
        <input type="text" name="cidade" id="cidade" class="inputUser" required>
        <label for="cidade" class="labelInput"><b>Cidade</b></label>
      </div><br><br>

      <div class="inputBox">
        <input type="text" name="estado" id="estado" class="inputUser" required>
        <label for="estado" class="labelInput"><b>Estado</b></label>
      </div><br><br>

      <input type="submit" name="submit" id="submit">

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