<?php require_once 'cabecalho.php'; ?>

<?php 

if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
  $_SESSION["erro"] = "Usuário já está autenticado.";
  header("Location: index.php");
}

?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <form action="destino-login.php" method="post" class="col-8">
            <div class="mb-3">
                <label for="user" class="form-label">Usuário:</label>
                <input type="text" class="form-control" id="user" name="user" required placeholder="">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="pass" name="pass" required placeholder="">
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary m-1">Enviar</button>
                <button type="reset" class="btn btn-warning m-1">Limpar</button>
            </div>
        </form>
        <div class="col-2"></div>
    </div>
</div>

<?php require_once 'rodape.php'; ?>
