<?php require_once 'cabecalho.php'; ?>

<?php 

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);

$usuario_nao_encontrado = false;
$senha_incorreta = false;

if ($user == "epansani") {
  if ($pass == "senha_da_nasa") {
    $usuario_nao_encontrado = false;
    $senha_incorreta = false;

    $_SESSION['user'] = $user;
    header("Location: index.php");
  } else {
    $senha_incorreta = true;
    unset($_SESSION['user']);
  }
} else {
  $usuario_nao_encontrado = true;
  unset($_SESSION['user']);
}

?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
    </div>

    <div class="row">
      <?php 
      if ($usuario_nao_encontrado):
      ?>
      <div class="alert alert-danger" role="alert">
        <h3>Falha ao efetuar autenticação</h3>
        <p>O usuário não foi encontrado.</p>
        <p>Verifique as informações e tente novamente.</p>
        <hr/>
        <a href="login.php"><p class="mb-0">Clique aqui para voltar</p></a>
      </div>
      <a href="login.php"><button type="button" class="btn btn-info">Voltar</button></a>
      <?php
      elseif ($senha_incorreta):
      ?>
      <div class="alert alert-danger" role="alert">
        <h3>Falha ao efetuar autenticação</h3>
        <p>A senha informada está incorreta.</p>
        <p>Verifique as informações e tente novamente.</p>
        <hr/>
        <a href="login.php"><p class="mb-0">Clique aqui para voltar</p></a>
      </div>
      <a href="login.php"><button type="button" class="btn btn-info">Voltar</button></a>
      <?php
      endif;
      ?>
    </div>
</div>

<?php require_once 'rodape.php'; ?>
