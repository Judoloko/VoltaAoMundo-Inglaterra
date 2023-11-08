<?php

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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Link para meu CSS -->
  <link rel="stylesheet" href="../css/main.css">

  <!-- Importando estilos especifico -->
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/img.css">

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
          <a class="nav-link mx-5 font-menu " href="../pages/dashboard.html">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5 font-menu" href="../php/listar-avaliacao.php">Avaliações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-5 font-menu" href="../php/listar-comentario.php">Comentários</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- FIM HEADER -->
  <h1>Dados de Avaliações</h1>
  <div class="tabela">
    <table border="2" class=" table table-striped table-sm  table-dark  w-50 p-3">
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
</body>

</html>