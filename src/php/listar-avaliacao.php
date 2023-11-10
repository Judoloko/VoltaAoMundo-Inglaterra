<?php
session_start();
// print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: login.php');
}

require_once "./Classes/Feedback.php";
$comentario = new Feedback();
$listaComentarios = $comentario->listarAvaliacao();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicons -->
  <link rel="shortcut icon" href="../assets/inglaterra.png" type="image/png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/login.css">

  <!-- Importando estilos especifico -->
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">


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
          <a class="nav-link mx-5 font-menu " href="sistema.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5 font-menu" href="listar-avaliacao.php">Avaliações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5 font-menu" href="listar-comentario.php">Comentários</a>
        </li>
      </ul>
    </div>
    <div class="d-flex">
      <a href="sair.php" class="btn btn-danger">Sair</a>
    </div>
  </nav>
  <!-- FIM HEADER -->
  <h1>Dados de Avaliações</h1><br>
  <div class="m-2">
    <table border="2" class=" table table-striped table-sm  table-dark  w-100 p-3">
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Idade</th>
        <th>Sexo</th>
        <th>Cidade</th>
        <th>Nota</th>
      </tr>
      <?php foreach ($listaComentarios as $linha): ?>
        <tr>
          <td>
            <?php echo $linha['nome'] ?>
          </td>
          <td>
            <?php echo $linha['email'] ?>
          </td>
          <td>
            <?php echo $linha['idade'] ?>
          </td>
          <td>
            <?php echo $linha['sexo'] ?>
          </td>
          <td>
            <?php echo $linha['cidade'] ?>
          </td>
          <td>
            <?php echo $linha['nota'] ?>
          </td>
        </tr>

      <?php endforeach ?>
    </table>
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