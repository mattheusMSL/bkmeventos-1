<!DOCTYPE html>
<html lang="en">

<head>
  <title>Administrador</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf8">
  <script src="../views/helpers/excluiradm.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../views/administrador/cssAdm/ButtonStyles.css">

</head>

<body>
  <div class="toast">
    <div class="toast-content">
      <i class="fas fa-solid fa-check check"></i>
      <div class="message">
        <span class="text text-1">Successo</span>
        <span class="text text-2">Suas alterações foram salvas.</span>
      </div>
    </div>
    <i class="fa-solid fa-xmark close"></i>
    <div class="progress"></div>
  </div>

  <?php

  include_once __DIR__ . "/../helpers/mensagem.php";

  ?>
  <header>

    <h1> Meus dados</h1>

  </header>
  <ul>
    <?php foreach ($data['administradores'] as $adm) : ?>

      <? //= $adm['idAdministrador'] 
      ?> <!--  "- " -->
      <?= $adm['nome_Adm'] ?> -
      <br>
      <?= $adm['email_Adm'] ?> -
      <br>
      <?= $adm['senha_Adm'] ?>.

    <?php endforeach; ?>
  </ul>
  <?php foreach ($data['administradores'] as $adm) : ?>
    <a href="./AdministradorController.php?action=edit&id=<?= $adm['idAdministrador'] ?>"> Editar </a> -
  <?php endforeach; ?>

  <!-- excluir isso e colocar os organizadores e eventos aqui -->

  <?php foreach ($data['administradores'] as $adm) : ?>
    <!-- <a href="javascript:confirmarExclusaoAdministrador('<?= $adm['nome_Adm'] ?>', <?= $adm['idAdministrador'] ?>)"> Excluir </a> -->
  <?php endforeach; ?>

  <!--  <p>
[ <a href="./administradorController.php?action=loadForm"> Cadastrar-se </a>] -->

</body>

</html>