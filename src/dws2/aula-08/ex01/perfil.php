<?php require_once 'cabecalho.php'; ?>

<?php 

if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
  $_SESSION["erro"] = "Usuário não está autenticado.";
  header("Location: index.php");
}

?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Perfil</h1>
    </div>

    <div class="row">
      <div>
        <p>Nome: <b>Eder Pansani</b></p>
        <p>E-mail: <b>epansani@gmail.com</b></p>
        <p>Telefone: <b>(17) 3426-6999</b></p>
        <p>Endereço: <b>Rua dos Alfeneiros, n 4</b></p>
        <p>Cidade: <b>Little Whinging</b></p>
        <p>Estado: <b>Surrey</b></p>
      </div>
    </div>
</div>

<?php require_once 'rodape.php'; ?>

